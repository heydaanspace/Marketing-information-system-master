                <div class="content">
                  <div class="container">

                    <!-- Page-Title -->
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="page-title">Data Admin</h4>
                        <ol class="breadcrumb">
                          <li><a href="#">Citra Kedaton</a></li>
                          <li><a href="#">Data Master</a></li>
                          <li class="active">Data Member</li>
                        </ol>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <h4 class="m-t-0 header-title"><b>Data Konsumen</b></h4>
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

                        <table id="datatable" class="table table-striped table-bordered datatable">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>ID Konsumen</th>
                              <th>Nama Depan</th>
                              <th>Nama Belakang</th>
                              <th>Email</th>
                              <th>Alamat</th>
                              <th>TTL</th>
                              <th>Pekerjaan</th>
                              <th>Status</th>                                  
                              <th>No Telp</th>                                  
                              <th>Foto</th>                                  
                              <th>Aksi</th>                                  
                            </tr>
                          </thead>
                          <tbody>
                           <?php
                           include 'conndb.php';

                           $no = 1;
                           $res = $mysqli->query("SELECT * FROM tbl_member");
                           while($row = $res->fetch_assoc()){
                            echo '
                            <tr>
                            <td>'.$no.'</td>
                            <td>'.$row['id_member'].'</td>
                            <td>'.$row['nm_depan'].'</td>
                            <td>'.$row['nm_belakang'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['alamat_member'].'</td>
                            <td>'.$row['TTL_member'].'</td>
                            <td>'.$row['pekerjaan_member'].'</td>
                            <td>'.$row['status_member'].'</td>
                            <td>'.$row['No_telefonmember'].'</td>
                            <td>'.$row['foto_member'].'</td>

                            <td>
                            <a href="modals-edit-member.php?id='.$row['id_member'].'" class="table-action-btn" data-target="#modals-edit-member" data-toggle="modal"><i class="md md-edit"></i></a>
                            <a href="delete-perumahan.php?id='.$row['id_member'].'" class="table-action-btn"><i class="md md-close"></i></a>
                            </td>
                            </tr>';
                            $no++;
                          }
                          ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div> <!-- container -->

            </div> <!-- content -->
            <script src="assets/plugins/custombox/js/custombox.min.js"></script>
            <script src="assets/plugins/custombox/js/legacy.min.js"></script>

            <div id="modals-edit-member" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog modal-full">
                <div class="modal-content">

                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
