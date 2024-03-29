<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Admin_Team extends Controller
{	
	public function action_index()
    {
		HTTP::redirect(Route::get('adminwithid')->uri(array('controller' => 'team', 'action' => 'getpage', 'id' => '1')));
    }
	
	public function action_getpage()
    {
    	$current = $this->request->param('id');
		
		$view=View::factory('admin/team');
		$view->title = "QVid Admin - Equipo";
		$view->menuid = 1;
		$view->infomsgtype = $this->request->param('msgtype');
		$view->infomsgtitle = $this->request->param('msgtitle');
		$view->infomsgtext = $this->request->param('msgtext');
		$view->team = ORM::factory('pagedata')
			->where('tag', '=', 'TEAMMEMBER')
			->select(array(DB::expr('(SELECT path FROM mediaresource WHERE mediaresource.id=pagedata.Resource_id)'), 'imagepath'))
			->limit(10)->offset(10*($current-1))->find_all();
		$view->currentpage = $current;
		$view->totalpages = (int) ORM::factory('pagedata')->where('tag', '=', 'TEAMMEMBER')->find_all()->count() / 10; 		
		$this->response->body($view->render());
    }
	
	public function action_new()
    {
    	if(!isset($_POST['tmname'])){
	        $view=View::factory('admin/teamedit');
			$view->title = "QVid Admin - Equipo";
			$view->menuid = 1;
			$view->infomsgtype = $this->request->param('msgtype');
			$view->infomsgtitle = $this->request->param('msgtitle');
			$view->infomsgtext = $this->request->param('msgtext');
			$view->tm = null;
			$view->images = ORM::factory('mediaresource')->where('filetag', '=', 'UserImage')->find_all();
			$this->response->body($view->render());
		}
		else{
			$tm = ORM::factory('pagedata');
			$tm->Name = $_POST['tmname'];
			$tm->Name2 = $_POST['tmname2'];
			$tm->Text = $_POST['tmdesc'];
			if($_POST['tmimg'] != ''){
				$tm->Resource_Id = $_POST['tmimg'];
			}
			$tm->Tag = 'TEAMMEMBER';
			$tm->Published = 'T';
			$tm->create();
			
			HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'team','action' => 'index',
				'msgtype' => 'success',
				'msgtitle' => 'Exito!',
				'msgtext' => 'Miembro de equipo creado con exito.')
			));
		}
    }
	
	public function action_edit()
    {
    	if(!isset($_POST['tmname'])){
	        $view=View::factory('admin/teamedit');
			$view->title = "QVid Admin - Equipo";
			$view->infomsgtype = $this->request->param('msgtype');
			$view->infomsgtitle = $this->request->param('msgtitle');
			$view->infomsgtext = $this->request->param('msgtext');
			$view->menuid = 1;
			$view->tm = ORM::factory('pagedata')
				->select(array(DB::expr('(SELECT path FROM mediaresource WHERE mediaresource.id=pagedata.Resource_id)'), 'imagepath'))
				->where('Id', '=', $this->request->param('id'))
				->find();
			$view->images = ORM::factory('mediaresource')->where('filetag', '=', 'UserImage')->find_all();
			$this->response->body($view->render());
		}
		else{
			$tm = ORM::factory('pagedata', $_POST['tmid']);
			$tm->Name = $_POST['tmname'];
			$tm->Name2 = $_POST['tmname2'];
			$tm->Text = $_POST['tmdesc'];
			if($_POST['tmimg'] != ''){
				$tm->Resource_Id = $_POST['tmimg'];
			}
			$tm->update();
			
			HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'team', 'action' => 'index',
				'msgtype' => 'success',
				'msgtitle' => 'Exito!',
				'msgtext' => 'Miembro de equipo modificado con exito.')
			));
		}
    }
	
	public function action_delete()
    {
        $tm = ORM::factory('pagedata', $this->request->param('id'));
		$tm->delete();
		
		HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'team', 'action' => 'index',
			'msgtype' => 'success',
			'msgtitle' => 'Exito!',
			'msgtext' => 'Miembro de equipo eliminado con exito.')
		));
    }
}