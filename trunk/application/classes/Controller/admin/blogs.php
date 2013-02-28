<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Admin_Blogs extends Controller
{	
    public function action_index()
    {
        $view=View::factory('admin/blogs');
		$view->title = "QVid Admin - Blogs";
		$view->menuid = 2;
		$view->infomsgtype = $this->request->param('msgtype');
		$view->infomsgtitle = $this->request->param('msgtitle');
		$view->infomsgtext = $this->request->param('msgtext');
		$view->blogs = ORM::factory('blog')->find_all();
		$this->response->body($view->render());
    }
	
	public function action_new()
    {
    	if(!isset($_POST['username'])){
	        $view=View::factory('admin/blogedit');
			$view->title = "QVid Admin - Blogs";
			$view->menuid = 2;
			$view->infomsgtype = $this->request->param('msgtype');
			$view->infomsgtitle = $this->request->param('msgtitle');
			$view->infomsgtext = $this->request->param('msgtext');
			$view->blog = null;
			$this->response->body($view->render());
		}
		else{
			if($_POST['userpass'] == $_POST['userrepass']){
				$user = ORM::factory('user');
				$user->Name = $_POST['username'];
				$user->Password = $_POST['userpass'];
				$user->Description = $_POST['userdesc'];
				$user->create();
				
				HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'blogs','action' => 'index',
					'msgtype' => 'success',
					'msgtitle' => 'Exito!',
					'msgtext' => 'Usuario creado con exito.')
				));
			}
			else{
				HTTP::redirect(Route::get('adminwithidmsg')->uri(array('controller' => 'blogs', 'action' => 'new',
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
	        $view=View::factory('admin/blogsedit');
			$view->title = "QVid Admin - Blogs";
			$view->infomsgtype = $this->request->param('msgtype');
			$view->infomsgtitle = $this->request->param('msgtitle');
			$view->infomsgtext = $this->request->param('msgtext');
			$view->menuid = 3;
			$view->blog = ORM::factory('blog', $this->request->param('id'));
			$this->response->body($view->render());
		}
		else{
			if($_POST['userpass'] == $_POST['userrepass']){
				$user = ORM::factory('user', $_POST['userid']);
				if($_POST['useroldpass'] == $user->Password){
					$user->Name = $_POST['username'];
					$user->Password = $_POST['userpass'];
					$user->Description = $_POST['userdesc'];
					$user->update();
					
					HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'blogs', 'action' => 'index',
						'msgtype' => 'success',
						'msgtitle' => 'Exito!',
						'msgtext' => 'Usuario modificado con exito.')
					));
				}
				else{
					HTTP::redirect(Route::get('adminwithidmsg')->uri(array('controller' => 'blogs', 'action' => 'edit',
						'id' => $_POST['userid'],
						'msgtype' => 'error',
						'msgtitle' => 'Error!',
						'msgtext' => 'La contrasena actual es incorrecta.')
					));
				}
			}
			else{
				HTTP::redirect(Route::get('adminwithidmsg')->uri(array('controller' => 'blogs', 'action' => 'edit',
					'id' => $_POST['userid'],
					'msgtype' => 'error',
					'msgtitle' => 'Error!',
					'msgtext' => 'Las contrasenas nuevas deben ser iguales.')
				));
			}
		}
    }
	
	public function action_delete()
    {
        $user = ORM::factory('blog', $this->request->param('id'));
		$user->delete();
		
		HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'blogs', 'action' => 'index',
			'msgtype' => 'success',
			'msgtitle' => 'Exito!',
			'msgtext' => 'Usuario eliminado con exito.')
		));
    }
}