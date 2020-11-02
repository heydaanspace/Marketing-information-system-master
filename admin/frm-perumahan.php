
<?php
include 'conndb.php';

 $carikode = mysqli_query($mysqli, "SELECT id_perumahan from tbl_perumahan") or die (mysqli_error());
  
  $datakode = mysqli_fetch_array($carikode);
  $jumlah_data = mysqli_num_rows($carikode);
 
  if ($datakode) {
   
   $nilaikode = substr($jumlah_data[0], 1);

   $kode = (int) $nilaikode;
 
   $kode = $jumlah_data + 1;
  
   $kode_otomatis = "10".str_pad($kode, 3, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "P0001";
  
}
?> 	
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

								<h4 class="page-title">Tambah Perumahan</h4>
								<ol class="breadcrumb">
									<li>
										<a href="#">Citra Kedaton</a>
									</li>
									<li>
										<a href="#">Data Master</a>
									</li>
                  <li>
                    <a href="#">Data Perumahan</a>
                  </li>
									<li class="active">
										Tambah Perumahan
									</li>
								</ol>
							</div>
						</div>
                  <form action="save-perumahan.php" method="post" enctype="multipart/form-data"> 
                        <div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 header-title"><b>Tambah Perumahan</b></h4>                   
                              <p class="text-muted m-b-30 font-13">
                                <?php  
                                  if(isset($_SESSION['info']))
                                    {
                                      echo '<div class="alert alert-success">
                                            <strong>Sukses!</strong>'.$_SESSION['info'].'
                                          </div>';
                                            unset($_SESSION['info']);

                                    }
                                ?>                     
                                </p>
                        			<div class="row">
                                 
                        				<div class="col-md-6 form-horizontal">
                        				                                    
	                                            <div class="form-group">
	                                                <label class="col-sm-2 control-label">ID Perumahan</label>
	                                                <div class="col-md-4">
	                                                    <input type="text" name="idperumahan" readonly="" value="<?php echo($kode_otomatis) ?>" class="form-control">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label" for="example-email">Perumahan</label>
	                                                <div class="col-md-4">
	                                                    <input type="text" id="example-email" name="perumahan" class="form-control" placeholder="">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Lokasi</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="lokasiperumahan" class="form-control">
	                                                </div>
	                                            </div>
                                               <div class="form-group">
                                                  <label class="col-md-2 control-label">Fasilitas</label>
                                                  <div class="col-md-10">
                                                      <textarea class="form-control" name="fasilitasperum" rows="5"></textarea>
                                                  </div>
                                              </div>
                                       
                        				</div>
                        				
                        				<div class="col-md-6 form-horizontal">
                        				                                    
	                                            
	                                             <div class="form-group">
                                                  <label class="col-md-2 control-label">Daftar Tipe</label>
                                                  <div class="col-md-10">
                                                    <select multiple="multiple" class="multi-select" id="tipeperum" name="tipeperum" data-plugin="multiselect">
                                                        <option value="Tipe 36">Tipe 36</option>
                                                        <option value="Tipe 40">Tipe 40</option>
                                                        <option value="Tipe 50">Tipe 50</option>
                                                        
                                                    </select>
                                            
                                                  </div>
                                              </div>                                                                     
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Jumlah Kaveling</label>
                                                    <div class="col-md-4">
                                                    <input id="demo3" type="text" value="" name="jmlkav">
                                                    
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-md-2 control-label">Luas Tanah</label>
                                                  <div class="input-group col-md-9">
                                                        <span class="input-group-addon">M²</span>
                                                        <input type="text" id="hargakav_field" name="luastanah" class="form-control" placeholder="..">
                                                    </div>
                                              </div> 
                        				</div>
                        			</div>
                                 <div class="h5 m-0">
                                     <div class="form-group text-right">     
                                        <button type="submit"  name="tambah" class="btn btn-purple waves-effect waves-light">Submit</button>
                                      </div>
                                </div>
                        		</div>
                        	</div>
                           
                        </div>
                     </form>

                  
                    </div> <!-- container -->
                               
                </div> <!-- content -->

<?php
session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php");
  }
?>
      
