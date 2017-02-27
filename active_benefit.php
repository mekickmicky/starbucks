<?php 
	require 'condb.php';

	$user_id = @$_SESSION['user_id'];
	$query =mysql_query("SELECT  `benefit_time` FROM `benefit` WHERE user_id='".@$_SESSION['user_id']."'");
	$benefit_time = mysql_num_rows($query);

	if ($benefit_time < 12) {
   			echo "<script type=\"text/javascript\">alert('จำนวน Drink ไม่พอ') </script>";
			header("Refresh:0; reward.php");
	}else{
		$query_ins_card = mysql_query("DELETE FROM `benefit` WHERE user_id = '$user_id'");

		if ($query_ins_card) {
	   			echo "<script type=\"text/javascript\">alert('เรียบร้อย') </script>";
				header("Refresh:0; reward.php");
		}else{
	   			echo "<script type=\"text/javascript\">alert('ล้มเหลว') </script>";
				header("Refresh:0; reward.php");
		}
	}
 ?>