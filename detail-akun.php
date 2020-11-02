

<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li><a href="agent-result.html">Agent Listing</a></li>
          <li class="active">Agent Details</li>
        </ol>
      </div>
      <div class="col-md-4">
        <div class="font-option"> Select font size : <a href="#" id="incfont">A+</a><a href="#" id="decfont">A-</a></div>
      </div>
    </div>
  </div>
</div>
<div class="main-container" id="main-container"><!--Main container start-->
  <div class="tp-agent-detail" id="tp-agent-detail"><!-- agent detail section -->
  	<div class="container">
    	<div class="row agent-detail">
        	<div class="col-md-4">
            	<img src="images/agent-detail.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-8">
            	<div class="row">
                	<div class="col-md-12">
                    	<h1>Rodney J. Louis</h1>
                    </div>
                    <div class="col-md-6">
                    
                    	<div class="detail-block"><!-- detail block -->
                            <h3><i class="fa fa-map-marker"></i> Address</h3>
                            <ul>
                            	<li>6422 Grovedale Dr Suite 102B Alexandria,</li>
                                <li>VA 22310</li>
                            </ul>
                        </div><!-- /.detail block -->
                        
                        <div class="detail-block"><!-- detail block -->
                            <h3><i class="fa fa-envelope"></i> E-mail</h3>
                            <p><a href="#">rodneyj@peaceinsurance.com</a></p>
                        </div><!-- /.detail block -->
                        
                        <div class="detail-block"><!-- detail block -->
                            <h3><i class="fa fa-clock-o"></i> Office Hours</h3>
                            <ul>
                            	<li>Monday to Friday</li>
                                <li>8:30 am to 5:30 pm</li>
                            </ul>
                        </div><!-- /.detail block -->
                    </div>
                    
                    <div class="col-md-6">
                    	<div class="detail-block num-block"><!-- detail block -->
                            <ul>
                            	<li><i class="fa fa-phone-square"></i> 1-703-753-5688 (Direct) </li>
                                <li><i class="fa fa-fax"></i> 1-703-753-5859 (Fax) </li>
                                <li><i class="fa fa-phone"></i> 1-888-444-1056 (Toll-Free)</li>
                            </ul>
                        </div><!-- /.detail block -->
                        
                        <div class="detail-block social-block"><!-- detail block -->
                        	<h3>Follow Me</h3>
                            <ul class="social-media">
                            	<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div><!-- /.detail block -->
                        
                        <div class="contact-block"><!-- detail block -->
                        	<a href="#" class="btn btn-block tp-btn tp-btn-orange">contact me</a>
                       </div><!-- /.detail block -->
                       
                    </div>
                </div>
            </div>
        </div>
        
        
           
     	 
       <div class="tp-accordion" id="tp-accordion"><!-- tp accordion start-->
  <div class="container">
    <div class="row">
      <div class="col-md-12 tp-accordion-one"><!--tp-accordion-one-->
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"><!--panel-group-->
          <div class="panel panel-default"><!--panel panel-default-->
            <div class="panel-heading" role="tab" id="headingOne"><!--panel-heading-->
              <h2 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Pembelian Saya</a> </h>
              </div><!--/.panel-heading-->
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne"><!--panel-collapse collapse in-->
                <div class="panel-body"><!--panel-body-->
                  <h2>Data Pembelian</h2>
                  <div class="col-md-12"><!-- search form -->
                    <form class="">
                      <div class="card-box table-responsive">
                        <table id="" class="table table-striped table-bordered datatable-buttons">
                          <thead>
                            <tr>
                              <?php 
                              include 'conndb.php'; 
                              $id = $_SESSION['id_member'];
                              $res = $mysqli->query("SELECT a.id_member, no_transaksi, nm_pembeli, nama_perumahan, blok_kaveling, tanggal_transaksi, harga_kaveling, jenis_pelunasan, status FROM ((tbl_member a JOIN tbl_pembelian b ON a.id_member = b.id_member) JOIN tbl_perumahan c ON c.id_perumahan  = b.id_perumahan) JOIN tbl_kaveling d ON d.id_kaveling = b.id_kaveling  WHERE a.id_member='$id'"); 
                              $row = $res->fetch_assoc();

                              ?>
                              <th>No Pembelian</th>
                              <th>Nama Pembeli</th>
                              <th>Perumahan</th>
                              <th>Blok Kaveling</th>
                              <th>Tanggal Pembelian</th>
                              <th>Harga Kaveling</th>
                              <th>Jenis Pelunasan</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                           <tr>
                            <td><?php echo $row['no_transaksi']; ?></td>
                            <td><?php echo $row['nm_pembeli']; ?></td>
                            <td><?php echo $row['nama_perumahan']; ?></td>
                            <td><?php echo $row['blok_kaveling']; ?></td>
                            <td><?php echo $row['tanggal_transaksi']; ?></td>
                            <td><?php echo $row['harga_kaveling']; ?></td>
                            <td><?php echo $row['jenis_pelunasan']; ?></td>
                            <td><?php echo $row['status'] ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </form>
                </div>
                <a href="modal-bayar.php?id=<?php echo $row['no_transaksi']; ?>" data-toggle="modal" data-target="#modals-bayar" name="tambah" class="btn  tp-btn tp-btn-blue">Pembayaran</a>

              </div><!--panel-body-->
            </div><!--/.panel-collapse collapse in-->
          </div><!--/.panel panel-default-->
          <div class="panel panel-default"><!--panel panel-default-->
            <div class="panel-heading" role="tab" id="headingTwo"><!--panel-heading-->
              <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Riwayat Pembayaran</a> </h3>
            </div><!--/.panel-heading-->
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body"> 
                <h2>Data Pembayaran</h2>
                <div class="col-md-12"><!-- search form -->
                  <form class="">
                    <div class="card-box table-responsive">
                      <table id="" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>No Pembayaran</th>
                            <th>No Transaksi</th>
                            <th>Jenis bayar</th>
                            <th>jumlah Bayar</th>
                            <th>Tanggal Transfer</th>
                            <th>Bank Tujuan</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php 
                          include 'conndb.php'; 
                          if(isset($_SESSION['id_member'])) {

                            $res = $mysqli->query("SELECT * FROM tbl_pembayaran WHERE no_transaksi='".$row['no_transaksi']."'"); 
                            while($rowpem =mysqli_fetch_assoc($res)) {  
                              ?>
                              <tr>
                                <td><?php echo $rowpem['no_pembayaran']; ?></td>
                                <td><?php echo $rowpem['no_transaksi']; ?></td>
                                <td><?php echo $rowpem['jenis_bayar']; ?></td>
                                <td><?php echo $rowpem['jumlah_bayar']; ?></td>
                                <td><?php echo $rowpem['tanggal_transfer']; ?></td>
                                <td><?php echo $rowpem['nama_bank']; ?></td>
                                <td><?php echo $rowpem['status'] ?></td>
                              </tr>
                              <?php 
                            }
                          } ?>
                        </tbody>
                      </table>
                    </div>
                  </form>
                </div>

              </div><!--/.panel-body-->
            </div>
          </div><!--/.panel panel-default-->
          <div class="panel panel-default"><!--panel panel-default-->
            <div class="panel-heading" role="tab" id="headingThree"><!--panel-heading-->
              <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Progres Pembangunan</a> </h3>
            </div><!--/.panel-heading-->
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body"> 
               <h2>Data Progres</h2>
                 <div class="row">
                      <div class="col-md-6">
                        <label class="control-label" for="lastname">Tanggal Progres</label>
                        <h3>1229</h3>
                      </div>
                      <div class="col-md-6">
                        <label class="control-label" for="firstname" class="btn tp-btn-blue">Persentase Progres</label>
                        <h2>100 %</h2>
                      </div>
                    </div>
                    <br>
               <div class="col-md-12"><!-- search form -->
                  <div class="card-box table-responsive">
                    <table id="" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID Progres</th>
                          <th>Realisasi</th>
                          <th>Target Selesai</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        include 'conndb.php'; 
                        if(isset($_SESSION['id_member'])) {

                          $id = $_SESSION['id_member'];
                          $res = $mysqli->query("SELECT a.id_progres,tanggal_progres,mulai_pembangunan, target_selesai FROM (tbl_progres_pembangunan a JOIN tbl_penjulan b ON a.No_penjualan = b.No_penjualan) JOIN tbl_member c ON c.id_member = a.id_member WHERE c.id_member='$id'"); 
                          while($data = mysqli_fetch_assoc($res)) {  
                            ?>
                            <tr>
                              <td><?php echo $data['id_progres']; ?></td>
                              <td><?php echo $data['mulai_pembangunan']; ?></td>
                              <td><?php echo $data['target_selesai']; ?></td>
                            </tr>
                            <?php 
                          }
                        } ?>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div><!--/.panel-body-->
          </div>
        </div><!--/.panel panel-default-->
      </div><!--/.panel-group-->
    </div><!--/.tp-accordion-one-->
  </div>
</div>
</div><!-- /.tp accordion start-->
         
         
                
                
                
         
    </div>
  </div>
  <!-- agent detail section --> 
</div>
<!-- /.Main container start-->
