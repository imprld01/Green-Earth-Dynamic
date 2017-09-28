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
							
							$cq = "select count(*) as counting from article";
							$cres = $dbh->query($cq);
							$crow = $cres->fetchall();
							echo "<p>There are <span style = 'color: red;'>" . ($crow[0]['counting'] + 8) . "</span> articles in our website!<br>We need you to continue giving the earth more power!</p>";
							
							$q = "select * from article natural join user order by datetm desc;";
							$res = $dbh->query($q);
							$row = $res->fetchall();
							for($i = 0; $i < count($row); ++$i){
								echo "<section id = '" . $row[$i]['id'] .  "_" . $row[$i]['title'] . "' class = 'block'>";
								echo "<h2>" . $row[$i]['title'] . "</h2><br>";
								echo "<p>" . $row[$i]['content'] . "</p>";
								echo "<h6>Author: " . $row[$i]['name'] . "</h6>";
								echo "<h6>資料來源: <a href = '" . $row[$i]['srch'] . "' target = '_blank'>" . $row[$i]['srcn'] . "</a></h6>";
								echo "</section><br>";
							}
						?>
						
						<div id = "guestArea"></div>

                        <section id = "mov1" class = "block">
							<h2>李四端的雲端世界 第141集 2014/12/13</h2><br>
                            <p>影片中介紹歐洲的"便便公車"，這種公車利用人類排泄物所產生的沼氣所轉換出的能源為動力。這樣利用沼氣的方式不只能夠成為新的替代能源，且對地球環境的傷害也大幅降低，更重要的是它能夠改善現今地球暖化的情況。</p>
                            <iframe width="100%" height="510" src="https://www.youtube.com/embed/yK8vH1AbIQ4" frameborder = "0" allowfullscreen></iframe>
                        </section><br>

                        <section id = "mov2" class = "block">
                            <h2>我們的島-全球暖化</h2><br>
                            <p>地球暖化的影響的範圍不僅僅是對生態、土地或經濟造成威脅，就連疾病的傳播也會受到影響，每家工廠都應該思索將工廠廢氣、廢熱減至最低。影片中也將介紹台灣再生能源的發展，值得我們關注。</p>
                            <iframe width="100%" height="510" src="https://www.youtube.com/embed/wvePWlW4kLE" frameborder="0" allowfullscreen></iframe>
                        </section><br>

                        <section id = "atc1" class = "block">
                            <h2>種樹遏止全球暖化 研究：熱帶雨林效果最佳</h2><br>
                            <p>美國太空總署（NASA）和國家大氣研究中心（NCAR）的研究顯示，熱帶雨林吸收二氧化碳的能力超乎科學家想像，甚至比溫帶森林更高。</p>
                            <h5>用二氧化碳「灌溉」熱帶雨林效果最佳</h5>
                            <p>
                                隨著人類燃燒化石燃料、碳排放越來越高，全球森林利用這些二氧化碳快速生長，減少大氣中的二氧化碳，這個過程叫做「二氧化碳肥料效應」（carbon dioxide fertilization）。
                                「溫帶森林和熱帶森林誰能吸收較多二氧化碳？這個問題的答案能幫助我們瞭解全球陸地生態系統是否能持續抵消人類二氧化碳排放，還是會開始惡化氣候變遷。」研究共同作者、NCAR科學家Britton Stephens說。
                                目前，森林和其他陸地植被的光合作用吸收了30%的人為排放二氧化碳。研究作者指出，如果森林吸收速度減緩，全球暖化便會加速。據作者估計，全球森林吸收25億公噸二氧化碳，其中熱帶森林就佔了14億公噸。
                            </p>
                            <h5>更新全球氣候模型 新研究顛覆過去認知</h5>
                            <p>
                                過去十年間的大氣模型有長足的進步，但由於全球氣流模型的差異，學界對於二氧化碳的大氣逆模型仍有些不同看法。25年來，大部分大氣逆模型顯示，北半球中緯度森林吸收的二氧化碳比熱帶森林要多。
                                研究作者認為，這是因為過去對全球氣流的認識已經過時，並根據有限的資料假設森林砍伐造成熱帶森林釋放二氧化碳多於吸收，才會有這樣的結果。新研究首次比較相同規模的二氧化碳吸收數據，並囊括多種規模，
                                包括生態系統過程的電腦模型、大氣逆模型、衛星影像和實驗林等資料。研究人員整合這些分析，加上蒐集自加權平均大氣生態系統模型以及地面資料的熱帶碳吸收數據。
                                「在我們之前，沒有人成功完成全球性的二氧化碳效應資訊整合，納入大氣、森林和各種模擬的二氧化碳效應。這些看似不同的獨立數據，似乎開始導向相同的答案。」NASA噴氣推進實驗室學者David Schimel說。
                            </p>
                            <h5>二氧化碳肥料效應 首份完整研究資料問世</h5>
                            <p>
                                2000年代中期，Stephens以飛行器測量的二氧化碳數據顯示，許多大氣逆模型並沒有精確呈現二氧化碳在大氣中的流動。
                                與飛行器測量結果較吻合的模型，更能精確顯示熱帶雨林的二氧化碳吸收量。不過之前缺乏全球性的資料集，難以驗證熱帶雨林二氧化碳吸收量較大的主張。
                                Schimel說，他們的新研究利用繼Stephens之後眾多其他科學家的研究結果，將全國性和區域性的數據整合成有力的全球資料集。
                                科學家也必須將野火納入考量。氣候變遷減少部分地區的水源，並讓地球變暖，導致旱災頻繁和更大規模的野火。
                                在熱帶地區，人類砍伐森林焚燒木材都會讓問題更嚴重。野火燃燒導致樹木減少，進而減少碳吸收，同時釋放大量的碳進入大氣。
                                「這份研究可說是完整的二氧化碳肥料效應理論，以微觀現象到看似矛盾的宏觀現象為基礎，包含光合作用的機制到全球性的觀察。」
                            </p>
                            <h6>資料來源: <a href = "http://e-info.org.tw/node/104780" target = "_blank">環境資訊中心 TEIA</a></h6>
                        </section><br>

                        <section id = "atc2" class = "block">
                            <h2>全球暖化多種樹、節能減碳護地球</h2><br>
                            <p>
                                由於近年來，全球各地平均溫度上升、天氣變化多端、海平面不斷的上升等現象，是地球在對我們發出警訊，提醒我們保護環境的行動刻不容緩。
                                根據研究報告指出二氧化碳是溫室效應元兇之一，溫室效應對我們的影響日漸顯現，為減緩溫室效應及留給後代子孫一個安全舒適的生活環境已經不能再等待了，
                                相信日常生活中很多民眾都可以做到，「節能減碳多栽樹、攜手減碳護地球」就是要讓大家瞭解種樹可以透過植物吸收空氣中的二氧化碳，
                                減緩溫室效應及全球暖化現象，但我們身邊的植物如何減少大氣中二氧化碳？植物在生長過程能吸收二氧化碳、釋放出氧氣，並將「碳」固定在植物體內，
                                有助降低溫室效應；每一棵成年的樹木，每年約可減少5～10公斤的碳，對於減緩全球暖化現象、溫室效應很有幫助。
                            </p>
                            <p>
                                目前減緩溫室效應影響是首要，所以環保局呼籲大家一起來栽植如小葉南洋杉、榕樹等，適合本縣土地及存活率高之樹木，讓更多樹木能在澎湖這片土地上成長茁壯，
                                且環境綠美化後對澎湖有正面加分的效果，長久下來可減緩溫室氣體排放，更能為澎湖居民及遊客提供更舒適清涼的環境，而栽植樹木所做成綠圍牆，
                                可形成獨特的活動空間，除此之外，多吸收樹木所釋放出的芬多精，人也活得健康快樂。
                            </p>
                            <p>
                                種植樹木的好處可不是只有單單減少空氣中的二氧化碳而已，除此之外還有水土保持、防風、防砂及美化等等許多的功用，
                                環保局呼籲民眾，大家一起種種樹，一棵不嫌少，正所謂前人種樹後人得果，現在我們種的每一棵樹都可以改善我們後代子孫的生活環境，
                                不再受地球暖化之苦，讓我們一起用心照顧每棵可以讓地球呼吸的樹木，讓我們一同手牽手種樹護地球。
                            </p>
                            <h6>資料來源: <a href = "http://www.phepb.gov.tw/ch/home.jsp?mserno=201110060009&serno=201110060009&contlink=ap/news_view.jsp&dataserno=201305220162" target = "_blank">澎湖縣政府 環境保護局</a></h6>
                        </section><br>

                        <section id = "mov3" class = "block">
                            <h2>不願面對的真相</h2><br>
                            <p>"不願面對的真相"這部影片以數據分析的方式帶我了解地球暖化對地球的影響。</p>
                            <iframe width="100%" height="510" src="https://www.youtube.com/embed/hfdGyrqdXiw" frameborder="0" allowfullscreen></iframe>
                        </section><br>

                        <section id = "atc3" class = "block">
                            <h2>樹木對環境的貢獻</h2><br>
                            <p>
                                森林的碳吸存功能，在於樹木在生長時會吸收大氣中的二氧化碳，因此造林被視為一種可以減少大氣中二氧化碳濃度的方法。
                                但每棵樹吸收 碳的速度不同，依照其樹 種、栽種地點、栽種分布等而異。以紀念林為例，每年每棵樹約可吸收12公斤的二氧化碳。
                                樹木除了有吸收碳的功能外，對環境還有其他非常重要的貢獻。例如：
                            </p>
                            <ol>
                                <li>提供氧氣： 一棵成熟的樹木約可以提供一戶四人家庭需要的氧氣量(實際供氧量與樹種有關)</li>
                                <li>水土保持： 世界上超過20億的人，仰賴森林來保護他們的水源。樹木的根部可以將土壤固定不流失，且樹葉提供 遮蓬，使得暴雨不至於直接落在地面，沖刷土壤。雨水透過土壤，滲漏到地下水層，也補充河川水量。但是，沒有樹木的土地，會無法將雨水導入土層，使得雨水落 到地面後，90%會直接流入海洋而無法利用，且會沖蝕地表土壤，農作物生產受到衝擊。</li>
                                <li>生物多樣性： 雖然熱帶雨林佔地球表面面積僅約5%，但其孕育了地球上超過一半的動物與植物。科學家預估，若森林的砍伐速度不變的話，在2050年將有百萬種的動植物種 類會消失。</li>
                                <li>心理層面： 研究顯示，小孩在戶外活動，會增加其健康以及注意力。而人們在生活環境中看到樹，也會展現出較佳的工作表現。</li>
                                <li>經濟： 超過十億的人類居住在森林以及靠近森林的地方，以樹木作為經濟來源，如木材、水果、藥性植物、飲料、纖維、樹脂、草飼料等。</li>
                            </ol>
                            <h6>資料來源: <a href = "http://www.eqpf.org/sf/3-1.htm" target = "_blank">環境品質文教基金會</a></h6>
                        </section><br>

                        <section id = "mov4" class = "block">
                            <h2>搶救地球 精華版</h2><br>
                            <p>"搶救地球"談到人類在地球上的種種活動對地球造成的影響, 其中也包括人類所造成的暖化現象。</p>
                            <iframe width="100%" height="510" src="https://www.youtube.com/embed/9Du_OW4HE80" frameborder="0" allowfullscreen></iframe>
                        </section><br>

                        <section id = "mov5" class = "block">
                            <h2>搶救地球2-1</h2><br>
                            <iframe width="100%" height="510" src="https://www.youtube.com/embed/K4w-JaXq9lg" frameborder="0" allowfullscreen></iframe>
						</section><br>

					</div>

                    <!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header class="major">
								<h2>字裡行間了解環境</h2>
							</header>									
							<ul class="default">
								<li><a href="#atc1">種樹遏止全球暖化 研究：熱帶雨林效果最佳</a></li>
								<li><a href="#atc2">全球暖化多種樹、節能減碳護地球</a></li>
								<li><a href="#atc3">樹木對環境的貢獻</a></li>
							</ul>
						</section>
						<section>
							<header class="major">
								<h2>新聞影片記錄地球</h2>
							</header>
							<ul class="default">
								<li><a href="#mov1">人類排泄物便燃料! 全球首輛"便便公車"</a></li>
								<li><a href="#mov2">我們的島-全球暖化</a></li>
								<li><a href="#mov3">不願面對的真相</a></li>
								<li><a href="#mov4">搶救地球2-1</a></li>
								<li><a href="#mov5">搶救地球 精華版</a></li>
							</ul>
						</section>
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