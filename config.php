/public_html/config.php

<?php
$hostname='localhost';
$username='id8919304_speculativevaracto';
$password='admin';

try{
	$db = new PDO("mysql:host=$hostname;dbname=id8919304_dailysales",$username,$password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch(Exception $e){
	echo "connection error: ".$e->getMessage();
}
?>