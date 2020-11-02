  <?php 
  include 'conndb.php';
  
  

  $query = "SELECT * FROM tbl_kaveling";
  $result = mysqli_query($mysqli, $query);
  $arr = array();
  if(mysqli_num_rows($result) != 0) {
  	while($row = mysqli_fetch_assoc($result)) {
  		$arr[] = $row;
  	}
  }

  echo $json_info = json_encode($arr);
  ?> 