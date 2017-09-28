<?php
		include('session.php');
				 $user = 'root'; //資料庫使用者名稱
				 $password = 'chen0718'; //資料庫的密碼
				   try{
					 $db = new PDO('mysql:host=localhost;dbname=green_earth;charset=utf8',$user,$password); 
					//之後若要結束與資料庫的連線，則使用「$db = null;」 
					
					 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
					 $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); 
					}catch(PDOException $e){ //若上述程式碼出現錯誤，便會執行以下動作 
						 Print 'ERROR!:' .$e->getMessage();  
						 die(); 
					}
				
				date_default_timezone_set('Asia/Taipei');
						$day = getdate();
						$d = $day['mday'];
						$m = $day['mon'];
						$y = $day['year'];
						$h = $day['hours'];
						$min = $day['minutes'];
						$s = $day['seconds'];
						
				$id=$_SESSION['login_user'];
				$datetm="$y-$m-$d $h:$min:$s";
				$title=$_POST[title];
				$srcn=$_POST[srcn];
				$srch=$_POST[srch];
				$content=$_POST[content];
				
				$query=("insert into article value(?,?,?,?,?,?)");
				
				$res=$db->prepare($query);
				$res->execute(array($id,$datetm,$title,$srcn,$srch,$content));
				
		header("Location:show_article_list.php" );		
			
		echo "1 record added";

		die();
		?>