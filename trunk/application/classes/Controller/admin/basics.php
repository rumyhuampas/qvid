<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Admin_Basics extends Controller
{	
    public function action_index()
    {
        $view=View::factory('admin/basics');
		$view->title = "QVid Admin - Informacion basica";
		$view->menuid = 2;
		$view->infomsgtype = $this->request->param('msgtype');
		$view->infomsgtitle = $this->request->param('msgtitle');
		$view->infomsgtext = $this->request->param('msgtext');
		$view->team = ORM::factory('pagedata')->where('tag', '=', 'PHONE')->find_all();
		$this->response->body($view->render());
    }
	
	public function action_edit()
    {
    	if(!isset($_POST['tmname'])){
	        $view=View::factory('admin/teamedit');
			$view->title = "QVid Admin - Equipo";
			$view->infomsgtype = $this->request->param('msgtype');
			$view->infomsgtitle = $this->request->param('msgtitle');
			$view->infomsgtext = $this->request->param('msgtext');
			$view->menuid = 2;
			$view->tm = ORM::factory('pagedata', $this->request->param('id'));
			$this->response->body($view->render());
		}
		else{
			$tm = ORM::factory('pagedata', $_POST['tmid']);
			$tm->Name = $_POST['tmname'];
			$tm->Name2 = $_POST['tmname2'];
			$tm->Text = $_POST['tmdesc'];
			$tm->update();
			
			HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'team', 'action' => 'index',
				'msgtype' => 'success',
				'msgtitle' => 'Exito!',
				'msgtext' => 'Miembro de equipo modificado con exito.')
			));
		}
    }
}