<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Team extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('team');
		$view->title = "Nuestro equipo";
		$view->menuid = '2';
		$this->response->body($view->render());
    }
} // End Team