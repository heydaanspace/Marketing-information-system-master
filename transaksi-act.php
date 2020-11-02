<?php

session_start();

include 'conndb.php';

$idkaveling = $_GET['id'];
$action = $_GET['action'];


if($action === 'empty')
  unset($_SESSION['kaveling']);

$result = $mysqli->query("SELECT * FROM tbl_kaveling WHERE id_kaveling = ".$idkaveling);


if($result){

  if($obj = $result->fetch_object()) {

    switch($action) {

      case "add":
      if($_SESSION['kaveling'][$idkaveling]+1 <= $obj->jumlah)
        $_SESSION['kaveling'][$idkaveling]++;
      break;

      case "remove":
        
        unset($_SESSION['kaveling'][$idkaveling]);
        header("location:index.php?page=perumahan");

        break;



    }
  }
}

header("location:index.php?page=proses");

?>
