<?php
class Comments{
	public static function getAll($link){
		$sql = 'SELECT * FROM `comments` ORDER BY `id` DESC';
		$result = $link->query($sql);
		$employees = [];
		$size = $result->num_rows;
		for($i=1; $i<=$size;$i++){
			$row = $result->fetch_assoc();
			$employees[] = $row;
		}
		return $employees;
	}
	
	public static function create($link, $name, $content, $date){
		$name = $link->real_escape_string($name);
		$content = $link->real_escape_string($content);
		$sql = "INSERT INTO `comments` (`name`, `date`, `content`) VALUES ('$name', $date, '$content')";
		$result = $link->query($sql);
		if(!$result) return false;
		return true;
	}
}