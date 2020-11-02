  <?php 
  session_start();
  include 'conndb.php'; 
  include 'fungsi-tanggal.php';
  $id = $_SESSION['id_member'];
  $res = $mysqli->query("SELECT c.id_member,no_transaksi,nm_pembeli,nama_perumahan,blok_kaveling,tanggal_transaksi,harga_kaveling,Jenis_pelunasan,status FROM ((tbl_member c JOIN tbl_pembelian s ON c.id_member = s.id_member) tbl_perumahan g, tbl_kaveling d WHERE c.id_member='$id'"); 
  $row = $res->fetch_assoc();

  ?>
  <!doctype html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>invoice</title>
    <link href="css/invoice.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="images/invoice-logo.jpg" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                <h1>INVOICE</h1><br>
                                Tanggal :<?php echo $row['tanggal_transaksi'] ?> <br>
                                No Pembelian : <?php echo tanggalIndo($row['no_transaksi']); ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                PT. Citra Kedaton.<br>
                                Jl. Ringroad Utara 24 Condong catur, Yogyakarta. <br>
                                 0274 887789<br>
                            </td>
                            
                            <td>
                                Nama Konsumen.<br>
                                <?php echo $row['nm_pembeli'] ?><br>
                                <?php echo $_SESSION['email'] ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    <p style="color: #fff;">Blok Kaveling</p>
                </td>
                <td>
                    <p style="color: #fff;">Perumahan</p>
                </td>
                
            </tr>
            
            <tr class="details">
                <td>
                    <?php echo $row['blok_kaveling'] ?>
                </td>
                
                <td>
                    <?php echo $row['nama_perumahan'] ?>
                </td>
               
            </tr>
            
            <tr class="heading">
                <td>
                    <p style="color: #fff;">Jenis Bayar</p>
                </td>
                
                <td>
                    <p style="color: #fff;">Jumlah Bayar</p>
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Uang Muka 30 % dari Harga
                </td>
                
                <td>
                   Rp. <?php echo $row['harga_kaveling'] * 30 /100; ?>
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total:  Rp. <?php echo $row['harga_kaveling'] * 30 /100; ?>
               </td>
           </tr>
           <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            <strong>Catatan!</strong><br>
                            <p>Pembayaran Uang muka maksimal dibayarkan paling lamat 1 bulan sejak tanggak pembelian<br>
                            Untuk nominal pembayaran uang muka, konsumen dapat melebihi nominal pembayaran uang muka dari nominal minimal yang tertera diatas. <br> </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
         
    </table>
    <a href="index.php?page=akun" name="tambah" class="btn  tp-btn tp-btn-blue">Lanjut ke Pembayaran</a>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/nav-menu.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<!--slider jquery --> 
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/product-carousel.js"></script>
<script type="text/javascript" src="js/testimonial.js"></script>
<!-- search open--> 
<script type="text/javascript" src="js/search.js"></script> 
</body>
</html>

