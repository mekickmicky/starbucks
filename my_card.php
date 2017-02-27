<?php
	require 'condb.php';
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>asd</title>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script src="js/jssor.slider-22.2.10.min.js" type="text/javascript"></script>
</head>

<body>
	<script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: false,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
	<div class="wrap" style="display:none;">
		<div class="wrap_bg"></div>
		<nav>
			My Cards
		</nav>
		<div class="wrap_reward">
			<div class="box_text_reward">
				<img src="img/star.png"><font>Green level</font>
				<h5>STARS YOU'VE EARNED</h5>
				<span>100</span>
				<p>Your membership expiry date is 2017-03-29 49 more Stars to reach Gold level</p>
			</div>
			<a href="reward.php" class="btn_g" style="margin:45px;">Reward</a>
		</div>
		
		<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:1157px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
	        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
	            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
	            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
	        </div>
	        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:1157px;overflow:hidden;:z-index:222;">
	        	<?php
	        		$idclear = 0;
	        		$date = date("Y-m-d");
	        		$time = date("h:i:sa");
	        		$query_card = mysql_query("SELECT * FROM card");
	        		while ($result_card = mysql_fetch_array($query_card)) {
	        			$card_money = $result_card['card_money'];
	        			$card_money = number_format($card_money, 2, '.', ' ');
	        			$card_registered = $result_card['card_registered'];
	        			$card_id=$result_card['card_id'];
	        	?>
	            <div>
	            	<?php $idclear++; ?>
	                <div id="clear<?=$idclear?>" class="wrap_card clear"></div>
					<a href="data_card.php?card_id=<?=$card_id?>" class="t_to_pay">
						<img src="img/ttp.png"><br>Touch to Pay
					</a>
					<?php $idclear++; ?>
					<div id="clear<?=$idclear?>" class="box_content clear">
					<?php $idclear++; ?>
						<div id="clear<?=$idclear?>" class="box_content1 clear">
							<h2>Bath <?=$card_money?></h2>
							<p>As of <?=$date?> <?=$time?></p>
						</div>
					<?php $idclear++; ?>
						<div id="clear<?=$idclear?>" class="box_content2 clear">
							<p>Registered<br><?=$card_registered?></p>
						</div>
					</div>
					<?php $idclear++; ?>
					<div id="clear<?=$idclear?>" class="wrap_btn_m clear">
						<a href="#manage" class="btn_g">Manage</a>
						<a href="add_card.php" class="btn_g" style="margin-left:30px;">Add a Card</a>
					</div>
	            </div>
	            <?php
	        		}$idclear++;
	        	?>

	            <div>
	            	<a href="add_card.php" >
	            		<div id="clear<?=$idclear?>" class="card_add"></div>
	            	</a>
	            </div>
	        </div>
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
		<div id="manage" class="overlay light">
	        <a class="cancel" href="#"></a>
	        <div class="popup">
	            <div style="width: 80%;margin: 0 auto;">
	               	<div class="wrap_menu" style="top:950px;">
		                <a href="my_card.php" class="btn_menu btn_ip_top">
		                	Refresh Balance
		                </a>
		                <a href="transaction_history.php" class="btn_menu">
		                	Transaction History
		                </a>
		                <a href="#" class="btn_menu btn_ip_bottom">
		                	Cancel
		                </a>
	                </div>	
	            </div>
	        </div>
   		</div>
	</div>
	 <script type="text/javascript">jssor_1_slider_init();</script>
	<script src="js/modernizr.js"></script>
	<script>
		//paste this code under head tag or in a seperate js file.
		// Wait for window load
		$(window).load(function() {
			setTimeout(function(){ 
					$(".wrap").fadeIn("slow");
				 }, 300);
		});

		setTimeout(function () {
			for (var i = 1; i<100; i++) {
				document.getElementById("clear"+i).style.marginLeft = "";
			};
			document.getElementById("clear6").style.marginTop = "50px";
		},50);
    </script>
</body>
</html>
   
