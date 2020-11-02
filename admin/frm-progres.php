
<div class="content">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <h4 class="page-title">Data Progres Pembangunan</h4>
        <ol class="breadcrumb">
          <li><a href="#">Citra Kedaton</a></li>
          <li class="active">Data Progres Pembangunan</li>
        </ol>
        <?php  
        if(isset($_SESSION['info']))
        {
          echo '<div class="alert alert-success">
          <strong>Sukses!</strong> &nbsp;'.$_SESSION['info'].'
          </div>';
          unset($_SESSION['info']);

        }
        ?> 
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card-box">
          <h4 class="m-t-0 header-title"><b>Masukan Progres Pembangunan</b></h4>
          <p class="text-muted m-b-30 font-13"></p>
          <form action="save-progres.php" method="post">
            <div class="row">
              <div class="col-md-6 form-horizontal">   
               <div class="form-group">
                <label for="range_01" class="col-sm-2 control-label">ID Progres</label>
                <div class="col-sm-8">
                 <?php
                 include 'conndb.php';

                 $carikode = mysqli_query($mysqli, "SELECT id_progres from tbl_progres_pembangunan") or die (mysqli_error());

                 $datakode = mysqli_fetch_array($carikode);
                 $jumlah_data = mysqli_num_rows($carikode);

                 if ($datakode) {

                   $nilaikode = substr($jumlah_data[0], 1);

                   $kode = (int) $nilaikode;

                   $kode = $jumlah_data + 1;

                   $kodeprog = "01".str_pad($kode, 2, "0", STR_PAD_LEFT);
                 } else {
                   $kodeprog = "01001";

                 }
                 ?>  
                 <input type="text" name="idprog" value="<?php echo $kodeprog ?>" class="form-control">
               </div>
             </div>  
             <div class="form-group">
              <label class="col-sm-2 control-label">Tahap Progres</label>
              <div class="col-md-8">
                <select name="tahap" class="form-control"> 
                  <option value="Pekerjaan pondasi">Pekerjaan pondasi</option>
                  <option value="Pekerjaan stuktur">Pekerjaan stuktur</option>
                  <option value="Pekerjaan dinding">Pekerjaan dinding</option>
                  <option value="Pekerjaan kusen, pintu, dan jendela">Pekerjaan kusen, pintu, dan jendela</option>
                  <option value="Pekerjaan rangka atap">Pekerjaan rangka atap</option>
                  <option value="Pekerjaan plumbling, mekanikal dan elektrikal">Pekerjaan plumbling, mekanikal dan elektrikal</option>
                  <option value="Pekerjaan Finising">Pekerjaan Finishing</option>

                </select>
              </div>
            </div>                                 
            <div class="form-group">
              <label class="col-sm-2 control-label">No Penjualan</label>
              <div class="col-md-8">
                <select name="nopel" class="form-control">
                  <option value="0">Pilih Data</option>
                  <?php 
                  include 'conndb.php'; 
                  $no =1;
                  $res = $mysqli->query("SELECT * FROM tbl_rekap_penjualan"); 
                  while($data = mysqli_fetch_assoc($res)) {  
                    ?>
                    <option value="<?php echo $data['No_penjualan'] ?>"><?php echo $data['No_penjualan'] ?></option>
                    <?php 
                  } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Konsumen</label>
              <div class="col-md-8">
                <select name="konsumen" class="form-control">
                  <option value="0">Pilih Data</option>
                  <?php 
                  include 'conndb.php'; 
                  $no =1;
                  $res = $mysqli->query("SELECT a.id_member, nm_pembeli FROM tbl_member a JOIN tbl_penjualan b ON a.id_member = b.id_member"); 
                  while($data = mysqli_fetch_assoc($res)) {  
                    ?>
                    <option value="<?php echo $data['id_member'] ?>"><?php echo $data['nm_pembeli'] ?></option>
                    <?php 
                  } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Tanggal Progres</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <input type="text" name="tanggal" class="form-control datepicker-autoclose">
                  <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                </div><!-- input-group -->
              </div>
            </div>
          </div>

          <div class="col-md-6 form-horizontal">

            <div class="form-group">
              <label class="control-label col-sm-2">Target Selesai</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <input type="text" name="target" class="form-control datepicker-autoclose">
                  <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                </div><!-- input-group -->
              </div>
            </div>
            <div class="form-group">
              <label for="range_01" class="col-sm-2 control-label">Progres</label>
              <div class="col-sm-8">
                <input type="text" name="persen" class="range_01">
              </div>
            </div>                                     
            <div class="form-group">
              <label class="control-label col-sm-2">Realisasi</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <input type="text" name="realisasi" class="form-control datepicker-autoclose">
                  <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                </div><!-- input-group -->
              </div>
            </div>
          </div>
        </div>
        <div class="h5 m-0">
          <div class="form-group text-right">     
            <button type="submit" name="tambah" class="btn btn-purple waves-effect waves-light">SIMPAN</button>
          </div>
        </div>
      </form>
    </div>

  </div>
</div>
</div>


<div class="row">
  <div class="col-sm-12">
    <div class="card-box table-responsive">
      <h4 class="m-t-0 header-title"><b>Data Progres</b></h4>
      <p class="text-muted font-13 m-b-30">

      </p>

      <table id="datatable" class="table table-striped table-bordered">
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
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          include 'conndb.php'; 
          $no =1;
          $res = $mysqli->query("SELECT a.id_progres, b.No_penjualan, konsumen, progres,tahap, mulai_pembangunan, target_selesai, tanggal_progres FROM (tbl_progres_pembangunan a JOIN tbl_rekap_penjualan b ON a.No_penjualan = b.No_penjualan) JOIN tbl_member c ON c.id_member = a.id_member"); 
          while($data = mysqli_fetch_assoc($res)) {  
            ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data['id_progres'] ?></td>
              <td><?php echo $data['tahap'] ?></td>
              <td><?php echo $data['No_penjualan'] ?></td>
              <td><?php echo $data['konsumen'] ?></td>
              <td><?php echo $data['mulai_pembangunan'] ?></td>
              <td><?php echo $data['target_selesai'] ?></td>
              <td><span class="label label-success"><?php echo $data['progres'] ?> %</span></td>
              <td><?php echo $data['tanggal_progres'] ?></td>
              <td>
                <a href="modals-update-progres.php?id=<?php echo $data['id_progres'] ?>" class="btn btn-success waves-effect waves-light" data-target="#edit-progres" data-toggle="modal"><i class="md md-border-color"></i></a>
              </td>
            </tr>
           <?php 
           
          } ?>
        </tbody>  
      </table>
    </div>
  </div>
</div>


</div> <!-- container -->
</div>
<div id="edit-progres" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-full">
    <div class="modal-content">

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
