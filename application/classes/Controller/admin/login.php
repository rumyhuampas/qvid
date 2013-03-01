<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Admin_Login extends Controller
{	
    public function action_index()
    {
    	if(Cookie::get('adminuser')){
    		HTTP::redirect(Route::get('admin')
			->uri(array(
				'controller' => 'basics', 'action' => 'index')
			));
		}
		else{ 
	        $view=View::factory('admin/login');
			$view->title = "QVid - Login";
			$view->menuid = 0;
			$view->islogin = true;
			$view->infomsgtype = $this->request->param('msgtype');
			$view->infomsgtitle = $this->request->param('msgtitle');
			$view->infomsgtext = $this->request->param('msgtext');
			$this->response->body($view->render());
			
			if(isset($_POST['loginuser'])){
				$user = $_POST['loginuser'];
				$pass = $_POST['loginpass'];
				if($user != '' && $pass != ''){
					$log = ORM::factory('user')->where('name', '=', $user)->and_where('password', '=', $pass)->find();
					if($log->loaded()){
						Cookie::set('adminuser', $log->Id);
						HTTP::redirect(Route::get('admin')
							->uri(array(
								'controller' => 'basics', 'action' => 'index')
							));
					}
					else{
						HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'login','action' => 'index',
							'msgtype' => 'error',
							'msgtitle' => 'Error!',
							'msgtext' => 'Usuario o contrasena incorrectos.')
						));
					}
				}
				else {
					HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'login','action' => 'index',
						'msgtype' => 'error',
						'msgtitle' => 'Error!',
						'msgtext' => 'Debe ingresar usuario y contrasena.')
					));
				}
			}
		}
    }

	public function action_logoff()
	{
		Cookie::delete('adminuser');
		HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'login','action' => 'index',
			'msgtype' => 'success',
			'msgtitle' => 'Gracias!',
			'msgtext' => 'Gracias%20por%20utilizar%20nuestros%20servicios.')
		));
	}
}