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
    	if(!isset($_POST['blogtitle'])){
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
			$blog = ORM::factory('blog');
			$blog->Title = $_POST['blogtitle'];
			$blog->Text = $_POST['blogtext'];
			$blog->Tags = $_POST['blogtags'];
			$blog->create();
			
			HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'blogs','action' => 'index',
				'msgtype' => 'success',
				'msgtitle' => 'Exito!',
				'msgtext' => 'Blog creado con exito.')
			));
		}
    }
	
	public function action_edit()
    {
    	if(!isset($_POST['blogtitle'])){
	        $view=View::factory('admin/blogsedit');
			$view->title = "QVid Admin - Blogs";
			$view->infomsgtype = $this->request->param('msgtype');
			$view->infomsgtitle = $this->request->param('msgtitle');
			$view->infomsgtext = $this->request->param('msgtext');
			$view->menuid = 2;
			$view->blog = ORM::factory('blog', $this->request->param('id'));
			$this->response->body($view->render());
		}
		else{
			$blog = ORM::factory('blog', $_POST['blogid']);
			$blog->Title = $_POST['blogtitle'];
			$blog->Text = $_POST['blogtext'];
			$blog->Tags = $_POST['blogtags'];
			$blog->update();
			
			HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'blogs', 'action' => 'index',
				'msgtype' => 'success',
				'msgtitle' => 'Exito!',
				'msgtext' => 'Blog modificado con exito.')
			));
		}
    }
	
	public function action_delete()
    {
        $blog = ORM::factory('blog', $this->request->param('id'));
		$blog->delete();
		
		HTTP::redirect(Route::get('adminwithmsg')->uri(array('controller' => 'blogs', 'action' => 'index',
			'msgtype' => 'success',
			'msgtitle' => 'Exito!',
			'msgtext' => 'Blog eliminado con exito.')
		));
    }
}