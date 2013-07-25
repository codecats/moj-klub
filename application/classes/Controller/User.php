<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Automatic{
	public function after()
	{
		if($this->show_details===TRUE)
		{
			$user=Auth::instance()->get_user();
			$team=$user->team;
			$view_details=$this->get_view_details($user);
			$view_component_about_user=View::factory('Component/About/User')
				->set('team', $team->as_array());
			$this->view_container
				->set('view_component_about_user', $view_component_about_user)
				->set('view_details', $view_details);
			
		}
		parent::after();
	}
	public function action_index()
	{
		$this->redirect_user(FALSE);
		
		$this->view_container=View::factory('Container/User/Main');
		$this->view_content=$this->view_container;
		$this->show_details=TRUE;
		/*
		$view_details=$this->get_view_details();
		$view_component_about_user=View::factory('Component/About/User');
		$this->view_container=View::factory('Container/User/Main')
			->set('view_component_about_user', $view_component_about_user)
			->set('view_details', $view_details);
		$this->view_content=$this->view_container;
		*/
	}
	public function action_change_user_avatar()
	{
		$this->redirect_user(FALSE);
		$change_success=FALSE;
	//	$user=Auth::instance()->get_user();
		$json_pack=Request::factory(
				Route::get('default')->uri(array('controller'=>'image', 'action'=>'change-user-avatar')))
			->post($this->request->post())
			->execute();
		$json_pack=json_decode($json_pack);
		$this->view_content=unserialize($json_pack->View);
	//	$view_details=$this->get_view_details($user);
	//	$view_component_about_user=View::factory('Component/About/User');
		$this->view_container=View::factory('Container/User/Main')
		//	->set('view_component_about_user', $view_component_about_user)
		//	->set('view_details', $view_details)
			->set('user_form', $this->view_content);
		$this->set_status_message($json_pack->status->state, $json_pack->status->message);
		$this->show_details=TRUE;
	}
	public function action_change_password()
	{
		$this->redirect_user(FALSE);
		$change_success=FALSE;
		$post=$this->request->post();
		$user=clone Auth::instance()->get_user();
		if($post)
		{
			$this->set_post_user_data($user, $post);
			$validator=$user->validate_change_password($post);
			if($validator->check()){
				try{
					$user->set('password', $post['new_password']);
					$user->save();
					Auth::instance()->get_user()->reload();
					$change_success=TRUE;
				}catch(Database_Exception $dbex){
					$this->set_status_message('Error', 'Probably database is busy. Try again in a while');
					$this->content=print_r($dbex, TRUE);
					echo $this->content;
				}
			}
			else
			{
				$this->error=$validator->errors('User/Change/Password');
			}
		}
		if($change_success===FALSE)
		{
			$user_form=View::factory('Component/Form/Change/Password')
				->set('error', $this->error);
			$this->view_content=$user_form;
			//$view_details=$this->get_view_details($user);
			$this->view_container=View::factory('Container/User/Main')
			//	->set('view_details', $view_details)
				->set('user_form', $user_form);
			$this->set_status_message('Warning', 'Correct your data');
			$this->show_details=TRUE;
		}
		else
		{
			$view_success=View::factory('Component/Info/Success');
			$this->view_content=$view_success;
		//	$view_details=$this->get_view_details($user);
			$this->view_container=View::factory('Container/User/Main')
		//	->set('view_details', $view_details)
			->set('user_form', $view_success);
			$this->set_status_message('Success', 'Zmiana danych przebiegła pomyślnie');
			$this->show_details=TRUE;
		}
	}
	public function action_change_data()
	{
		$this->redirect_user(FALSE);
		$change_success=FALSE;
		$post=$this->request->post();
		$user=clone Auth::instance()->get_user();
		$info=$user->info;
		if($post)
		{
			$this->set_post_user_data($user, $post);
			$this->set_post_info_data($info, $post);
			$validator=$user->validate_change_data($post);
			if($validator->check())
			{
				try{
					$user->save();
					$info->save();
					Auth::instance()->get_user()->reload();
					$change_success=TRUE;
				}catch(Database_Exception $dbex){
					$this->set_status_message('Error', 'Probably database is busy. Try again in a while');
					$this->content=print_r($dbex, TRUE);
					echo $this->content;
				}
			}
			else
			{
				$this->error=$validator->errors('User/Change/Data');
			}
		}
		if($change_success===FALSE)
		{	
			$user_form=View::factory('Component/Form/Change/User')
				->set('info', $info->as_array())
				->set('user', $user->as_array())
				->set('error', $this->error);
			$this->view_content=$user_form;
		//	$view_details=$this->get_view_details($user);
			$this->view_container=View::factory('Container/User/Main')
		//		->set('view_details', $view_details)
				->set('user_form', $user_form);
			$this->set_status_message('Warning', 'Correct your data');
			$this->show_details=TRUE;
		}
		else
		{
			$view_success=View::factory('Component/Info/Success');
			$this->view_content=$view_success;
		//	$view_details=$this->get_view_details($user);
			$this->view_container=View::factory('Container/User/Main')
			//	->set('view_details', $view_details)
				->set('user_form', $view_success);
			$this->set_status_message('Success', 'Zmiana danych przebiegła pomyślnie', 
					array('reload'=>TRUE));
			$this->show_details=TRUE;
		}
	}
	public function action_login()
	{
		$this->redirect_user();
		$login_success=FALSE;
		$post=$this->request->post();
		$user=ORM::factory('User');
		
		if($post)
		{
			$validator=$user->validate_login($post);
			if($validator->check())
			{
				$post['stay_login']=((isset($post['stay_login'])===TRUE)?TRUE:FALSE);
				if(Auth::instance()->login(
						$post['login_identificator'], $post['password'],$post['stay_login'])===TRUE)
				{
					$login_success=TRUE;
				}
				else 
				{
					$this->error=array('login_identificator'=>__('forget login or password').'?');
				}
			}
			else
			{
				$this->error=$validator->errors('User/Login');
			}
		}
		if($login_success===FALSE)
		{
			$this->view_content=View::factory('Component/Form/Login')
				->set('rel', $this->request->param('id'))
				->set('post', $post)
				->set('error', $this->error);
			$this->view_container=View::factory('Component/Access/Login')
				->set('form_login', $this->view_content);
			$this->set_status_message('Warning', 'Correct your data');
		}
		else
		{
			$this->view_content=View::factory('Component/Info/Login/Success')
				->set('user', Auth::instance()->get_user()->as_array());
			$this->view_container=View::factory('Component/Access/Login')
				->set('form_login', $this->view_content);
			$this->set_status_message('Success', 'Logowanie przebiegło pomyślnie', array('reload'=>TRUE));			
		}
	}
	public function action_logout()
	{
		//CSRF	echo '<img src="user/logout">pig</img>'; TODO: prevent it
	//	if(Security::check($this->request->param('id'))){
			$this->redirect_user(FALSE);
			Auth::instance()->logout();
			$this->view_content=View::factory('Component/Info/Logout/Success');
			$this->set_status_message('Success', 'Wylogowano użytkownika', array('reload'=>TRUE));
	//	}
	}
	public function action_registrate()
	{
		$this->redirect_user();
		$registrate_success=FALSE;
		$post=$this->request->post();
		
		$user=ORM::factory('User');
		$info=ORM::factory('Info');
		if($post)
		{
		/*	not tested yet
		 * $user->set('email', $post['email']);
			$user->set('username', $post['username']);
			$user->set('password', $post['password']);
			$info->set('name', $post['name']);
			$info->set('surname', $post['surname']);
			$info->set('phone', $post['phone']);
			$info->set('show_phone', ((isset($post['show_phone'])===TRUE)?TRUE:FALSE));
			$info->set('show_email', ((isset($post['show_email'])===TRUE)?TRUE:FALSE));*/
			$this->set_post_user_data($user, $post);/*new code*/
			$this->set_post_info_data($info, $post);/*new code*/
			$validator=$user->validate_register($post);
			if($validator->check())
			{
				try{
					$user->save();
					$info->user=$user;
					$info->save();
					self::add_role($user, 'login');
					self::add_role($user, 'player');
					$registrate_success=TRUE;
				}catch(Database_Exception $dbex){
					$this->set_status_message('Error', 'Probably database is busy. Try again in a while'); 
					var_dump($dbex);
				}
			}
			else
			{	
				$this->error=$validator->errors('User/Register');
			}
		}
		else
		{
			$info->set('show_phone', TRUE);
			$info->set('show_email', TRUE);
		}
		if($registrate_success===FALSE)
		{
			
			$captcha=Captcha::instance();
			$form=View::factory('Component/Form/Registrate')
				->set('user', $user->as_array())->set('info',$info->as_array())->set('captcha',$captcha)
				->set('error', $this->error);
			$this->view_content=$form;
			$this->view_container=View::factory('Component/Access/Registrate')
				->set('form_registrate', $form);
			$this->set_status_message('Warning', 'Correct your data');
		}
		else 
		{
			$this->view_content=View::factory('Component/Info/Registrate/Success')
				->set('user', $user->as_array());
			$this->view_container=View::factory('Component/Access/Registrate')
				->set('form_registrate', $this->view_content);
			$this->set_status_message('Success', 'Rejestracja zakończona powodzeniem');
		}
	}
	public static function add_role($user, $role_name)
	{
		$role=ORM::factory('Role', array('name'=>$role_name));
		$user->add('roles', $role);
	}
	protected function get_view_details($user=null)
	{
		if($user===null)$user=Auth::instance()->get_user();
		$info=$user->info;
		$info_popover['show_phone']=$this->set_view_popver($info->show_phone);
		$info_popover['show_email']=$this->set_view_popver($info->show_email);
		
		$roles=$user->roles->find_all();
		$avatar=ORM::factory('Avatar', array('id'=>$user->avatar_id));
		$team=$user->team;
		$roles_view=$this->get_team_roles($roles);
		$roles_view=implode(', ', $roles_view);
		$view_details=View::factory('Component/Menu/User/Details')
			->set('info', $info->as_array())
			->set('avatar', $avatar->as_array())
			->set('team', $team->as_array())
			->set('roles_view',$roles_view)
			->set('info_popover', $info_popover);
		return $view_details;
	}
	protected $show_details=FALSE;
	private function get_team_roles($roles)
	{
		$team_roles=array();
		$item=0;
		foreach($roles->as_array() as $role)
		{
			if($role->name!='login' AND $role->name!='admin')$team_roles[$item++]=$role->name;
		}
		return $team_roles;
	}
	private function set_view_popver($show)
	{
		$view_popover=null;
		$component_path='Component/Info/Popover/Visable/';
		if(isset($show) AND $show==='1')$view_popover=View::factory($component_path.'Public');
		else $view_popover=View::factory($component_path.'Private');
		return $view_popover;
	}
	private function set_post_user_data($user, $post)
	{
		//if(isset($post['email']))$user->set('email', $post['email']);
		$this->set_if_isset($user, $post, 'email');
		$this->set_if_isset($user, $post, 'username');
		$this->set_if_isset($user, $post, 'password');
		return $user;
	}
	private function set_post_info_data($info, $post)
	{
		$this->set_if_isset($info, $post, 'name');
		$this->set_if_isset($info, $post, 'surname');
		$this->set_if_isset($info, $post, 'phone');
		$info->set('show_phone', ((isset($post['show_phone'])===TRUE)?TRUE:FALSE));
		$info->set('show_email', ((isset($post['show_email'])===TRUE)?TRUE:FALSE));
		return $info;
	}
	private function set_if_isset($orm, $arr, $field)
	{
		if(isset($arr[$field]))$orm->set($field, $arr[$field]);
	}
}
