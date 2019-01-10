<?php

include_once './common/dbconfig/dbconfig.php';
/*
$query = "INSERT INTO `member` SET `m_id` = ?,
									`m_pw` = ?,
									`m_name` = ?,
									`m_nickname` = ?,
									`phone_num` = ?,
									`access_date` = ?,
									`join_date` = ?";
*/

error_reporting(E_ALL);
ini_set('display_errors', 1);
/*
for ($i=0;$i<30;$i++) {

	$m_id[$i] = "haribo".$i."@naver.com";
	$m_pw[$i] = "haribo123";
	$m_name[$i] = "고구마".$i;
	$m_nickname[$i] = "하리보".$i;

	$phone_num = "010-0000-0000";
	$access_date = date("Y-m-d H:i:s");
	$join_date = date("Y-m-d H:i:s");

	$query = "INSERT INTO `member` (`m_id`, `m_pw`, `m_name`, `m_nickname`, `phone_num`, `access_date`, `join_date`) VALUES (?, PASSWORD(?), ?, ?, ?, ?, ?)";

	$result = $con->prepare($query);

	//$result->bindParam()

	$hash_m_pw = hash('sha512', $m_pw[$i]);
	$m_array = array();

	$m_array[] = $m_id[$i];
	$m_array[] = $hash_m_pw;
	$m_array[] = $m_name[$i];
	$m_array[] = $m_nickname[$i];
	$m_array[] = $phone_num;
	$m_array[] = $access_date;
	$m_array[] = $join_date;

	$result->execute($m_array);
}
*/

//$result->execute(array($m_id, $hash_m_pw, $m_name, $m_nickname, $phone_num, $access_date, $join_date));

?>