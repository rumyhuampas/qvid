<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Blog extends Controller
{	
    public function action_index()
    {
        $view=View::factory('blog');
		$view->title = "Blog";
		$view->menuid = '4';
		$view->blogTitle = 'QVid Blog';
		$view->blogs = ORM::factory('blog')->where('published', '=', 'T')->order_by('Created_At', 'DESC')->find_all();
		$this->response->body($view->render());
    }
	
	public function action_read()
	{
		$view=View::factory('blogreader');
		$view->title = "Blog";
		$view->menuid = '4';
		$view->blogTitle = 'QVid Blog';
		$view->blog = ORM::factory('blog', $this->request->param('id'));
		$this->response->body($view->render());
	}
	
	public function action_getuserblogs()
	{
		$view=View::factory('blog');
		$view->title = "Blog";
		$view->menuid = '0';
		$user = ORM::factory('user', $this->request->param('id'));
		$view->blogTitle = 'QVid Blog - "'.$user->Name.'" blogs';
		$view->blogs = ORM::factory('blog')->where('user_id', '=', $user->Id)
			->and_where('published', '=', 'T')->order_by('created_at', 'DESC')->find_all();
		$this->response->body($view->render());
	}
	
	public function action_gettagblogs()
	{
		$view=View::factory('blog');
		$view->title = "Blog";
		$view->menuid = '0';
		$tagname = $this->request->param('id');
		$view->blogTitle = 'QVid Blog - "'.$tagname.'" blogs';
		$view->blogs = ORM::factory('blog')->where('tags', 'LIKE', '%'.$tagname.'%')
			->and_where('published', '=', 'T')->order_by('created_at', 'DESC')->find_all();
		$this->response->body($view->render());
	}
} // End Blog