<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Team extends Controller
{ 
    public function action_index()
    {
        $view=View::factory('team');
		$view->title = "Nuestro equipo";
		$view->menuid = '2';
		$view->team = ORM::factory('pagedata')
			->select(array(DB::expr('(SELECT path FROM mediaresource WHERE mediaresource.id=pagedata.resource_id)'), 'imagepath'))
			->where('tag', '=', 'TEAMMEMBER')
			->and_where('published', '=', 'T')->find_all();
		$this->response->body($view->render());
    }
} // End Team