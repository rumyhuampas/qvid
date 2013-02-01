<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Servcinema extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('servcinema');
		$view->title = "Servicios - Cine/Entretenimiento";
		$view->menuid = '3';
		$this->response->body($view->render());
    }
} // End ServCinema