<?php defined('SYSPATH') OR die('No Direct Script Access');

class helpers_db {
    public static function getBlogs() {
    	$query = DB::select('blogs.id', array(DB::expr('DAY(blogs.createdAt)'), 'day'),
    				array(DB::expr('MONTH(blogs.createdAt)'), 'month'),
					'blogs.title', 'blogs.tags', 'blogs.text', array('users.name', 'username'))
					->from('blogs')
					->join('users')->on('blogs.user_id', '=', 'users.id')
					->order_by('blogs.createdAt', 'DESC');
        $result = $query->execute();
		return $result;
    }
	
	public static function getMonthName($monthNum){
		$monthNames = array(
			1 => 'Ene',
			2 => 'Feb',
			3 => 'Mar',
			4 => 'Abr',
			5 => 'May',
			6 => 'Jun',
			7 => 'Jul',
			8 => 'Ago',
			9 => 'Sep',
			10 => 'Oct',
			11 => 'Nov',
			12 => 'Dic'
		);
		return $monthNames[$monthNum];
	}
	
	public static function getBlogResources($blogId){
		$query = DB::select('mediaresource.path', 'mediaresource.filename')
					->from('blog_media')
					->join('mediaresource')->on('mediaresource.Id', '=', 'blog_media.mediaresource_id')
					->where('blog_media.blog_id', '=', $blogId);
        $result = $query->execute();
		return $result;	
	}
}