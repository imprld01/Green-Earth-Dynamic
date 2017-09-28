<?php
	$user = 'root';
	$password = 'chen0718';
	try{
		$db = new PDO('mysql:host=localhost;dbname=green_earth;charset=utf8',$user,$password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}catch(PDOException $e){
		Print "ERROR!: ".$e->message();
		die();
	}
	//$db->query("use user");
	session_start();
	// Storing Session
	if(isset($_SESSION['login_user'])){
		// Starting Session
		$user_check=$_SESSION['login_user'];
		// SQL Query To Fetch Complete Information Of User
		$ses_sql=$db->prepare("SELECT name FROM user WHERE id=?");
		$ses_sql->execute(array($user_check));
		$row = $ses_sql->fetchAll();
		$login_session =$row[0]['name'];
	}
	/*if(!isset($login_session)){
		header('Location: index.php'); // Redirecting To Home Page
	}*/
?>