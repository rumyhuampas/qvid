<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Admin_Users extends Controller
{	
    public function action_index()
    {
        $view=View::factory('admin/users');
		$view->title = "QVid Admin - Usuarios";
		$view->menuid = 4;
		$view->infomsgtype = $this->request->param('msgtype');
		$view->infomsgtitle = $this->request->param('msgtitle');
		$view->infomsgtext = $this->request->param('msgtext');
		$view->users = ORM::factory('user')
			->select(array(DB::expr('(SELECT path FROM mediaresource WHERE mediaresource.id=user.Image_id)'), 'imagepath'))
			->find_all();
		$this->response->body($view->render());
    }
	
	public function action_new()
    {
    	if(!isset($_POST['username'])){
	        $view=View::factory('admin/useredit');
			$view->title = "QVid Admin - Usuarios";
			$view->menuid = 4;
			$view->infomsgtype = $this->request->param('msgtype');
			$view->infomsgtitle = $this->request->param('msgtitle');
			$view->infomsgtext = $this->request->param('msgtext');
			$view->user = null;
			$view->images = ORM::factory('mediaresource')->where('filetag', '=', 'UserImage')->find_all();
			$this->response->body($view->render());
		}
		else{
			if($_POST['userpass'] == $_POST['userrepass']){
				$user = ORM::factory('user');
				$user->Name = $_POST['username'];
				$user->Password = $_POST['userpass'];
				$user->Description = $_POST['userdesc'];
				if($_POST['userimg'] != ''){
					$user->Image_Id = $_POST['userimg'];
				}
				$user->create();
				
				HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'users','action' => 'index',
					'msgtype' => 'success',
					'msgtitle' => 'Exito!',
					'msgtext' => 'Usuario creado con exito.')
				));
			}
			else{
				HTTP::redirect(Route::get('adminwithidmsg')->uri(array('controller' => 'users', 'action' => 'new',
					'id' => '-1',
					'msgtype' => 'error',
					'msgtitle' => 'Error!',
					'msgtext' => 'Las contrasenas deben ser iguales.')
				));
			}
		}
    }
	
	public function action_edit()
    {
    	if(!isset($_POST['username'])){
	        $view=View::factory('admin/useredit');
			$view->title = "QVid Admin - Usuarios";
			$view->infomsgtype = $this->request->param('msgtype');
			$view->infomsgtitle = $this->request->param('msgtitle');
			$view->infomsgtext = $this->request->param('msgtext');
			$view->menuid = 4;
			$view->user = ORM::factory('user')
				->select(array(DB::expr('(SELECT path FROM mediaresource WHERE mediaresource.id=user.Image_id)'), 'imagepath'))
				->where('Id', '=', $this->request->param('id'))
				->find();
			$view->images = ORM::factory('mediaresource')->where('filetag', '=', 'UserImage')->find_all();
			$this->response->body($view->render());
		}
		else{
			if($_POST['useroldpass'] != '' || $_POST['userpass'] != '' || $_POST['userrepass'] != ''){
				if($_POST['userpass'] == $_POST['userrepass']){
					$user = ORM::factory('user', $_POST['userid']);
					if($_POST['useroldpass'] == $user->Password){
						$user->Name = $_POST['username'];
						$user->Password = $_POST['userpass'];
						$user->Description = $_POST['userdesc'];
						if($_POST['userimg'] != ''){
							$user->Image_Id = $_POST['userimg'];
						}
						$user->update();
						
						HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'users', 'action' => 'index',
							'msgtype' => 'success',
							'msgtitle' => 'Exito!',
							'msgtext' => 'Usuario modificado con exito.')
						));
					}
					else{
						HTTP::redirect(Route::get('adminwithidmsg')->uri(array('controller' => 'users', 'action' => 'edit',
							'id' => $_POST['userid'],
							'msgtype' => 'error',
							'msgtitle' => 'Error!',
							'msgtext' => 'La contrasena actual es incorrecta.')
						));
					}
				}
				else{
					HTTP::redirect(Route::get('adminwithidmsg')->uri(array('controller' => 'users', 'action' => 'edit',
						'id' => $_POST['userid'],
						'msgtype' => 'error',
						'msgtitle' => 'Error!',
						'msgtext' => 'Las contrasenas nuevas deben ser iguales.')
					));
				}
			}
			else{
				$user = ORM::factory('user', $_POST['userid']);
				$user->Name = $_POST['username'];
				$user->Description = $_POST['userdesc'];
				if($_POST['userimg'] != ''){
					$user->Image_Id = $_POST['userimg'];
				}
				$user->update();
				
				HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'users', 'action' => 'index',
					'msgtype' => 'success',
					'msgtitle' => 'Exito!',
					'msgtext' => 'Usuario modificado con exito.')
				));
			}
		}
    }
	
	public function action_delete()
    {
        $user = ORM::factory('user', $this->request->param('id'));
		$user->delete();
		
		HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'users', 'action' => 'index',
			'msgtype' => 'success',
			'msgtitle' => 'Exito!',
			'msgtext' => 'Usuario eliminado con exito.')
		));
    }
}