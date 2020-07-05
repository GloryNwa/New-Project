<?php


$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'frontline';

// $db_host = 'remotemysql.com';
// $db_user = 'zQy2sPP2Hk';
// $db_password = 'rT7dQLRxhv';
// $db_name = 'zQy2sPP2Hk';



$connection = mysqli_connect($db_host,$db_user,$db_password, $db_name);
  if($connection){
		echo "";
	}else{
		echo ("Query failed" . mysqli_error($connection));
	}



?>