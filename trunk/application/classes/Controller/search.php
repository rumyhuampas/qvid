<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Search extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('blog');
		$view->title = "Busqueda";
		$view->menuid = '0';
		if(isset($_POST['searchfield'])){
			$search = $_POST['searchfield'];
		}
		else{
			$search = '';	
		}
		$view->blogTitle = 'Busqueda: "'.$search.'"';
		$view->blogs = ORM::factory('blog')->where_open()->or_where('title', 'LIKE', '%'.$search.'%')
			->or_where('text', 'LIKE', '%'.$search.'%')
			->or_where('tags', 'LIKE', '%'.$search.'%')
			->where_close()
			->and_where('published', '=', 'T')->order_by('created_at', 'DESC')->find_all();
		$this->response->body($view->render());
    }
} // End Search