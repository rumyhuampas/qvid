<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Blog extends Controller
{	
    public function action_index()
    {
        $view=View::factory('blog');
		$view->title = "Blog";
		$view->menuid = '4';
		$view->blogTitle = 'QVid Blog';
		$view->tag = '';
		$view->userid = -1;
		$this->response->body($view->render());
    }
	
	public function action_read()
	{
		$view=View::factory('blogreader');
		$view->title = "Blog";
		$view->menuid = '4';
		$view->blogTitle = 'QVid Blog';
		$view->blogid = $this->request->param('id');
		$this->response->body($view->render());
	}
	
	public function action_getuserblogs()
	{
		$view=View::factory('blog');
		$view->title = "Blog";
		$view->menuid = '0';
		$view->blogTitle = 'QVid Blog - "'.helpers_db::getUserName($this->request->param('id')).'" blogs';
		$view->tag = '';
		$view->userid = $this->request->param('id');
		$this->response->body($view->render());
	}
	
	public function action_gettagblogs()
	{
		$view=View::factory('blog');
		$view->title = "Blog";
		$view->menuid = '0';
		$view->blogTitle = 'QVid Blog - "'.$this->request->param('id').'" blogs';
		$view->tag = $this->request->param('id');
		$view->userid = -1;
		$this->response->body($view->render());
	}
} // End Blog