<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Login</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="main">
			<h1>小樹之家 登入頁面</h1>
			<div id="login" style="text-align:center">
				<h2>Login to your account</h2>
				<form action="login.php" method="post">
					<label>UserName :</label>
					<input id="name" name="username" placeholder="username" type="text" required>
					<label>Password :</label>
					<input id="password" name="password" placeholder="**********" type="password" required>
					<input name="submit" type="submit" value=" Login ">
					<span><?php if(isset($SESSION['error']))echo $_SESSION['error'].'</br>'; ?></span>
					<b id="register"><a href="register.html"> 註冊 </a></b>
					<b id="register"><a href="index.php"> 回首頁 </a></b>
					<span><?php if(isset($SESSION['success']))echo '<br>'.$_SESSION['success'].'</br>'; ?></span>
				</form>
			</div>
		</div>
	</body>
</html>