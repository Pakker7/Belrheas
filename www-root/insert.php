<?php

include_once './common/dbconfig/dbconfig.php';

$query = "INSERT INTO `member` SET";
$query = "INSERT INTO `member` (`m_id`, `m_pw`, `m_name`, `m_nickname`, `phone_num`, `access_date`, `join_date`)
			VALUES (?, )";

?>