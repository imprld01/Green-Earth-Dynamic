<?php
include('session.php');
?>
<!DOCTYPE HTML>
<!--
	Solarize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>綠園世界</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <link rel="shortcut icon" href="icon/sharingnews.ico" />
        <link rel="stylesheet" href="css/block.css" />
		<script src = "js/fb_like.js"></script>
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

        	<!-- Header Wrapper -->
		<div class="wrapper style1">
			<!-- Header -->
			<div id="header">
				<div class="container">
                        	
					<!-- Logo -->
					<h1><a href="index.php" id="logo">Green Earth</a></h1>
							
					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="introduction.php">綠樹朋友</a></li>
                            <li><a href="index.php#tree">我的樹苗</a></li>
							<li><a href="questions.php">綠色問答</a></li>
							<li><a href="sharingnews.php">綠園世界</a></li>
                            <li><a href="footprint.php">碳の足跡</a></li>
                            <li><a href="tree_data.php">樹木資料庫</a></li>
							<li><a href="show_article_list.php">綠樹文章</a></li>
							<?php if(isset($_SESSION['login_user']))echo ('<li><a href="show_my_article_list.php">'.$login_session.'</a></li>
							<li><a href="logout.php">登出</a></li>'); else echo ('<li><a href="login_index.php">登入</a></li>') ?>
						</ul>
					</nav>

				</div>
			</div>
        </div>
		
		<!-- Main -->
		<div id="main" class="wrapper style4">
			<div class="container">
				<div class="row">

					<!-- Content -->
					<div id="content" class="8u skel-cell-important">

						<section>
							<header class="major">
								<h2>綠園世界</h2>
							    <span class="byline">打造綠色園地，關心世界環境</span>
                                <div class="fb-like" data-href="sharingnews.php" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
							</header>
                        </section>

						<form method = "post" action = "show.php">
							<label>Search Article:</label>
							<input type = "text" name = "keyword" placeholder = " Place user id here!" style = "width: 100%"></input><br>
						</form>
						
						<?php
							include "db_conn.php";
							
							$who = $_POST['keyword'];
							
							if($who){
								$q = "select * from article natural join user where id = '$who';";
								$res = $dbh->query($q);
								$row = $res->fetchall();
								
								echo "<p>The user, ' " . $who . " ', have <span style = 'color: red;'>" . count($row) . "</span>" . " articles.</p>";
								for($i = 0; $i < count($row); ++$i){
									echo "<section id = '" . $row[$i]['id'] .  "_" . $row[$i]['title'] . "' class = 'block'>";
									echo "<h2>" . $row[$i]['title'] . "</h2><br>";
									echo "<p>" . $row[$i]['content'] . "</p>";
									echo "<h6>Author: " . $row[$i]['name'] . "</h6>";
									echo "<h6>資料來源: <a href = '" . $row[$i]['srch'] . "' target = '_blank'>" . $row[$i]['srcn'] . "</a></h6>";
									echo "</section><br>";
								}
								if(count($row) == 0) echo "<p>The user, ' " . $who . " ', have no articles.</p>";
								
								echo "<br>" . "<a href = 'sharingnews.php'>>back</a>";
							}
						?>

					</div>

				</div>
			</div>
		</div>
		
		<!-- Team -->
		<div class="wrapper style5">
			<section id="team" class="container">
				<header class="major">
					<h2>本次專案製作人員</h2>
					<span class="byline">點擊可以觀看個人資料</span>
				</header>
				<div class="row">
					<div class="3u">
						<a href="https://www.facebook.com/zax.lin.33" class="image"><img src="https://scontent-tpe1-1.xx.fbcdn.net/hprofile-xla1/v/t1.0-1/p160x160/12274524_1638026899806228_2473263652943657385_n.jpg?oh=627fbe25ff0747f6fa35d007c2c67fab&oe=5717516C" alt = "Zax Lin"></a>
						<h3>林一正</h3>
						<p>00257106</p>
					</div>
					<div class="3u">
						<a href="https://www.facebook.com/bowun.shih" class="image"><img src="https://scontent-tpe1-1.xx.fbcdn.net/hprofile-xpf1/v/t1.0-1/c201.4.516.516/s160x160/314469_101412819969483_271761475_n.jpg?oh=1c783dbd0ce913d18a2d520275bae4ad&oe=56FC9DAC" alt = "Bo-Wun Shih"></a>
						<h3>施博文</h3>
						<p>00257111</p>
					</div>
                    	<div class="3u">
						<a href="https://www.facebook.com/joseph.larry.7547" class="image"><img src="https://scontent-tpe1-1.xx.fbcdn.net/hprofile-xfp1/v/t1.0-1/p160x160/11100809_1630355023854307_3932763446302498959_n.jpg?oh=18daa6cfb76caceb12d93f389a52ca9c&oe=57134239" alt="Joseph Larry"></a>
						<h3>藍孟彬</h3>
						<p>00257112</p>
					</div>
					<div class="3u">
						<a href="https://www.facebook.com/Lu.Min.Hsuan" class="image"><img src="https://scontent-tpe1-1.xx.fbcdn.net/hprofile-xpa1/v/t1.0-1/c0.11.160.160/p160x160/12088197_497248813778145_2939035409783794393_n.jpg?oh=937ef43c630cdd195f2c702e70d40e52&oe=57117B1F" alt = "呂旻軒"></a>
						<h3>呂旻軒</h3>
						<p>00257129</p>
					</div>
				</div>
			</section>
		</div>

	    <!-- Footer -->
		<div id="footer">
			<section class="container">
				<header class="major">
                    <div><img src= "images/greenEarth.png" alt= "green earth" width = "64%"></div><br>
			        <h2>聯絡我們</h2>
			        <span class="byline">您可以透過下列連結關注我們!</span>
				</header>

				<ul class="icons">
					<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
					<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
					<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
					<li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
				</ul>
			</section>
			
			<!-- Copyright -->
			<div id="copyright">
                	<p>-資料庫系統期末專案-</p>
                <a href = "readme/00257111+00257112.pdf" target = "_blank">網站說明文件</a><br>
                <div class = "fb-like" style = "margin-left: 19%" data-href = "index.php" data-layout = "standard" data-action = "like" data-show-faces = "true" data-share = "true"></div>
			</div>			
		</div>

	</body>
</html>