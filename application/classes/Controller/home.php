<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Home extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('home');
		$view->title = "QVid";
		$view->menuid = '1';
		$view->slides = ORM::factory('mediaresource')
			->where('resource_type', '=', 'PICTURE')
			->and_where('filetag', '=', 'HomeSlide')
			->order_by('Created_At')->find_all();
		$view->videos = ORM::factory('mediaresource')
			->where('resource_type', '=', 'VIDEO')
			->and_where('filetag', '=', 'HomeVideo')
			->order_by('Created_At')->find_all();
		$view->services = ORM::factory('mediaresource')
			->where('resource_type', '=', 'PICTURE')
			->and_where('filetag', '=', 'HomeService')
			->order_by('Created_At')->find_all();
		$view->blogs = ORM::factory('blog')
			->where('published', '=', 'T')
			->order_by('Created_At', 'DESC')->limit(2)->find_all();
		$view->testimonials = ORM::factory('pagedata')
			->where('tag', '=', 'TESTIMONIAL')
			->and_where('published', '=', 'T')->find_all();
		$this->response->body($view->render());
    }
} // End Home