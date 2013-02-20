<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Admin_Login extends Controller
{	
    public function action_index()
    {
        $view=View::factory('admin/login');
		$view->title = "QVid - Login";
		$this->response->body($view->render());
    }
}