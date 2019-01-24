<?php
echo "aa";
include_once './dbconfig.php';


error_reporting(E_ALL);
ini_set('display_errors',1);

print_r($_POST);

$i_group_num=$_POST['i_group_num'];
if (!$i_group_num) $i_group_num = 1;
$name=$_POST['name'];
$postcode=$_POST['postcode'];
$address=$_POST['address'];
$address_detail=$_POST['address_detail'];
$phone1=$_POST['phone1'];
$phone2=$_POST['phone2'];
$phone3=$_POST['phone3'];
$email1=$_POST['email1'];
$email2=$_POST['email2'];
$request=$_POST['request'];

$query = "INSERT INTO `address` (`i_group_num`, `post_num`,`add`,`add_detail`, `deliver`, `d_status`, `d_num`) VALUES (?, ?, ?, ?, ?, ?, ?)";


$result=$con->prepare($query);

$m_array=array();

$m_array[]=$name;
$m_array[]=$postcode;
$m_array[]=$address;
$m_array[]=$address_detail;
$m_array[]=$phone1;
$m_array[]=$phone2;
$m_array[]=$phone3;
// $m_array[]=$email1;
// $m_array[]=$email2;
// $m_array[]=$request;


$result->execute($m_array);

if ($result) {
    echo "등록 성공";
}
?>