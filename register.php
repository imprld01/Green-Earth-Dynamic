<?php
	$id = $_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	try{
		$db=new PDO('mysql:host=localhost;dbname=green_earth;charset=utf8','root','chen0718');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}catch(PDOException $e){
		Print "ERROR!: ".$e->setMessage();
		die();
	}
	$query = "SELECT * FROM user WHERE id=?";
	$res = $db->prepare($query);
	$res->execute(array($id));
	$row = $res->fetchAll();
	if(count($row) == 1){
		echo "The ID has been used. Please choose another one.";
	} else {
		$sql = "INSERT INTO user VALUE(?,?,?)";
		$res = $db->prepare($sql);
		$res->execute(array($id,$username,$password));
		session_start();
		$success = "Register success";
		$_SESSION['success'] = $success;
		echo "Success to register.";
		header("location: login_index.php");
	}
?>