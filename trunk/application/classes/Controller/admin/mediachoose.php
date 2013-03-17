<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Admin_MediaChoose extends Controller
{	
    public function action_index()
    {
        HTTP::redirect(Route::get('adminwithid')->uri(array('controller' => 'mediachoose', 'action' => 'getpage', 'id' => '1')));
    }
	
	public function action_getpage()
    {
    	$current = $this->request->param('id');
		
		$view=View::factory('admin/mediachoose');
		$view->title = "QVid Admin - Seleccionar Media";
		$view->menuid = 3;
		$view->infomsgtype = $this->request->param('msgtype');
		$view->infomsgtitle = $this->request->param('msgtitle');
		$view->infomsgtext = $this->request->param('msgtext');
		$view->media = ORM::factory('mediaresource')->limit(10)->offset(10*($current-1))->find_all();
		$view->currentpage = $current;
		$view->totalpages = (int) ORM::factory('mediaresource')->find_all()->count() / 10; 		
		$session = Session::instance();
		$selecteditems = $session->get('selecteditems');
		if(isset($selecteditems)){
			$view->selecteditems = $selecteditems;
		}
		else{
			//$view->selecteditems = array();	
		}
		$this->response->body($view->render());
    }
	
	public function action_setpost(){
		if ($this->request->is_ajax()) {
			$session = Session::instance();
			$session->set('selecteditems', json_decode($_POST['selecteditem']));
		}
	}
}