     <?php 
        if(isset($_GET['page'])){
          $page = $_GET['page'];
          
          switch ($page) {
             case 'home':
             include "home.php";
             break;
             case 'kaveling':
             include "view-kaveling.php";
             break;
             case 'frmkaveling':
             include "frm-kaveling.php";
             break;
             case 'perumahan':
             include "view-perumahan.php";
             break;
             case 'frmperumahan':
             include "frm-perumahan.php";
             break;
             case 'viewgaleri':
             include "view-gallery.php";
             break;
             case 'frmgaleri':
             include "frm-gallery.php";
             break;
             case 'viewkpr':
             include "view-kpr.php";
             break;
             case 'frmkpr':
             include "frm-kpr.php";
             break;
             case 'viewadmin':
             include "view-admin.php";
             break;
             case 'frmadmin':
             include "frm-admin.php";
             break;
             case 'viewmember':
             include "view-member.php";
             break;
             case 'transaksi':
             include "view-transaksi.php";
             break;
             case 'pembayaran':
             include "view-pembayaran.php";
             break;
             case 'laporan':
             include "view-laporan.php";
             break;
             case 'penjualan':
             include "view-penjualan.php";
             break;
             case 'statistik':
             include "view-statistik.php";
             break;			
             default:
             echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
             break;
         }
     }else{
      include "home.php";
  }
  
  ?>