<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Servevent extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('servevent');
		$view->title = "Servicios - Eventos deportivos";
		$view->menuid = '3';
		$this->response->body($view->render());
    }
} // End ServEvent