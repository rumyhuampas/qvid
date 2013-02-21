<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Admin_Home extends Controller
{	
    public function action_index()
    {
        $view=View::factory('admin/home');
		$view->title = "QVid - Admin Home";
		$this->response->body($view->render());
    }
}