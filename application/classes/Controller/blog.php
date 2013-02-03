<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Blog extends Controller
{
	public $model;
	
	public function before()
	{
		$this->model=Model::factory('blog');	
	}
	
    public function action_index()
    {
        $view=View::factory('blog');
		$view->title = "Blog";
		$view->menuid = '4';
		$blogs = $this->model->getBlogs();
		$view->bImages = array();
		foreach($blogs as $b)
		{
			$images = $this->getBlogImages($b['id']);
			foreach($images as $i)
			{
				$view->bImages[$b['id']] = $i['path'];
			} 
		}
		$view->blogs = $blogs;
		$this->response->body($view->render());
    }
	
	private function getBlogImages($blogId)
	{
		return $this->model->getBlogImages($blogId);
	}
} // End Blog