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
	
	public static function setpost($key, $value){
		$_POST[$key] = $value;
	}
	
	public static function addpostitem($key, $value){
		$val = $_POST[$key];
		$val = ','.$value;
		setpost($key, $val);
	}
	
	public static function removepostitem($key, $value){
		$val = $_POST[$key];
		$array = explode(',', $val);
		for($i=0;$i<count($array);$i++){
			if($array[$i] == $value){
				unset($array[$i]);
				break;
			}
		}
		$val = implode(',', $array);
		setpost($key, $val);
	}
}