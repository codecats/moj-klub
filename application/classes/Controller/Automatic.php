<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Automatic extends Controller_Template{
	public function before()
	{
		if($this->request->is_ajax()===TRUE OR $this->request->is_initial()===FALSE)
			$this->auto_render=FALSE;

		parent::before();
		View::bind_global('page_title', $this->page_title);
		$this->page_title=$this->request->controller();
		if(Auth::instance()->logged_in()===TRUE)
		{
			View::set_global('user', Auth::instance()->get_user()->as_array());
		}
		
	}
	public function after(){
		if($this->auto_render===FALSE)
		{
			$json_array=array(
				'View'=>$this->view_content,
				'status'=>$this->status
			);
			if($this->request->is_ajax())
			{
				$json_array['View']=$json_array['View']->render();
				echo json_encode($json_array);
			}
			else if($this->request->is_initial()===FALSE)
			{
				$json_array['View']=serialize($json_array['View']);
				$this->response->body(json_encode($json_array));
			}
		}
		else
		{
			if(isset($this->view_container)===FALSE)$this->view_container=$this->view_content;
			$view_main=View::factory('Container/Main')->set('view', $this->view_container);
			View::set_global('view_container', $view_main);
			$header_menu_access=new Controller_Header_Menu_Access();
			$this->template->set('header_menu_access',$header_menu_access->get_menu());
			if(Auth::instance()->logged_in()===TRUE)
			{
				View::set_global('user', Auth::instance()->get_user()->as_array());
				$roles=Auth::instance()->get_user()->roles->find_all();
				$cookie=implode(',', $roles->as_array());
				Cookie::set('roles', $cookie);
			}
			else
			{
				Cookie::set('roles', '-1');
			}
		}
		parent::after();
	}
	public function redirect_user($logged_in=TRUE)
	{
		if(Auth::instance()->logged_in()===$logged_in)
		{
			HTTP::redirect(Route::get('default')->uri());			
		}
		return $this;
	}
	/**
	 * if set status only if status is not set
	 * @param string $state
	 * @param string $msg
	 * @param aray $properties
	 * @return Controller_Automatic
	 */
	public function set_status_message($state, $msg=null, $properties=array())
	{
		if(!isset($this->status))
		{
			$this->status['state']=$state;
			$this->status['message']=$msg;
			foreach($properties as $prop=>$val)
			{
				$this->status[$prop]=$val;
			}
			if(!empty($this->status['state']) AND empty($this->status['message']))
			{
				switch($this->status['state'])
				{
					case 'Warning':
						$this->status['message']='Correct your data';
						break;
					case 'Success':
						$this->status['message']='operation completed successfully';
						break;
				}
			}
		}
		return $this;
	}
	public function clear_status_message()
	{
		if(isset($this->status))unset($this->status);
		return $this;
	}
	public $template='Template';
	public $page_title;
	public $view_container;
	public $view_content;
	public $status;
	protected $error;
}
