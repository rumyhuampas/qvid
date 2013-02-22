<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Admin_Home extends Controller
{	
    public function action_index()
    {
        $view=View::factory('admin/home');
		$view->title = "QVid Admin - Inicio";
		$view->infomsg = null;
		$view->menuid = 1;
		$view->user = $this->request->param('id');
		$this->response->body($view->render());
    }
}