<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Blog extends Controller
{	
    public function action_index()
    {
        $view=View::factory('blog');
		$view->title = "Blog";
		$view->menuid = '4';
		//throw 'test';
		$this->response->body($view->render());
    }
	
	public function action_read()
	{
		$view=View::factory('blogreader');
		$view->title = "Blog";
		$view->menuid = '4';
		$view->blogid = $this->request->param('id');
		$this->response->body($view->render());
	}
} // End Blog