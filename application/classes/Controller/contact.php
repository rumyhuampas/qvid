<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Contact extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('contact');
		$view->title = "Contacto";
		$view->menuid = '5';
		$this->response->body($view->render());
    }
} // End Contact