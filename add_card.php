<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>asd</title>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
</head>
<body>
	
	<div class="wrap">

		<form method="post" action="ins_card_db.php">
			<div class="wrap_bg"></div>
			<nav>
				<a href="my_card.php" class="btn_add_cancel">
					<div>Cancel</div>
				</a>
				Add Card
				<button class="btn_add_done">Done</button>
			</nav>
			<div class="wrap_addcard">
				<div class="wrap_input">
					<form method="post" action="ins_card_db.php">
						<input name="card_registered" type="text" pattern="[0-9]{16}" maxlength="16" placeholder="Starbucks Card Number" required>
						<br>
						<br>
						<input name="card_cvc" type="text" pattern="[0-9]{3}" style="width:300px;" maxlength="3" placeholder="Seculity Code" required>
				</div>
			</div>
		</form>
		<style type="text/css">
.btn_add_done{

	width: 200px;
	height: 80px;
	padding: 20px 0;
	text-align: center;
	background: #00613d;
	font-size: 30px;
	color: #fff;
	position: absolute;
	top: 40px;
	right: 40px;
	border-radius: 10px;
	border-bottom: 2px solid #011b11;
}
		</style>

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
	