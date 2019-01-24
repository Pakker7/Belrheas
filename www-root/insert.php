<?php
include_once './common/dbconfig/dbconfig.php';


error_reporting(E_ALL);
ini_set('display_errors',1);

$i_group_num=1;
$name=$_POST['name']; //purchase
$postcode=$_POST['postcode'];
$address=$_POST['address'];
$address_detail=$_POST['address_detail'];
$phone1=$_POST['phone1'];
$phone2=$_POST['phone2'];
$phone3=$_POST['phone3'];
$phone=$phone1.$phone2.$phone3;
$email1=$_POST['email1'];
$email2=$_POST['email2'];
$email=$email1.'@'.$email2;
$request=$_POST['request'];

$query = "INSERT INTO `address` (`i_group_num`, `post_num`,`add`,`add_detail`) VALUES (?, ?, ?, ?)";


$result=$con->prepare($query);

$m_array=array();

$m_array[]=$i_group_num;
$m_array[]=$postcode;
$m_array[]=$address;
$m_array[]=$address_detail;



$result->execute($m_array);

$query = "INSERT INTO `purchase` (`i_group_num`,`phone_num`,`email`,`request`) VALUES (?, ?, ?, ?)";


$result=$con->prepare($query);

$p_array=array();

$p_array[]=$i_group_num;
$p_array[]=$phone;
$p_array[]=$email;
$p_array[]=$request;


$result->execute($p_array);

if ($result) {
    echo "등록 성공";
}
?>