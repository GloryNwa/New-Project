<?php
function db_connect(){

// $db_host = 'localhost';
// $db_user = 'root';
// $db_password = '';
// $db_name = 'frontline';

$db_host = 'remotemysql.com';
$db_user = 'zQy2sPP2Hk';
$db_password = 'rT7dQLRxhv';
$db_name = 'zQy2sPP2Hk';

	$connection = new mysqli($db_host,$db_user,$db_password, $db_name);
	if($connection->error){
		die ("Query failed" . mysqli_error($connection));
	}

	return $connection;

}


$connection = db_connect();



?>



