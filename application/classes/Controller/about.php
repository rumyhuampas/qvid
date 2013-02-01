<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_About extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('about');
		$view->title = "Acerca de QVid";
		$view->menuid = '2';
		$this->response->body($view->render());
    }
} // End About