<table id="" class="table table-striped table-bordered datatable">
  <div class="dt-buttons btn-group">
    <a href="print-kaveling.php" class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable-buttons"><i class="fa fa-print"></i> Cetak</a>
    </div>
    <br><br>
  <thead>
    <tr>
      <th>No</th>
      <th>ID Kaveling</th>
      <th>Nama Perumahan</th>
      <th>Blok Kaveling</th>
      <th>Tanggal Terjual</th>
    </tr>
  </thead>



  <tbody>
    <?php
    include 'conndb.php';

    $no = 1;
    $res = $mysqli->query("SELECT a.id_kaveling, a.blok_kaveling, b.nama_perumahan, c.tanggal_transaksi FROM (tbl_kaveling a JOIN tbl_perumahan b ON a.id_perumahan=b.id_perumahan) JOIN tbl_penjualan c ON c.id_kaveling = a.id_kaveling");
    while($row = $res->fetch_assoc()){
      echo '
      <tr>
      <td>'.$no++.'</td>
      <td>'.$row['id_kaveling'].'</td>
      <td>'.$row['nama_perumahan'].'</td>
      <td>'.$row['blok_kaveling'].'</td>
      <td>'.$row['tanggal_transaksi'].'</td>
      </tr>';
    }
    ?>


  </tbody>
</table>