<?php 
	require 'condb.php';

	$card_id = $_GET['card_id'];
	$user_id = @$_SESSION['user_id'];
	$price = 55;
	$query_card = mysql_query("INSERT INTO `benefit`(`benefit_time`, `user_id`) VALUES ('1','$user_id')");
	$query_money_b = mysql_query("SELECT card_money FROM card where card_id = '$card_id'");
	$result_money_b = mysql_fetch_assoc($query_money_b);
	$balance = $result_money_b['card_money'] - $price;
	$query_money = mysql_query("UPDATE card SET card_money ='$balance' where card_id = '$card_id'");
	if ($query_card && $query_money) {
   			echo "<script type=\"text/javascript\">alert('เรียบร้อย') </script>";
			header("Refresh:0; my_card.php");
	}else{
   			echo "<script type=\"text/javascript\">alert('ล้มเหลว') </script>";
			header("Refresh:0; my_card.php");
	}
 ?>