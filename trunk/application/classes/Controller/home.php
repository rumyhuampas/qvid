<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Home extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('home');
		$view->title = "QVid";
		$view->menuid = '1';
		$this->response->body($view->render());
    }
} // End Home