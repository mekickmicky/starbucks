<?php 
	require 'condb.php';

	$card_registered = $_POST['card_registered'];
	$card_cvc = $_POST['card_cvc'];
	$user_id = @$_SESSION['user_id'];

	$query_ins_card = mysql_query("INSERT INTO `card`(`card_money`, `card_registered`, `card_cvc`, `user_id`) VALUES ('0','$card_registered','$card_cvc','$user_id')");

	if ($query_ins_card) {
   			echo "<script type=\"text/javascript\">alert('เรียบร้อย') </script>";
			header("Refresh:0; my_card.php");
	}else{
   			echo "<script type=\"text/javascript\">alert('ล้มเหลว') </script>";
			header("Refresh:0; add_card.php");
	}
 ?>