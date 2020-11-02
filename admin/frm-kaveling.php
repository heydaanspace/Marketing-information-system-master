
<div class="content">
 <div class="container">

  <!-- Page-Title -->
  <div class="row">
   <div class="col-sm-12">
    <div class="btn-group pull-right m-t-15">
      <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
      <ul class="dropdown-menu drop-menu-right" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>

    <h4 class="page-title">Tambah Kaveling</h4>
    <ol class="breadcrumb">
     <li>
      <a href="#">Citra Kedaton</a>
    </li>
    <li>
      <a href="#">Data Master</a>
    </li>
    <li>
      <a href="#">Data Kaveling</a>
    </li>
    <li class="active">
      Tambah Kaveling
    </li>
  </ol>
</div>
</div>



<form action="save-kaveling.php" method="post" accept-charset="utf-8">
  <div class="row">
   <div class="col-sm-12">
    <div class="card-box">

     <h4 class="m-t-0 header-title"><b>Tambah Kaveling</b></h4>
     <p class="text-muted m-b-30 font-13">
       <?php  
       if(isset($_SESSION['info']))
       {
        echo '<div class="alert alert-success">
        <strong>Sukses!</strong> &nbsp;'.$_SESSION['info'].'
        </div>';
        unset($_SESSION['info']);

      }
      ?> 
    </p>

    <div class="row">

      <div class="col-md-6 form-horizontal">

       <div class="form-group">
         <label class="col-sm-2 control-label" readonly>ID Kaveling</label>
         <div class="col-md-4">
          <?php
          include 'conndb.php';

          $carikode = mysqli_query($mysqli, "SELECT id_kaveling from tbl_kaveling") or die (mysqli_error());

          $datakode = mysqli_fetch_array($carikode);
          $jumlah_data = mysqli_num_rows($carikode);

          if ($datakode) {

           $nilaikode = substr($jumlah_data[0], 1);

           $kode = (int) $nilaikode;

           $kode = $jumlah_data + 1;

           $kode_otomatis = "01".str_pad($kode, 2, "0", STR_PAD_LEFT);
         } else {
           $kode_otomatis = "01001";

         }
         ?>  
         <input type="text" name="id" value="<?php echo($kode_otomatis) ?>" class="form-control">
       </div>
     </div>
     <div class="form-group">
      <label class="col-md-2 control-label">Perumahan</label>
      <div class="col-md-10">

       <select class="form-control" name="nmperumahan">
         <?php 
         include 'conndb.php';
         $result = mysqli_query($mysqli,"SELECT * FROM tbl_perumahan");
         while($row = mysqli_fetch_assoc($result))
         {

          ?>
          <option value="<?php echo $row['id_perumahan']; ?>"><?php echo $row['nama_perumahan']; ?></option>';
        <?php }
        


        ?>
      </select>
    </div>
  </div>   

  <div class="form-group">
    <label class="col-md-2 control-label">Blok Kaveling</label>
    <div class="col-md-10">
      <input type="text" name="blokav" class="form-control">
    </div>
  </div>


</div>

<div class="col-md-6 form-horizontal">


  <div class="form-group">
    <label class="col-md-2 control-label">Luas Kaveling</label>
    <div class="col-md-10">
      <input type="text" name="luas" class="form-control">
    </div>
  </div>                                   
  <div class="form-group">
    <label class="col-md-2 control-label">Tipe</label>
    <div class="col-md-10">
      <input type="text" name="tipe" class="form-control">
    </div>
  </div>                                   
  <div class="form-group">
    <label class="col-md-2 control-label">Harga Kaveling</label>
    <div class="input-group col-md-5">
      <span class="input-group-addon">Rp</span>
      <input type="text" id="example-input3-group1" name="harga" class="form-control" placeholder="..">
    </div>
  </div>

</div>

</div>


<div class="h5 m-0">
 <div class="form-group text-right">     
  <button type="submit" name="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
</div>
</div>

</div>
</div>
</div>



</form>



</div> <!-- container -->

</div> <!-- content -->

