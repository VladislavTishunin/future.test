<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Classes/Database.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Classes/Comments.php');
$link = Database::getInstance()->getConnection();
$act = isset($_GET['act'])? $_GET['act'] : false;

if($act === 'create'){
	if(!empty($_POST)){
		print_r($_POST);
		$name = strip_tags($_POST['name']);
		$comment = strip_tags($_POST['content']);
		$date = time();
		var_dump(Comments::create($link, $name, $comment, $date));
		header('location:../');
	}
}
else{
	$comments = Comments::getAll($link);
	include($_SERVER['DOCUMENT_ROOT'].'/views/employees_list.php');
}


