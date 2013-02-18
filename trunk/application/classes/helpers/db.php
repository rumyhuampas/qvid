<?php defined('SYSPATH') OR die('No Direct Script Access');

class helpers_db {
	
	public static function getMonthName($monthNum){
		$monthNames = array(
			1 => 'Ene',	2 => 'Feb',	3 => 'Mar',	4 => 'Abr',
			5 => 'May',	6 => 'Jun',	7 => 'Jul',	8 => 'Ago',
			9 => 'Sep',	10 => 'Oct', 11 => 'Nov', 12 => 'Dic'
		);
		return $monthNames[$monthNum];
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