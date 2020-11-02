  <?php  
      include 'conndb.php';
      $id = $_GET['id'];
      $res = $mysqli->query("SELECT * FROM tbl_kaveling WHERE id_perumahan='".$dataperum['id_perumahan']."'"); 
      $datakav = $res->fetch_assoc();
      
  ?>