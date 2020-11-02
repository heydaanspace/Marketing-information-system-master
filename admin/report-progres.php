<table id="" class="table table-striped table-bordered datatable">
  <div class="dt-buttons btn-group">
    <a href="print-progres.php" class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable-buttons"><i class="fa fa-print"></i> Cetak</a>
  </div>
  <br><br>
  <thead>
    <tr>
      <th>No</th>
      <th>ID Progres</th>
      <th>Tahap</th>
      <th>No Penjualan</th>
      <th>Nama Konsumen</th>
      <th>Realisasi</th>
      <th>Target Selesai</th>
      <th>Persentase Progres</th>
      <th>Tanggal Progres</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'conndb.php';

    $no = 1;
    $res = $mysqli->query("SELECT a.id_progres, b.No_penjualan, konsumen, progres,tahap, mulai_pembangunan, target_selesai, tanggal_progres FROM (tbl_progres_pembangunan a JOIN tbl_rekap_penjualan b ON a.No_penjualan = b.No_penjualan) JOIN tbl_member c ON c.id_member = a.id_member");
    while($row = $res->fetch_assoc()){
      echo '
      <tr>
      <td>'.$no++.'</td>
      <td>'.$row['id_progres'].'</td>
      <td>'.$row['tahap'].'</td>
      <td>'.$row['No_penjualan'].'</td>
      <td>'.$row['konsumen'].'</td>
      <td>'.$row['mulai_pembangunan'].'</td>
      <td>'.$row['target_selesai'].'</td>
      <td><span class="label label-success">'.$row['progres'].' %</span></td>
      <td>'.$row['tanggal_progres'].'</td>
      </tr>';
    }
    ?>


  </tbody>
</table>