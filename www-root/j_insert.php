<?php
include_once './common/dbconfig/dbconfig.php';


error_reporting(E_ALL);
ini_set('display_errors',1);


$m_id=$_POST['m_id']; //member
$m_pw=$_POST['m_pw'];
$m_name=$_POST['m_name'];
$access_date= date('Y-m-d') ;
$join_date=date('Y-m-d');

$query = "INSERT INTO `member` (`m_id`, `m_pw`,`m_name`,`access_date`,`join_date`) VALUES (?, ?, ?, ?, ?)";


$result=$con->prepare($query);

$m_array=array();

$m_array[]=$m_id;
$m_array[]=$m_pw;
$m_array[]=$m_name;
$m_array[]=$access_date;
$m_array[]=$join_date;



$result->execute($m_array);


if ($result) {
    echo "등록 성공";
}
?>