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
		<title>綠樹朋友</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <link rel="shortcut icon" href="icon/introduction.ico" />
        <link rel="stylesheet" href="css/block.css" />
		<script src = "js/fb_like.js"></script>
		<script src = "js/secret.js"></script>
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/ourEffectIntroduction.js"></script>
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

				    <!-- Sidebar -->
				    <div id="sidebar" class="4u">
					    <section>
						    <header class="major">
							    <h2>樹種</h2>
						    </header>									
						    <ul class="default">
							    <li><a href="#tree1">樟樹</a></li>
							    <li><a href="#tree2">台灣肖楠</a></li>
							    <li><a href="#tree3">櫸樹</a></li>
							    <li><a href="#tree4">相思樹</a></li>
							    <li><a href="#tree5">柳杉</a></li>
							    <li><a href="#tree6">楓香</a></li>
							    <li><a href="#tree7">杉木</a></li>
							    <li><a href="#tree8">光臘樹</a></li>
							    <li><a href="#tree9">紅檜</a></li>
							    <li><a href="#tree10">烏心石</a></li>	
						    </ul>
					    </section>
						<section id = "secret"></section>
				    </div>

				    <!-- Content -->
				    <div id="content" class="8u skel-cell-important">
				        
                        <section>
					        <header class="major">
						        <h2>綠樹朋友</h2>
						        <span class="byline">沐浴綠樹朝氣 徜徉綠海朋友</span>
						        <div class="fb-like" data-href="introduction.php" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                            </header>
                        </section>
                        
                        <section id = "tree1" class = "block" >
						
					        <h3>樟樹</h3><br>
                            <p>學名：Cinnamomum camphora (L.) Presl<p>
                            <p>俗名：樟，芳樟，油樟，鳥樟，栳樟，Camphor tree</p>
                            <details>
                            <summary>詳細說明</summary>
                            <ul>
                                <li>形態特徵：</li><li>常綠喬木，全株各部位均有芳香氣味，樹幹常縱向深溝裂。葉薄革質，卵形或橢圓形，平滑無毛，離基三出脈，葉背脈腋有腺窩。圓錐花序頂生或腋生，花甚小，綠白色。核果球形，徑約6㎜，熟時黑色。</li>
                                <li>生態／分布：</li><li>臺灣的樟樹原來蓄積非常豐富，全島約1800m以下之中海拔山區或平地都很適宜樟樹的生長，可惜日本佔據臺灣時，設有"樟腦專賣局"，大量砍伐樟樹煉製樟腦，販售圖利，光復後，山區已無樟林矣。南部恆春半島地區之樟樹，植株通較低矮，樹幹萌芽性強，溝裂不明顯，特別稱為栳樟或鳥樟。</li>
                                <li>用途／解說：</li><li>樟樹全株除可供提煉樟腦、樟油外，木材性質甚性，可供建材、家具、雕刻等用途。樟樹亦為著名的綠美化樹種，林園樹、行道樹或植為防風林均極適宜。</li>
                            </ul>
                            </details>
							<div id="tree1Show" >
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P73-1.jpg" alt = "樟樹果實">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P73-3.jpg" alt = "樟樹林">
							</div>
                        </section><br>

                        <section id = "tree2" class = "block">
                            <h3>台灣肖楠</h3><br>
                            <p>學名：Calocedrus formosana (Florin) Florin</p>
                            <p>俗名：肖楠，黃肉仔。</p>
                            <details>
                            <summary>詳細說明</summary>
                            <ul>
                                <li>形態特徵：</li><li>大喬木，樹皮紅褐色。葉鱗片狀，每四枚合生，全體扁平，表面深綠，背面蒼綠色。毬果長橢圓形，長10～15mm，果鱗4枚，十字形對生，僅兩側者結實。種子具大小不等之膜質翅。</li>
                                <li>生態／分布：</li><li>本種為臺灣特有種，生長於中北部海拔300～1,900m之山區，中興大學實驗林惠蓀林場保留有臺灣肖楠的母樹林。</li>
                                <li>用途／解說：</li><li>從小枝及鱗片葉的形態上看，本種與紅檜、臺灣扁柏都很相似，但本種小枝鱗片葉的節間比較長，毬果呈長橢圓形，果鱗成對著生是其不同之處。臺灣肖楠是極佳的綠美化材料。</li>
                            </ul>
                            </details>
							<div id="tree2Show" >
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P37-1.jpg" alt = "肖楠特徵">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P37-2.jpg" alt = "台灣肖楠">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P37-3.jpg" alt = "肖楠果實">
							</div>
                        </section><br>

                        <section id = "tree3" class = "block">
                            <h3>櫸樹</h3><br>
                            <p>學名：Zelkova serrata（Thunb.）Makino</p>
                            <p>俗名：櫸榆，臺灣榆，雞油，Japanese Zelkova, Taiwan Zelkova。</p>
                            <details>
                            <summary>詳細說明</summary>
                            <ul>
                                <li>形態特徵：</li><li>落葉大喬木；幹皮灰褐色，雲片狀剝落，有雲形剝落痕。葉厚紙質，長卵形，長3～10㎝，寬1.5～5㎝，先端漸尖，基部圓形，表面粗糙，背面沿主脈兩側殘留有稀疏柔毛，單鋸齒緣，側脈5～14對，葉柄長2～6㎜。花與新葉同開，單性，花被凹形，4或5淺裂。核果幾無梗，斜卵狀圓錐形，上面偏斜，凹陷，底徑約3㎜，具背腹脊，網肋明顯。</li>
                                <li>生態／分布：</li><li>產臺灣全島海拔300～1,000公尺山區。分布大陸及日本、韓國。</li>
                                <li>用途／解說：</li><li>櫸之名，據李時珍：「其樹高舉」，係揚其高大焉。木材強韌為闊葉樹中最優良木材之一，樹供景觀及盆栽。栽培品種中，有黃金櫸（cv. Pulverulenta）,新葉黃白色；紅芽櫸（cv. Redtip），頂芽紫紅色，偶亦可見。</li>
                            </ul>
                            </details>
							<div id="tree3Show" >
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book3/images/063-1.jpg" alt = "櫸樹葉">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book3/images/063-2.jpg" alt = "櫸樹枝">
							</div>
                        </section><br>

                        <section id = "tree4" class = "block">
						
                            <h3>相思樹</h3><br>
                            <p>學名：Acacia confusa Merr.</p>
                            <p>俗名：相思仔，洋桂花，Taiwan Acacia。</p>
                            <details>
                            <summary>詳細說明</summary>
                            <ul>
                                <li>形態特徵：</li><li>高大喬木。初生葉為二回羽狀，尋常葉則為葉狀葉柄之假葉；假葉狹長，略鐮狀彎曲，兩端漸尖，縱脈五條。圓球花序金黃色，徑6～8㎜。莢果長5～10㎝，種子7～8粒。</li>
                                <li>生態／分布：</li><li>原產臺灣恆春半島，分布菲律賓至印尼。</li>
                                <li>用途／解說：</li><li>木材堅重，為良好薪炭材。樹皮含多量單寧，可鞣革；為臺灣主要造林樹種之一。相思樹之名，緣自干寶搜神記：「大夫韓溤妻美，宋康王奪之，溤自殺，妻投台下死。王怒，令塚相望。宿昔有文梓木，生一塚端，根交於下，枝錯其上，宋王哀之，因號其木為相思樹。」</li>
                            </ul>
                            </details>
							<div id="tree4Show" >
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book2/images/029-1.jpg" alt = "相思樹尋常葉">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book2/images/029-2.jpg" alt = "相思樹圓球花">
							</div>
                        </section><br>

                        <section id = "tree5" class = "block">
                            <h3>柳杉</h3><br>
                            <p>學名：Cryptomeria japonica D. Don</p>
                            <p>俗名：孔雀杉。</p>
                            <details>
                            <summary>詳細說明</summary>
                            <ul>
                                <li>形態特性：</li><li>常綠大喬木。葉螺旋狀著生，鑿形，先端略內彎，基部下延狀，兩側圴有氣孔帶，長10～18㎜。花雌雄同株，雄毬花簇生小枝端；雌毬花單生於短枝頂。毬果球形，果鱗約20～30枚，木質，頂端具4～6棘突。種子不規則扁橢圓形，邊緣有狹翅。</li>
                                <li>生態／分布：</li><li>分布於日本及大陸，喜生於比較潮濕，土壤肥沃之處。</li>
                                <li>用途／解說：</li><li>臺灣之柳杉自日本引進，生長甚佳為中海拔最主要的造林樹種，諸如阿里山、溪頭、太平山、觀霧等均是。</li>
                            </ul>
                            </details>
							<div id="tree5Show" >
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P31-1.jpg" alt = "柳杉主幹">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P31-2.jpg" alt = "柳杉花">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P31-3.jpg" alt = "柳杉花">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P31-4.jpg" alt = "柳杉">
							</div>
                        </section><br>

                        <section id = "tree6" class = "block">
                            <h3>楓香</h3><br>
                            <p>學名：Liquidambar formosana Hance</p>
                            <p>俗名：楓仔樹，楓樹，路路通，白膠香，Formosan Sweet Gum, Fragrant Maple。</p>
                            <details>
                            <summary>詳細說明</summary>
                            <ul>
                                <li>形態特徵：</li><li>大喬木。葉之輪廓菱形，寬8～15㎝，多三片裂，幼時或為五裂，基部圓形或心形；細鋸齒緣；葉柄長8～10㎝；托葉線形。雌雄同株；短總狀雄花序叢生；雌花序有長梗，球形，萼齒針形，4～7枚。果序球形，木質，徑約3㎝，花柱及萼齒宿存；種子長約7㎜，有頂翅。</li>
                                <li>生態／分布：</li><li>產臺灣平地至海拔1,00公尺之山區，極為普遍。於開墾跡地次生林或溪岸地之常可形成小群團狀純林。分布大陸之華中、華南。</li>
                                <li>用途／解說：</li><li>材可供培養香菇，幹可採脂，楓脂為蘇合香之代用品，又供藥用，可袪痰、活血、解毒、止痛；葉飼天蠶。楓之名，古籍所載頗多，山海經，大荒南經：「楓木，蚩尤所棄其桎梏，是為楓木」，晉郭樸云「即今楓香樹」。唐本草：「楓子如梂」。爾雅謂「楓」為「聶聶」，「枝弱善搖，霜後葉丹」者焉。爾雅中亦載「桋，白者栜」；郭樸疑其似常今之「槭」。實者「槭」之名，早見於漢之說意之唐之詩序中，「庭植槭以灑落」（晉、潘岳），即可見之。故古籍中雖將「楓香」與「槭」有合稱為「楓」者，但果序如毬果狀者為「楓香」，翅果如飛蛾者謂「槭」，仍有所別。楓紅可表徵秋色之美，實者其春綠亦為一悅目美景，故為重要之景觀樹種。</li>
                            </ul>
                            </details>
							<div id="tree6Show" >
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book3/images/010-1.jpg" alt = "楓香雄花">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book3/images/010-2.jpg" alt = "楓香雌花">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book3/images/010-3.jpg" alt = "楓香">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book3/images/010-4.jpg" alt = "楓香">
							</div>
                        </section><br>

                        <section id = "tree7" class = "block">
                            <h3>杉木</h3><br>
                            <p>學名：Canninghamia lanceolata (Lamb.) Hook.</p>
                            <p>俗名：福州杉，廣葉杉。</p>
                            <details>
                            <summary>詳細說明</summary>
                            <ul>
                                <li>形態特性：</li><li>常綠喬木。葉螺旋狀著生並扭成二列，線狀披針形，背面粉綠，二條白色氣孔帶明顯。毬果卵圓形，果鱗先端有一突尖。</li>
                                <li>生態／分布：</li><li>杉木為大陸長江以南各省最重要的造林樹種，臺灣引進栽培於全島 500～1800m之山區。</li>
                                <li>用途／解說：</li><li>杉木因生長快，伐期短，本島低海拔之人工林多屬之。朱熹詩云"門前杉徑深，屋后杉色奇"，可知杉木早就為觀賞及庇蔭之用。</li>
                            </ul>
                            </details>
							<div id="tree7Show" >
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P30-1.jpg" alt = "杉木">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P30-2.jpg" alt = "杉木林">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P30-3.jpg" alt = "杉木毬果">
							</div>
                        </section><br>

                        <section id = "tree8" class = "block">
                            <h3>光臘樹</h3><br>
                            <p>學名：Fraxinus griffithii C. B. Clarke</p>
                            <p>俗名：白雞油，臺灣白蠟樹，山苦楝，Formosan Ash。</p>
                            <details>
                            <summary>詳細說明</summary>
                            <ul>
                                <li>形態特徵：</li><li>半落葉性大喬木，幹皮灰紅褐色或灰綠色，小薄片狀剝落，留有雲形剝落痕。葉對生，奇數羽狀複葉，小葉2～5對，近全緣，長橢圓形，長5～6㎝，兩端漸尖。花灰白色，花萼鐘形，花冠深4裂，裂片長橢圓形。翅果披針狀篦形，先端鈍形，翅下延至堅果中部以下，堅果圓柱形。</li>
                                <li>生態／分布：</li><li>光臘樹生長於臺灣全島低海拔之闊葉樹林中，在河畔、崩塌地、乾燥山坡尤多見之；分布廣泛自印度、印尼、菲律賓、日本及中國大陸之華南地區均分布。</li>
                                <li>用途／解說：</li><li>光臘樹的木材質地堅韌，耐摩擦衝擊，為優良家具及運動器材製造用材。其抗旱性強，為臺灣的重要闊葉樹造林樹種，亦常栽植為觀賞樹或當行道樹，亦可作為水土保持植物。</li>
                            </ul>
                            </details>
							<div id="tree8Show" >
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book5/images/040-1.jpg" alt = "temp">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book5/images/040-2.jpg" alt = "temp">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book5/images/040-3.jpg" alt = "temp">
							</div>
                        </section><br>

                        <section id = "tree9" class = "block">
						
                            <h3>紅檜</h3><br>
                            <p>學名：Chamaecyparis formosensis Matsum.</p>
                            <p>俗名：薄皮，松梧，松羅。</p>
                            <details>
                            <summary>詳細說明</summary>
                            <ul>
                                <li>形態特徵:</li><li>綠大喬木；樹皮薄而呈淡紅褐色。小枝扁平，葉鱗片狀，先端尖銳，在小枝側面作覆瓦狀對生。毬果橢圓形，長8～12㎜，果鱗盾形。種子具薄翅。</li>
                                <li>生態／分布:</li><li>紅檜為臺灣特有種，產全島中央山脈海拔1,000～2,800m之森林中，樹性較喜陽光。</li>
                                <li>用途／解說:</li><li>紅檜為亞洲東部所有樹種中最巨大的樹木，著名的阿里山神木、拉拉山神木、雪山神木及觀霧神木均是紅檜。紅檜的木材是臺灣最珍貴的木材之一，用途廣泛，現已禁止砍伐。</li>
                            </ul>
                            </details>
							<div id="tree9Show" >
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P35-1.jpg" alt = "temp">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P35-2.jpg" alt = "temp">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P35-3.jpg" alt = "temp">
							</div>
                        </section><br>

                        <section id = "tree10" class = "block">
                            <h3>烏心石</h3><br>
                            <p>學名：Michelia compressa (Macim.) Sangent</p>
                            <p>俗名：-</p>
                            <details>
                            <summary>詳細說明</summary>
                            <ul>
                                <li>形態特徵：</li><li>常綠大喬木，芽被有紅褐色毛。葉橢圓狀披針形，長8～10㎝，略革質。花白色，單生葉腋，芳香。蓇葖果螺旋狀著生於果梗上，種子紅色。</li>
                                <li>生態／分布：</li><li>本種生育於全島低至中海拔之闊葉樹林中，樹形高大，日本亦有分布。</li>
                                <li>用途／解說：</li><li>烏心石為著名用材，屬闊葉樹一級木，其樹形優美，終年常綠，花白芳香，亦為重要原生綠化樹種。</li>
                            </ul>
                            </details>
							<div id="tree10Show" >
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P59-1.jpg" alt = "temp">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P59-2.jpg" alt = "temp">
                            <img src = "http://subject.forest.gov.tw/species/twtrees/book1/images/P59-3.jpg" alt = "temp">
							</div>
				        </section><br>

			        </div>
					
					<h6>資料來源: <a href = "http://subject.forest.gov.tw/species/twtrees/index.htm" target = "_blank">行政院農業委員會 印行</a></h6>
					
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
                <div class="fb-like" style = "margin-left: 19%" data-href="index.php" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			</div>			
		</div>

	</body>
</html>