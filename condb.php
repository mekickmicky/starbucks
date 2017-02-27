<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'starbucks';

$connectHost = mysql_connect($hostname,$username,$password) or die(mysql_error());

// if($connect){
// 	echo "Connected";
// }
$connectDatabase = mysql_select_db($database) or die(mysql_error());
// if ($connectDatabase) {
// 	echo '<br>Database Connected';
// }
mysql_query("SET NAMES utf8");
mysql_query("SET character_set_results=utf8");//ตั้งค่าการดึงข้อมูลออกมาให้เป็น utf8
mysql_query("SET character_set_client=utf8");//ตั้งค่าการส่งข้อมุลลงฐานข้อมูลออกมาให้เป็น utf8
mysql_query("SET character_set_connection=utf8");//ตั้งค่าการติดต่อฐานข้อมูลให้เป็น utf8

date_default_timezone_set('Asia/Bangkok');

session_start();
$_SESSION['user_id'] = 1;

?>