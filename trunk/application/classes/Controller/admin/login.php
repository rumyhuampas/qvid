<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Admin_Login extends Controller
{	
    public function action_index()
    {
        $view=View::factory('admin/login');
		$view->title = "QVid - Login";
		$view->menuid = 0;
		$this->response->body($view->render());
		
		if(isset($_POST['loginuser'])){
			HTTP::redirect(Route::get('admin')
				->uri(array(
					'controller' => 'home',
					'id' => $_POST['loginuser'])
				));
		}
    }
}