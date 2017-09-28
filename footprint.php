<?php
include('session.php');
?>
<!DOCTYPE html>
<!--
	Solarize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>碳の足跡</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <link rel="shortcut icon" href="icon/footprint.ico" />
        <link rel="stylesheet" href="css/mytable.css" />
        <script src = "js/footprintcal.js"></script>
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

        	<div class="wrapper style3">
			<section class="container">
				<header class="major"><h2>碳の足跡</h2></header>
                <p>您知道每日的生活都不斷排放出二氧化碳嗎？</p>
                <p>趕快來計算看看您產生多少碳足跡吧！</p>
                <div class="fb-like" style = "margin-left: 20%;" data-href="footprint.php" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			</section>
		</div>

        <div class="wrapper style2">
            <section class="container">

                <table>
                    <tr style = "background-color: #777777; color: #fff;">
                        <td><br>您知道嗎?<br><br>依據國內研究顯示：1 株 20 年生的林木依樹種不同，1 年約可吸收 11 ~ 18 公斤的二氧化碳。<br><span id = "caltree"></span><br>提醒您：只要您改變生活習慣就能夠減少溫室氣體的排放喔！<br><br></td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td>活動行為</td>
                        <td>單位時間</td>
                        <td>排放小計</td>
                    </tr>
                    <tr>
                        <td>您吃了多少肉類？(一片漢堡肉約 100 公克)</td>
                        <td><input id = "item1" type = "number" placeholder = "公斤" class = "mytable"></input></td>
                        <td><span id = "result1"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>您使用電鍋多久？</td>
                        <td><input id = "item2" type = "number" placeholder = "小時" class = "mytable"></input></td>
                        <td><span id = "result2"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>您使用微波爐多久？</td>
                        <td><input id = "item3" type = "number" placeholder = "小時" class = "mytable"></input></td>
                        <td><span id = "result3"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>您使用熱水器多久？</td>
                        <td><input id = "item4" type = "number" placeholder = "小時" class = "mytable"></input></td>
                        <td><span id = "result4"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>您使用抽油煙機多久？</td>
                        <td><input id = "item5" type = "number" placeholder = "小時" class = "mytable"></input></td>
                        <td><span id = "result5"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>您買了幾件新衣服？</td>
                        <td><input id = "item6" type = "number" placeholder = "件" class = "mytable"></input></td>
                        <td><span id = "result6"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>您用了多少水量？(平均每人每日用水 0.26 度)</td>
                        <td><input id = "item7" type = "number" placeholder = "度" class = "mytable"></input></td>
                        <td><span id = "result7"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>您使用電風扇多久？</td>
                        <td><input id = "item8" type = "number" placeholder = "小時" class = "mytable"></input></td>
                        <td><span id = "result8"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>您使用冷氣機多久？</td>
                        <td><input id = "item9" type = "number" placeholder = "小時" class = "mytable"></input></td>
                        <td><span id = "result9"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>您使用吹風機多久？</td>
                        <td><input id = "item10" type = "number" placeholder = "小時" class = "mytable"></input></td>
                        <td><span id = "result10"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>您使用洗衣機多久？</td>
                        <td><input id = "item11" type = "number" placeholder = "小時" class = "mytable"></input></td>
                        <td><span id = "result11"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>你乘小客車多少公里？</td>
                        <td><input id = "item12" type = "number" placeholder = "公里" class = "mytable"></input></td>
                        <td><span id = "result12"></span> 公斤</td>                   
                    </tr>
                    <tr>
                        <td>你乘摩托車多少公里？</td>
                        <td><input id = "item13" type = "number" placeholder = "公里" class = "mytable"></input></td>
                        <td><span id = "result13"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>你乘公車多少距離？</td>
                        <td><input id = "item14" type = "number" placeholder = "元" class = "mytable"></input></td>
                        <td><span id = "result14"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>你乘捷運多少次？</td>
                        <td><input id = "item15" type = "number" placeholder = "次" class = "mytable"></input></td>
                        <td><span id = "result15"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>你乘火車多少公里？</td>
                        <td><input id = "item16" type = "number" placeholder = "公里" class = "mytable"></input></td>
                        <td><span id = "result16"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>你乘高鐵多少公里？</td>
                        <td><input id = "item17" type = "number" placeholder = "公里" class = "mytable"></input></td>
                        <td><span id = "result17"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>您使用電視多久？</td>
                        <td><input id = "item18" type = "number" placeholder = "小時" class = "mytable"></input></td>
                        <td><span id = "result18"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>您使用桌電多久？</td>
                        <td><input id = "item19" type = "number" placeholder = "小時" class = "mytable"></input></td>
                        <td><span id = "result19"></span> 公斤</td>
                    </tr>
                    <tr>
                        <td>您使用筆電多久？</td>
                        <td><input id = "item20" type = "number" placeholder = "小時" class = "mytable"></input></td>
                        <td><span id = "result20"></span> 公斤</td>
                    </tr>
                    <tr style = "background-color: #777777; color: #fff;">
                        <td>您的總碳排放量：</td>
                        <td colspan = "2"><span id = "footprintresult"></span> 公斤</td>
                    </tr>
                </table>

                <table>
                    <tr style = "background-color: #777777; color: #fff;">
                        <td><br>我國每人每日平均 CO2 排放量約為 6.9 公斤。<br><span id = "telling"></span><br>提醒您：只要您改變生活習慣就能夠減少溫室氣體的排放喔！<br><br></td>
                    </tr>
                </table>

            </section>
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
                <a href = "/readme/00257111+00257112.pdf" target = "_blank">網站說明文件</a><br>
                <div class="fb-like" style = "margin-left: 19%" data-href="index.php" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			</div>			
		</div>

    </body>
</html>
