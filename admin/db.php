
<?php

// $db_host = 'localhost';
// $db_user = 'root';
// $db_password = '';
// $db_name = 'frontline';

// $db_host = 'remotemysql.com';
// $db_user = 'pK973dx4qo';
// $db_password ='MZhMl0exwd';
// $db_name ='pK973dx4qo';


$db_host = 'remotemysql.com';
$db_user = '8r7AM7O1lW';
$db_password ='Kmf4Vyranm';
$db_name ='8r7AM7O1lW';

$connection = mysqli_connect($db_host,$db_user,$db_password, $db_name);
	if($connection){
		echo "";
	}else{
		echo ("Query failed" . mysqli_error($connection));
	}



?>