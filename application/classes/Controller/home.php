<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Home extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('home');
		$view->title = "QVid";
		$view->menuid = '1';
		$view->blogs = ORM::factory('blog')->where('published', '=', 'T')->order_by('Created_At', 'DESC')->limit(2)->find_all();
		$this->response->body($view->render());
    }
} // End Home