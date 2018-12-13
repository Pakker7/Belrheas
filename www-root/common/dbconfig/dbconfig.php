<?php
$db_info['host'] = 'localhost';
$db_info['database'] = 'belrheas';
$db_info['user'] ='belrheas';
$db_info['password'] = 'rheas123!@';

try{
	$con = new PDO('mysql:host='.$db_info['host'].';dbname='.$db_info['database'].';charset=utf8', $db_info['user'], $db_info['password']); 

	$con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}catch(PDOException $e) { 
	echo $e->getMessage(); 
}
?>