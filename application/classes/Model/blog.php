<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Blog extends Model
{
	public function getBlogs()
	{
		$query = "select b.id, day(b.createdat) as day, 
					case
					when month(b.createdat)= 1 then 'Ene' when month(b.createdat)= 2 then 'Feb'
					when month(b.createdat)= 3 then 'Mar' when month(b.createdat)= 4 then 'Abr'
					when month(b.createdat)= 5 then 'May' when month(b.createdat)= 6 then 'Jun'
					when month(b.createdat)= 7 then 'Jul' when month(b.createdat)= 8 then 'Ago'
					when month(b.createdat)= 9 then 'Sep' when month(b.createdat)= 10 then 'Oct'
					when month(b.createdat)= 11 then 'Nov' when month(b.createdat)= 12 then 'Dic'
					end as month,
					b.title, b.tags, b.text, u.name username
					from blog b
					left join users u on b.user_id=u.id
					order by b.createdat desc";
		$blogs = DB::query(Database::SELECT, $query)->execute()->as_array();
		return $blogs;
	}
	
	public function getBlogImages($blogId)
	{
		$query = "select mr.path
					from mediaresource mr, blog_media bm
					where bm.Blog_Id=".$blogId.
					" and bm.MediaResource_Id=mr.Id";
		$images = DB::query(Database::SELECT, $query)->execute()->as_array();
		return $images;
	}
}
    