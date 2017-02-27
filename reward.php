<?php
	require 'condb.php';
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>asd</title>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
</head>
<body>
	<div class="wrap" style="display:none;">
		<nav>
			<a href="my_card.php">
				<img class="back_icon" src="img/back_icon.png">
			</a>
			My Benefits
		</nav>
		<?php
			$query =mysql_query("SELECT  `benefit_time` FROM `benefit` WHERE user_id='".@$_SESSION['user_id']."'");
			$benefit_time = mysql_num_rows($query);
			if ($benefit_time > 12) {
				$benefit_time = 12;
			}
		?>
		<div class="wrap_expires">
			<img src="img/glass_benefit.png">
			<div class="wrap_expires_inner">
				<p>12 Drinks Purchase Until Your Next Free Tall Drink</p>
				<progress value="<?=$benefit_time?>" max="12">
				</progress>
				<p style="text-align:center;"><?=$benefit_time?>/12(Expires In 2017-05-18)</p>
			</div>
		</div>
		<a href="#filter" class="btn_filter">Filter by: Active</a><br><br>
		<p style="text-align: center;">You are currently eligible to redeem the following reward(s):</p>
		<hr style="width:100%;height:5px;background:green;">
		<div class="wrap_bene_content">
			<img src="img/glass_s.png">
			<h2>You don't have any earned Rewards at the moment.</h2>
			<br>
			<hr style="width:100%;height:5px;background:green;">
			<br>
			<p>
				Collect Stars, get more rewards with your registered Starbucks Card and earn 1 Star for every THB 100 Purchase.<br>For a Complete information of My Starbucks Rewards , visit<br>
				<a href="https://www.starbuckscard.in.th/cards/">https://www.starbuckscard.in.th/cards/</a>
			</p>
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
		<div id="filter" class="overlay light">
	        <a class="cancel" href="#"></a>
	        <div class="popup">
	            <div style="width: 80%;margin: 0 auto;">
	               	<div class="wrap_menu">
		                <a href="active_benefit.php" class="btn_menu btn_ip_top">
		                	Active
		                </a>
		                <a href="#" class="btn_menu">
		                	Redeemed
		                </a>
		                <a href="#" class="btn_menu btn_ip_bottom">
		                	Expired
		                </a>
		                
		                <a href="#" class="btn_menu" style="border-radius: 30px;margin-top:40px;">
		                	Cancel
		                </a>
	                </div>	
	            </div>
	        </div>
   		</div>
	</div>

</body>
</html>
<script src="js/modernizr.js"></script>
	<script>
		//paste this code under head tag or in a seperate js file.
		// Wait for window load
		$(window).load(function() {
			// Animate loader off screen
				setInterval(function(){ 
					$(".wrap").fadeIn("slow");
				 }, 100);
				document.body.style.backgroundColor = "white";
		});
	</script>


	

					