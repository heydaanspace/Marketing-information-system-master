
<!-- Start content -->
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
              <div class="btn-group pull-right m-t-15">
                <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#tambah-kwitansi"><span class="m-l-5"><i class="fa fa-plus"></i></span>&nbsp;Buat Kwitansi</button>
                <!-- form input perumahan modals -->
                <?php 
                include 'modals-kwitansi.php';
                ?>
            </div>

            <h4 class="page-title">Pembayaran</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Citra Kedaton</a>
                </li>
                <li class="active">
                    Pembayaran
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title"><b>Data Pembayaran</b></h4>
                <p class="text-muted font-13 m-b-30">
                   <?php  
                   if(isset($_SESSION['info']))
                   {
                    echo '<div class="alert alert-success">
                    <strong>Sukses!</strong> &nbsp;'.$_SESSION['info'].'
                    </div>';
                    unset($_SESSION['info']);

                }
                ?> 
                <?php  
                if(isset($_SESSION['infokwit']))
                {
                    echo '<div class="alert alert-success">
                    <strong>Sukses!</strong> &nbsp;'.$_SESSION['infokwit'].'
                    </div>';
                    unset($_SESSION['infokwit']);

                }
                ?> 
                <?php  
                if(isset($_SESSION['errDel']))
                {
                    echo '<div class="alert alert-danger">
                    <strong>Gagal!</strong> &nbsp;'.$_SESSION['errDel'].'
                    </div>';
                    unset($_SESSION['errDel']);

                }
                ?> 
            </p>

            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Pembayaran</th>
                        <th>No. Transaksi</th>
                        <th>Jenis Bayar</th>
                        <th>Jumlah Bayar</th>
                        <th>Tanggal Transfer</th>
                        <th>Bukti Transfer</th>
                        <th>Bank</th>
                        <th>Status</th>                                  
                        <th>ACC</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                   <?php
                   include 'conndb.php';
                   include '../fungsi-tanggal.php';
                   $no = 1;
                   $res = $mysqli->query("SELECT * FROM tbl_pembayaran");
                   while($row = $res->fetch_array()){
                    echo '
                    <tr>
                    <td>'.$no++.'</td>
                    <td>'.$row['no_pembayaran'].'</td>
                    <td>'.$row['no_transaksi'].'</td>
                    <td>'.$row['jenis_bayar'].'</td>
                    <td>Rp. '.number_format($row['jumlah_bayar']).'</td>
                    <td>'.tanggalIndo($row['tanggal_transfer']).'</td>
                    <td> 
                    <a href="assets/images/dokumen/'.$row['bukti_transfer'].'" class="image-popup" "email me">'.$row['bukti_transfer'].'</a>
                    </td>
                    <td>'.$row['nama_bank'].'</td>
                    <td><span class="label label-warning">'.$row['status'].'</span></td>
                    <td>
                    <a href="edit-pembayaran.php?id='.$row['no_pembayaran'].'" class="btn btn-icon waves-effect waves-light btn-success"><i class="fa fa-check"></i></a>
                    </td>
                    <td>
                    <a href="delete-pembayaran.php?id='.$row['no_pembayaran'].'" class="btn btn-icon waves-effect waves-light btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                    </tr>';
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Data Kwitansi</b></h4>
            <p class="text-muted font-13 m-b-30">
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

        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Kwitansi</th>
                    <th>No. Pembayaran</th>
                    <th>Pembeli</th>
                    <th>Untuk Pembayaran</th>
                    <th>Uang Sebesar</th>                                 
                    <th>Aksi</th>                                  
                </tr>
            </thead>
            <tbody>
               <?php
               include 'conndb.php';
               $no = 1;
               $res = $mysqli->query("SELECT * FROM (tbl_kwitansi JOIN tbl_pembayaran ON tbl_kwitansi.no_pembayaran = tbl_pembayaran.no_pembayaran) JOIN tbl_penjualan ON tbl_penjualan.no_transaksi = tbl_pembayaran.no_transaksi");
               while($row = $res->fetch_array()){
                echo '
                <tr>
                <td>'.$no++.'</td>
                <td>'.$row['No_kwitansi'].'</td>
                <td>'.$row['no_pembayaran'].'</td>
                <td>'.$row['nm_pembeli'].'</td>
                <td>'.$row['untuk_pembayaran'].'</td>
                <td>Rp. '.$row['jumlah_bayar'].'</td>
                <td>
                <a href="delete-kwitansi.php?id='.$row['No_kwitansi'].'" class="btn btn-icon waves-effect waves-light btn-danger"><i class="fa fa-trash"></i></a>
                </td>
                </tr>';
            }
            ?>

        </tbody>
    </table>
</div>
</div>
</div>
</div> <!-- container -->

</div> <!-- content -->


