<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Admin_Users extends Controller
{	
    public function action_index()
    {
        $view=View::factory('admin/users');
		$view->title = "QVid Admin - Usuarios";
		$view->infomsg = $this->request->param('id');
		$view->menuid = 6;
		$view->users = ORM::factory('user')->find_all();
		$this->response->body($view->render());
    }
	
	public function action_new()
    {
    	if(!isset($_POST['username'])){
	        $view=View::factory('admin/useredit');
			$view->title = "QVid Admin - Usuarios";
			$view->infomsg = null;
			$view->menuid = 6;
			$view->user = null;
			$this->response->body($view->render());
		}
		else{
			$user = ORM::factory('user');
			$user->Name = $_POST['username'];
			$user->Password = $_POST['userpass'];
			$user->Description = $_POST['userdesc'];
			$user->create();
			
			$infomsg = array('0' => 'success', '1' => 'Exito', '2' => 'Usuario guardado con exito.');
			
			HTTP::redirect(Route::get('admin')->uri(array('controller' => 'users', 'id' => $infomsg)));
		}
    }
	
	public function action_edit()
    {
    	if(!isset($_POST['username'])){
	        $view=View::factory('admin/useredit');
			$view->title = "QVid Admin - Usuarios";
			$view->infomsg = null;
			$view->menuid = 6;
			$view->user = ORM::factory('user', $this->request->param('id'));
			$this->response->body($view->render());
		}
		else{
			$user = ORM::factory('user', $_POST['userid']);
			$user->Name = $_POST['username'];
			$user->Password = $_POST['userpass'];
			$user->Description = $_POST['userdesc'];
			$user->update();
			
			HTTP::redirect(Route::get('admin')->uri(array('controller' => 'users')));
		}
    }
	
	public function action_delete()
    {
        $user = ORM::factory('user', $this->request->param('id'));
		$user->delete();
		
		HTTP::redirect(Route::get('admin')->uri(array('controller' => 'users')));
    }
}