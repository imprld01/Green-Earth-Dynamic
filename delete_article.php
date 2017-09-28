<?php
	include('db_conn.php');
	$sql = "DELETE FROM article WHERE id=? AND datetm=?";
	$res = $dbh->prepare($sql);
	try{
		$res->execute(array($_GET['id'], $_GET['datetm']));
	}catch(Exception $e){}
	header("location: show_my_article_list.php");
?>