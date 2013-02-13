<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Look extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('look');
		$view->title = "QVid";
		$view->menuid = 0;
		$this->response->body($view->render());
    }
} // End Home