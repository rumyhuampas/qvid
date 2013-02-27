<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Contact extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('contact');
		$view->title = "Contacto";
		$view->menuid = '5';
		$view->location = ORM::factory('pagedata')->where('tag', '=', 'LOCATION')->and_where('published', '=', 'T')->find();
		$this->response->body($view->render());
    }
} // End Contact