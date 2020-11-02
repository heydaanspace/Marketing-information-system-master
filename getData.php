<?php
//dataId comes from ajax (POST)
$id = filter_input(INPUT_POST, 'dataId');
include('mysql_connect.php');
$query11 = mysql_query("select * from p_requisition where id = '$id' ") or die(mysql_error());
$rows = mysql_fetch_array($query11);
//you should use json_encode, and you can parse when get back data in ajax
echo json_encode($rows['details']);
?>