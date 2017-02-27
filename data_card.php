<?php
	require 'condb.php';
	$card_id = $_GET['card_id'];
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>asd</title>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
</head>
<body>
	
	<div class="wrap">
		<div class="wrap_bg"></div>
		<nav>
			<a href="my_card.php">
				<img class="back_icon" src="img/back_icon.png">
			</a>
			My Cards
		</nav>
		<a href="scan_buy.php?card_id=<?=$card_id?>" class="t_to_pay" style="top:33%;font-size: 36px;">
			Touch<br>when<br>done
		</a>
		<?php
			$query = mysql_query("SELECT card_registered FROM card where card_id = '$card_id'");
			$result = mysql_fetch_assoc($query);
		?>
		<div class="wrap_card" style="background: url(img/card_b.jpg) center no-repeat;border-radius: 40px;">
			<p><?=$result['card_registered']?></p>
		</div>
		

		<div class="wrap_loading">
			<img id="scan_transfrom" src="img/scan_loading.png">
			<p>Scan now</p>
		</div>


		<div class="wrap_nav">
			<a href="#">
				<div class="btn_nav">
					<img src="img/icon/home.png"><br>HOME
				</div>
			</a>
			<a href="my_card.php">
				<div class="btn_nav">
					<img src="img/icon/active/cards.png"><br>HOME
				</div>
			</a>
			<div class="btn_nav">
				<img src="img/icon/stores.png"><br>STORES
			</div>
			<div class="btn_nav">
				<img src="img/icon/messages.png"><br>MESSAGES
			</div>
			<div class="btn_nav">
				<img src="img/icon/more.png"><br>MORE
			</div>
		</div>
	</div>
</body>
</html>
<script src="js/modernizr.js"></script>
	<script>
		
		transform1();
		function transform1() {
			setTimeout(function(){
				document.getElementById("scan_transfrom").style.width  = "0px";
			}, 500);
			setTimeout(function(){
				transform2();
			}, 500);
		}
		function transform2() {
			setTimeout(function(){
				document.getElementById("scan_transfrom").style.width  = "200px";
			}, 500);
			setTimeout(function(){
				transform1();
			}, 500);
		}
		
	</script>