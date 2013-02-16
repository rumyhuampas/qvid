<?php defined('SYSPATH') OR die('No Direct Script Access');

class helpers_db {
	//---------- BLOG FUNCS----------
	
    public static function getBlogs($amount = 0, $textlimit = 250) {
    	if($amount == 'undefined' || $amount == 0){
			$query = DB::select('blogs.id', array(DB::expr('DAY(blogs.createdAt)'), 'day'),
				array(DB::expr('MONTH(blogs.createdAt)'), 'month'),
				'blogs.title', 'blogs.tags', 
				array(DB::expr('CONCAT(SUBSTRING(blogs.text, 1, '.$textlimit.'), "...")'), 'text'),
				array('users.name', 'username'))
				->from('blogs')
				->join('users')->on('blogs.user_id', '=', 'users.id')
				->where('blogs.published', '=', 'T')
				->order_by('blogs.createdAt', 'DESC');
		}
		else{
			$query = DB::select('blogs.id', array(DB::expr('DAY(blogs.createdAt)'), 'day'),
				array(DB::expr('MONTH(blogs.createdAt)'), 'month'),
				'blogs.title', 'blogs.tags', 
				array(DB::expr('CONCAT(SUBSTRING(blogs.text, 1, '.$textlimit.'), "...")'), 'text'),
				array('users.name', 'username'))
				->from('blogs')
				->join('users')->on('blogs.user_id', '=', 'users.id')
				->where('blogs.published', '=', 'T')
				->order_by('blogs.createdAt', 'DESC')
				->limit($amount);
		}
        $result = $query->execute();
		return $result;
    }

	public static function getUserBlogs($userid, $textlimit = 250) {
		$query = DB::select('blogs.id', array(DB::expr('DAY(blogs.createdAt)'), 'day'),
				array(DB::expr('MONTH(blogs.createdAt)'), 'month'),
				'blogs.title', 'blogs.tags',
				array(DB::expr('CONCAT(SUBSTRING(blogs.text, 1, '.$textlimit.'), "...")'), 'text'),
				array('users.name', 'username'))
				->from('blogs')
				->join('users')->on('blogs.user_id', '=', 'users.id')
				->where('blogs.published', '=', 'T')
				->and_where('blogs.user_id', '=', $userid)
				->order_by('blogs.createdAt', 'DESC');
        $result = $query->execute();
		return $result;
    }

	public static function getUserName($userid) {
		$query = DB::select('name')
				->from('users')
				->where('id', '=', $userid);
        $result = $query->execute();
		return $result[0]['name'];
    }

	
	public static function getTagBlogs($tag, $textlimit = 250) {
		$query = DB::select('blogs.id', array(DB::expr('DAY(blogs.createdAt)'), 'day'),
				array(DB::expr('MONTH(blogs.createdAt)'), 'month'),
				'blogs.title', 'blogs.tags',
				array(DB::expr('CONCAT(SUBSTRING(blogs.text, 1, '.$textlimit.'), "...")'), 'text'),
				array('users.name', 'username'))
				->from('blogs')
				->join('users')->on('blogs.user_id', '=', 'users.id')
				->where('blogs.published', '=', 'T')
				->and_where('blogs.tags', 'LIKE', '%'.$tag.'%')
				->order_by('blogs.createdAt', 'DESC');
        $result = $query->execute();
		return $result;
    }

	public static function getBlog($id) {
		$query = DB::select('blogs.id', array(DB::expr('DAY(blogs.createdAt)'), 'day'),
				array(DB::expr('MONTH(blogs.createdAt)'), 'month'),
				'blogs.title', 'blogs.tags', 'blogs.text',
				array('users.name', 'username'),
				array('users.description', 'userdesc'),
				array(DB::expr('(SELECT path from mediaresource where id=users.image_id)'), 'userimage'))
				->from('blogs')
				->join('users')->on('blogs.user_id', '=', 'users.id')
				->where('blogs.published', '=', 'T')
				->and_where('blogs.id', '=', $id)
				->order_by('blogs.createdAt', 'DESC');
        $result = $query->execute();
		return $result;
    }
	
	public static function getMonthName($monthNum){
		$monthNames = array(
			1 => 'Ene',	2 => 'Feb',	3 => 'Mar',	4 => 'Abr',
			5 => 'May',	6 => 'Jun',	7 => 'Jul',	8 => 'Ago',
			9 => 'Sep',	10 => 'Oct', 11 => 'Nov', 12 => 'Dic'
		);
		return $monthNames[$monthNum];
	}
	
	private static function getBlogResources($blogId, $rtype){
		$query = DB::select('mediaresource.path', 'mediaresource.filename', 'mediaresource.resource_type')
					->from('blog_media')
					->join('mediaresource')->on('mediaresource.Id', '=', 'blog_media.mediaresource_id')
					->where('blog_media.blog_id', '=', $blogId)
					->and_where('mediaresource.resource_type', '=', $rtype)
					->and_where('blog_media.published', '=', 'T');
        $result = $query->execute();
		return $result;	
	}

	public static function getBlogPictures($blogId){
		return helpers_db::getBlogResources($blogId, 'PICTURE');	
	}
	
	public static function getBlogVideos($blogId){
		return helpers_db::getBlogResources($blogId, 'VIDEO');
	}

	public static function getTopBloggers(){
		$query = DB::select(array('blogs.user_id', 'userid'), array('users.name', 'username'),
					array(DB::expr('COUNT(blogs.user_id)'), 'usercount'))
					->from('blogs')
					->join('users')->on('blogs.user_id', '=', 'users.id')
					->group_by('blogs.user_id')
					->order_by('usercount', 'DESC');
        $result = $query->execute();
		return $result;
	}
	
	public static function getTopTags(){
		$query = DB::select('tags')
					->from('blogs');
        $result = $query->execute();
		$arrayres = array();
		foreach($result as $r){
			$arrayres = array_merge($arrayres, explode(',', $r['tags']));	
		}
		$arrayres = array_count_values($arrayres);
		arsort($arrayres);
		$arrayres = array_keys($arrayres);
		$arrayres = array_slice($arrayres, 0, 10);
		return $arrayres;
	}
	
	public static function splitField($field, $delimiter){
		return explode($field, $delimiter);
	}
	
	//---------- HOME FUNCS----------
	
	public static function getHomeVideo(){
		$query = DB::select('mediaresource.path', 'mediaresource.filename')
					->from('mediaresource')
					->where('resource_type', '=', 'VIDEO')
					->and_where('filetag', '=', 'HomeVideo');
        $result = $query->execute();
		return $result;	
	}
	
	public static function getHomeSlides(){
		$query = DB::select('mediaresource.path', 'mediaresource.filename', 'mediaresource.description')
					->from('mediaresource')
					->where('resource_type', '=', 'PICTURE')
					->and_where('filetag', '=', 'HomeSlide')
					->order_by('created_At');
        $result = $query->execute();
		return $result;	
	}
	
	public static function getHomeServices(){
		$query = DB::select('path', 'filename', 'description', 'link')
					->from('mediaresource')
					->where('resource_type', '=', 'PICTURE')
					->and_where('filetag', '=', 'HomeService')
					->order_by('created_At');
        $result = $query->execute();
		return $result;	
	}
	
	public static function getPageData($tag){
		$query = DB::select('name', 'name2', 'text')
					->from('pagedata')
					->where('tag', '=', $tag)
					->and_where('published', '=', 'T');
        $result = $query->execute();
		return $result;	
	}
	
	public static function getOfficeData(){
		$query = DB::select('name', 'name2', 'text')
					->from('pagedata')
					->where_open()
					->or_where('tag', '=', 'SLOGAN')
					->or_where('tag', '=', 'PHONE')
					->or_where('tag', '=', 'ADDRESS')
					->or_where('tag', '=', 'EMAIL')
					->or_where('tag', '=', 'FACEBOOK')
					->where_close()
					->and_where('published', '=', 'T');
        $result = $query->execute();
		return $result;
	}

	//---------- TEAM FUNCS ----------
	public static function getTeam(){
		$query = DB::select('pagedata.name', 'pagedata.name2', 'pagedata.text', 
					array(DB::expr('(SELECT path FROM mediaresource WHERE mediaresource.id=pagedata.resource_id)'), 'imagepath'))
					->from('pagedata')
					->where_open()
					->or_where('pagedata.tag', '=', 'TEAMMEMBER')
					->where_close()
					->and_where('pagedata.published', '=', 'T');
        $result = $query->execute();
		return $result;
	}
}