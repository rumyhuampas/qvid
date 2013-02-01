<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Servsecurity extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('servsecurity');
		$view->title = "Servicios - Seguridad";
		$view->menuid = '3';
		$this->response->body($view->render());
    }
} // End ServSecurity