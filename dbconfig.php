<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "demo";

$connected = mysql_connect($host,$username,$password);



if(!$connected) {
	 die('Could not connect to the Server - ' . mysql_error());
}

$dbselected = mysql_select_db($db);


if(!$dbselected){
	die('Could not connect to Database Server ' . mysql_error());	
}


?>