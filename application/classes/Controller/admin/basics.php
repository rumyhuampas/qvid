<?php defined('SYSPATH') OR die('No Direct Script Access');
	
Class Controller_Admin_Basics extends Controller
{	
    public function action_index()
    {
    	if(!isset($_POST['bphone'])){
	        $view=View::factory('admin/basics');
			$view->title = "QVid Admin - Informacion basica";
			$view->menuid = 1;
			$view->infomsgtype = $this->request->param('msgtype');
			$view->infomsgtitle = $this->request->param('msgtitle');
			$view->infomsgtext = $this->request->param('msgtext');
			$view->phone = ORM::factory('pagedata')->where('tag', '=', 'PHONE')->and_where('published', '=', 'T')->find();
			$view->address = ORM::factory('pagedata')->where('tag', '=', 'ADDRESS')->and_where('published', '=', 'T')->find();
			$view->location = ORM::factory('pagedata')->where('tag', '=', 'LOCATION')->and_where('published', '=', 'T')->find();
			$view->email = ORM::factory('pagedata')->where('tag', '=', 'EMAIL')->and_where('published', '=', 'T')->find();
			$view->face = ORM::factory('pagedata')->where('tag', '=', 'FACEBOOK')->and_where('published', '=', 'T')->find();
			$view->slogan = ORM::factory('pagedata')->where('tag', '=', 'SLOGAN')->and_where('published', '=', 'T')->find();
			$this->response->body($view->render());
		}
		else{
			$phone = ORM::factory('pagedata')->where('tag', '=', 'PHONE')->and_where('published', '=', 'T')->find();
			$address = ORM::factory('pagedata')->where('tag', '=', 'ADDRESS')->and_where('published', '=', 'T')->find();
			$location = ORM::factory('pagedata')->where('tag', '=', 'LOCATION')->and_where('published', '=', 'T')->find();
			$email = ORM::factory('pagedata')->where('tag', '=', 'EMAIL')->and_where('published', '=', 'T')->find();
			$face = ORM::factory('pagedata')->where('tag', '=', 'FACEBOOK')->and_where('published', '=', 'T')->find();
			$slogan = ORM::factory('pagedata')->where('tag', '=', 'SLOGAN')->and_where('published', '=', 'T')->find();
			
			$phone->Text = $_POST['bphone'];
			$address->Text = $_POST['baddress'];
			$location->Text = $_POST['blocation'];
			$email->Text = $_POST['bemail'];
			$face->Text = $_POST['bface'];
			$slogan->Text = $_POST['bslogan'];
			
			$phone->update();
			$address->update();
			$location->update();
			$email->update();
			$face->update();
			$slogan->update();
			
			HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'basics', 'action' => 'index',
				'msgtype' => 'success',
				'msgtitle' => 'Exito!',
				'msgtext' => 'Datos basicos modificados con exito.')
			));
		}
    }
}