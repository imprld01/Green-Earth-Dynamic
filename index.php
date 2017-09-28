<?php
include('session.php');

if(isset($_SESSION['login_user'])){
	header("location: user_index.php");
}
?>
<!DOCTYPE HTML>
<!--
	Solarize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
	Design:TEMPLATED
	Images:Unsplash
-->
<html>
	<head>
        <title>與綠樹共舞</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <link rel="shortcut icon" href="icon/homepage.ico" />
		<script src = "js/fb_like.js"></script>
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		 <script src = "js/treeGrow.js"></script>
		  <script src = "js/ourEffect.js"></script>
		  <!--網頁滑動-->
		  <script  src="js/jquery-latest.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		  
		  
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

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
							<!--<li class="active"><a href="index.php">與綠樹共舞</a></li>-->
							<li><a  id="top_friends" class="top_friends" href="#friends">綠樹朋友</a></li>
                            <li><a id="top_tree" href="#tree">我的樹苗</a></li>
							<li><a id="top_qanda" href="#qanda">綠色問答</a></li>
							<li><a id="top_news" href="#news">綠園世界</a></li>
                            <li><a id="top_co2" href="#co2">碳の足跡</a></li>
                            <li><a href="tree_data.php">樹木資料庫</a></li>
							<li><a href="show_article_list.php">綠樹文章</a></li>
							<li><a id="login" href="login_index.php">登入</a></li>
						</ul>
					</nav>

				</div>
			</div>
				
			<!-- Banner -->
			<div id="banner">
				<section class="container">
					<h2><a href = "index.php">與綠樹共舞</a></h2>
					<span>－Green Earth－</span>
					<p>從現在開始！ 讓我們帶您進入綠色世界，與綠樹共舞。</p>
				</section>
			</div>

		</div>
		
        
		<div id = "friends" class="wrapper style2 index">
		<div id ="friendsShow">
			<section class="container">
				<header class="major">
					<h2>您熟悉保護地球的大功臣嗎？</h2>
				</header>
				<p>趕快進來認識新朋友吧！</p>
				<a href="introduction.php" class="button">綠樹朋友</a>
			</section>
		</div>
		</div>
		
		
	

		<!-- Section One -->
		<div id = "tree" class="wrapper style3 index">
		<div id = "treeShow" >
            <section class="container">
				
				<header class="major">
					<h2>知道一棵綠樹要花多少年成長嗎？</h2>
				</header>
				<p>馬上種一棵屬於自己的綠樹吧！</p>
				
				<input id = "startGrow" type = "button" value = "我的樹苗"  class="button alt">
				<a href="#treeArea" class="button"></a>
				
				
				</input>
				
				
            </section>
		</div>
		</div>
		
		<!-- Section Tree -->
		<div id = "treeArea" class="wrapper style4">
		<div id = "treeAreaShow">
            <section class="container">

			    <header class="major">
				    <h2>請常常來看它喔!</h2>
				    <span class="byline">不然可能會枯死的喔!</span>
			    </header>
                
				   <?php 
                
		 		$user = 'root'; //資料庫使用者名稱
				  $password = 'chen0718'; //資料庫的密碼
		  		 try{
		 		 $db = new PDO('mysql:host=localhost;dbname=green_earth;charset=utf8',$user,$password); 
				
    			 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
	 			 $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); 
				}catch(PDOException $e){ //若上述程式碼出現錯誤，便會執行以下動作 
				
	   				 Print 'ERROR!:' .$e->getMessage();  
		  			 die(); 
				}
		
				
			
			
			  if(isset($_SESSION['login_user'])){
                
				echo "你的帳號是 ".$_SESSION['login_user'];
				$user=$_SESSION['login_user'];
				
				$user="abc";
				$query=("select level from seed where id=?");
		
				$res=$db->prepare($query);
				$res->execute(array($user));
		
				$row=$res->fetchAll();
				var_dump($row);
            	$level=$row[0]['level'];
           		 if($level>13){$level=13;}
				 $nextlevel=$level+1;
				$query=("UPDATE seed set level=?  where id=? ");
		
				$res=$db->prepare($query);
				$res->execute(array($nextlevel,$user));
		
				
			
				echo " <div id = 'tree' class = 'tree' >
                
                <img src='images/treeImage".$level.".jpg' id='treeImage' class='treeImage'  alt='treeImage' width='100'  />
                </div>
            	";
				
			  	}else{
				echo "<p>尚未登入</p> ";
                echo " <div id = 'tree' class = 'tree' >
                
                <img src='images/blank.jpg' id='treeImage' class='treeImage'  alt='treeImage' width='100'  />
                </div>

                ";
				}
				
				
                
                ?>
                
                                
				<!--<input id = "reset" type = "button" value = "reset" class="button"></input>-->
				
				
				
				
				

            </section>
			</div>
		</div>

		<!-- Section Two -->
		<div id = "qanda" class="wrapper style2 index">
		<div id = "qandaShow">
			<section class="container">
				<header class="major">
                    <h2>您擁有愛護環境的知識嗎？</h2>
                </header>
				<p>來看看您了解環境多少吧！</p>
				<a href="questions.php" class="button">綠色問答</a>
			</section>
		</div>
		</div>
		
		
		
		<div id = "news" class="wrapper style3 news" >
		<div id = "newsShow" class="wrapper style3">
            <section class="container">
                <header class="major">
                    <h2>世界各地的綠色資訊您都掌握了嗎？</h2>
                </header>
				<p>立即成為愛護環境的地球人吧！</p>
				<a href="sharingnews.php" class="button alt">綠園世界</a>
            </section>
		</div>
		</div>
		
		
        	<div id = "co2" class="wrapper style2 index">
			<div id = "co2Show" >
			<section class="container">
				<header class="major">
                    <h2>想知道您每天產生多少碳足跡嗎？</h2>
                </header>
				<p>進來為地球盡一份心力吧！</p>
				<a href="footprint.php" class="button">碳の足跡</a>
			</section>
		</div>
			</div>
		<!-- Section Three -->
		<div  id ="postNews"class="wrapper style4">
		<div  id ="postNewsShow"class="wrapper style4">
            <section class="container">

			    <header class="major">
				    <h2>想傳達您對地球環境的想法或理念嗎？</h2>
				    <span class="byline">我們提供世界各地對地球環境有想法的您一個能將您的想法分享出來進行交流的舞台，將您的故事分享給大家吧！</span>
			    </header>
                
				<details>
                    <summary>不知道如何分享嗎？</summary>
                    <ul><li>只要將您的想法撰寫在以下的輸入框中，再按下"Post"即可張貼到版面(<a href = "sharingnews.php">here</a>)上！</li></ul>
                </details><br>

				<div class="row flush">
                    <label>Topic:</label>
                    <input type = "text" placeholder = " Place your topic here!" style = "width: 100%"></input>
                    <label>Source:</label>
                    <input type = "text" placeholder = " Please tell us where your article comes from!" style = "width: 100%"></input><br>
                    <label>Article:</label><br>
                    <textarea rows = "15" placeholder=" Share your story here for us!" style = "width: 100%"></textarea><br>
                    <input id = "guestPost" type = "button" value = "Post"></input>
                    <input id = "guestClear" type = "button" value = "Clear"></input>
				</div>

            </section>
		</div>
		</div>
		
		
		
		
		<!-- Team -->
		<div class="wrapper style5">
			<section id="team" class="container">

				<header class="major">
					<h2>本次專案製作人員</h2>
					<span class="byline">點擊可以觀看個人資料</span>
				</header>

				<div class="row" >
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
			        <span class="byline">您可以透過下列連結關注我們！</span>
				</header>

				<ul class="icons">
					<li class="active"><a href="https://www.facebook.com/" class="fa fa-facebook"><span>Facebook</span></a></li>
					<li><a href="https://twitter.com/" class="fa fa-twitter"><span>Twitter</span></a></li>
					<li><a href="https://www.pinterest.com/" class="fa fa-dribbble"><span>Pinterest</span></a></li>
					<li><a href="https://plus.google.com/" class="fa fa-google-plus"><span>Google＋</span></a></li>
				</ul>

			</section>
			
			<!-- Copyright -->
			<div id="copyright">
				<p>－資料庫系統期末專案－</p>
                <a href = "readme/00257111+00257112.pdf" target = "_blank">網站說明文件</a><br>
                <div class="fb-like" style = "margin-left: 19%" data-href="index.php" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			</div>			
		</div>

	</body>
</html>