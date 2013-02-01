<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Blog extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('blog');
		$view->title = "Blog";
		$view->menuid = '4';
		$this->response->body($view->render());
    }
} // End Blog