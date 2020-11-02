
<!-- Start content -->
<div class="content">
    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="modal" data-target="#modals-penjualan" aria-expanded="false">Tambah <span class="m-l-5"><i class="fa fa-plus"></i></span></button>
                    <?php 
                    include 'modals-penjualan.php';
                    ?>
                </div>

                <h4 class="page-title">Data Penjualan</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Citra Kedaton</a>
                    </li>
                    <li class="active">
                        Data Penjualan

                    </li>
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
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Data Penjualan</b></h4>
                    <p class="text-muted font-13 m-b-30">
                    </p>

                    <table id="datatable"  class="table table-striped table-bordered datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Penjualan</th>
                                <th>Tanggal Penjualan</th>
                                <th>No. Pembelian</th>
                                <th>Nama Pembeli</th>
                                <th>Perumahan</th>
                                <th>Blok Kaveling</th>
                                <th>Keterangan</th>
                                <th>Jenis Pelunasan</th>
                                <th>Bank</th>
                                <th>ACC KPR</th>
                                <th>Deadline ACC KPR</th>
                                <th>ACC Desain</th>
                                <th>Deadline addendum</th>
                                <th>Produksi versi SPP</th>
                                <th>Realisasi</th>
                                <th>Pelaksana</th>
                                <th>Tanggal SPP</th>
                                <th>Staff</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php
                            include 'conndb.php';

                            $no = 1;
                            $res = $mysqli->query("SELECT a.No_penjualan,a.tanggal,a.id_perumahan,a.keterangan,a.jenis_pelunasan,a.bank,a.tgl_acckpr,a.deadline_acckpr,a.acc_desain,a.deadline_add,a.prod_versispp, a.realisasi, a.pelaksana, a.tgl_spp, b.no_transaksi, b.nm_pembeli, c.blok_kaveling, d.nama_perumahan FROM ((tbl_rekap_penjualan a JOIN tbl_penjualan b ON a.no_transaksi = b.no_transaksi ) JOIN tbl_kaveling c ON a.id_kaveling = c.id_kaveling) JOIN tbl_perumahan d ON a.id_perumahan=d.id_perumahan");
                            while($row = $res->fetch_assoc()){

                                echo'<tr>
                                <td>'.$no.'</td>
                                <td>'.$row['No_penjualan'].'</td>
                                <td>'.$row['tanggal'].'</td>
                                <td>'.$row['no_transaksi'].'</td>
                                <td>'.$row['nm_pembeli'].'</td>
                                <td>'.$row['nama_perumahan'].'</td>
                                <td>'.$row['blok_kaveling'].'</td>
                                <td>'.$row['keterangan'].'</td>
                                <td>'.$row['jenis_pelunasan'].'</td>
                                <td>'.$row['bank'].'</td>
                                <td>'.$row['tgl_acckpr'].'</td>
                                <td>'.$row['deadline_acckpr'].'</td>
                                <td>'.$row['acc_desain'].'</td>
                                <td>'.$row['deadline_add'].'</td>
                                <td>'.$row['prod_versispp'].'</td>
                                <td>'.$row['realisasi'].'</td>
                                <td>'.$row['pelaksana'].'</td>
                                <td>'.$row['tgl_spp'].'</td>
                                <td>'.$_SESSION['nama'].'</td>
                                <td>
                                <a href="modals-edit-penjualan.php?id='.$row['No_penjualan'].'" class="table-action-btn"  data-target="#modals-edit" data-toggle="modal"><i class="md md-edit"></i></a>
                                <a href="" class="table-action-btn"><i class="md md-close"></i></a>
                                </td>

                                </tr>';
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div> <!-- container -->

    </div> <!-- content -->
    <div id="modals-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-full">
          <div class="modal-content">
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



