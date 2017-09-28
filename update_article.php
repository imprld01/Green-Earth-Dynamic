<?php
	include('db_conn.php');
	$sql = "UPDATE article SET title=?, srcn=?, srch=?, content=? WHERE id=? AND datetm=?";
	$res = $dbh->prepare($sql);
	try{
		$res->execute(array($_POST[title], $_POST[srcn], $_POST[srch], $_POST[content], $_GET['id'], $_GET['datetm']));
	}catch(Exception $e){}
	header("location: show_my_article_list.php");
?>