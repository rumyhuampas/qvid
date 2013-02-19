<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Servevent extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('servevent');
		$view->title = "Servicios - Eventos deportivos";
		$view->menuid = '3';
		$view->blogs = ORM::factory('blog')->where('published', '=', 'T')->order_by('Created_At', 'DESC')->limit(2)->find_all();
		$this->response->body($view->render());
    }
} // End ServEvent