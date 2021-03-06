<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Welcome extends Controller_Automatic {

	public function action_index()
	{
	    // Be sure to only profile if it's enabled
	    if (Kohana::$profiling === TRUE)
	    {
	        // Start a new benchmark
	        $benchmark = Profiler::start('Welcome index', __FUNCTION__);
	    }
		
		$bigger_team = ORM::factory('Team')->get_biggest()->find();
		if ($bigger_team->loaded()) {
			$main_team = ORM::factory('Team')->get_most_popular()->find();
			$main_team_photos = ORM::factory('Photo')
				->order_by('uploaded', 'DESC')
				->where('team_id', '=', $main_team->id)
				->limit(5)
				->find_all();
			$main_team_avatar = $main_team->avatar;
	
			$popular_teams = ORM::factory('Team')
				->get_biggest($bigger_team->counter, $main_team->id)->limit(3)->find_all();
			
			$component_carousel =  View::factory('Component/Carousel')
				->set('team', 	$main_team->as_array())
				->set('photos', $main_team_photos->as_array())
				->set('avatar', $main_team_avatar->as_array());
			
			$component_access_quick = View::factory('Component/Access/Quick');
			
			$component_thumbnails_team = View::factory('Component/Thumbnails/Team')
				->set('teams', $popular_teams->as_array());
			
			$this->view_container = $this->view_content = View::factory('Container/Welcome/Main')
				->set('user', Auth::instance()->get_user())
				->set('component_carousel', 		$component_carousel)
				->set('component_thumbnails_team', 	$component_thumbnails_team);
	
			
			//stats
			$users = ORM::factory('User')->get_training_time()
				->limit(15)->find_all();
			$biggest_teams = ORM::factory('Team')->get_biggest($bigger_team->counter)
				->limit(10)->find_all();
			$trainings =  ORM::factory('User')->get_last_trainings(10);
	
			$container_statistics = View::factory('Container/Statistics/Main');
			$container_statistics
				->set('users', $users)
				->set('teams', $biggest_teams)
				->set('trainings', $trainings);
	
			$this->view_container->container_statistics = $container_statistics;
		//>stats
		}	
		else 
		{
			$component_carousel =  View::factory('Component/Carousel')
				->set('team', 	array())
				->set('photos', array())
				->set('avatar', array());
				
			$component_thumbnails_team = View::factory('Component/Thumbnails/Team')
			->set('teams', array());
			
			$this->view_container = $this->view_content = View::factory('Container/Welcome/Main')
				->set('user', Auth::instance()->get_user())
				->set('component_carousel', 		$component_carousel)
				->set('component_thumbnails_team', 	$component_thumbnails_team);
			$this->view_container->container_statistics = NULL;
		}
		if (isset($benchmark))
		{
			// Stop the benchmark
			Profiler::stop($benchmark);
			
		//	file_put_contents('/home/t/www/moj-klub/upload/prof.html', View::factory('profiler/stats'));
		}
	}

}