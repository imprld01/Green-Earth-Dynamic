<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
			echo $_SESSION['error'];
			header("location: login_index.php");
		}
		else
		{
			// Define $username and $password
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
			// Selecting Database
			$query = "SELECT * FROM user WHERE id=? AND pswd=?";//WHERE id=".$username." AND pswd=".$password;
			$res = $db->prepare($query);
			$res->execute(array($username, $password));
			$row = $res->fetchAll();
			if(count($row) == 1){
				$_SESSION['login_user']=$username; // Initializing Session
				
				$sql = "INSERT INTO login VALUE(?,?,?)";
				$res = $db->prepare($sql);
				
				$ipaddress = '';
				if ($_SERVER['HTTP_CLIENT_IP'])
					$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
				else if($_SERVER['HTTP_X_FORWARDED_FOR'])
					$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
				else if($_SERVER['HTTP_X_FORWARDED'])
					$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
				else if($_SERVER['HTTP_FORWARDED_FOR'])
					$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
				else if($_SERVER['HTTP_FORWARDED'])
					$ipaddress = $_SERVER['HTTP_FORWARDED'];
				else if($_SERVER['REMOTE_ADDR'])
					$ipaddress = $_SERVER['REMOTE_ADDR'];
				else
					$ipaddress = 'UNKNOWN';
				date_default_timezone_set('Asia/Taipei');
				$day = getdate();
				$d = $day['mday'];
				$m = $day['mon'];
				$y = $day['year'];
				$h = $day['hours'];
				$min = $day['minutes'];
				$s = $day['seconds'];
				$datetm = "$y-$m-$d $h:$min:$s";
				try{
					$res->execute(array($username,$ipaddress,$datetm));
				}catch(Exception $e){}
				
				
				header("location: user_index.php"); // Redirecting To Other Page
			} else {
				$error = "Username or Password is invalid";
				$_SESSION['error'] = $error;
				header("location: login_index.php");
			}

		}
	}
?>