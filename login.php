<div class="main-container" id="main-container"><!--Main container start-->
  <?php
if (isset($_SESSION['info'])) {
    echo '<div class="alert alert-success">
    <strong>Selamat! </strong> &nbsp;' . $_SESSION['info'] . '
    </div>';
    unset($_SESSION['info']);

} else {

    if (isset($_SESSION['err'])) {
        echo '<div class="alert alert-danger">
      <strong>Maaf! </strong> &nbsp;' . $_SESSION['err'] . '
      </div>';
        unset($_SESSION['err']);
    }
}
?>
  <div class="form-page" id="form-page"><!-- form section -->
   <div class="container">
     <div class="row">
       <div class="col-md-offset-1 col-md-10">
         <div class="row">
           <div class="col-md-6">
             <div class="grey-box"><!-- greay box -->
               <h2 class="tp-title">Silahkan Masuk</h2>
               <form method="post" action="verify-login.php">
                <!-- Text input-->
                <div class="form-group">
                  <label class="control-label" for="email">E - mail</label>

                  <input id="email" name="email" type="text" placeholder="Masukan E-mail" class="form-control input-md" required>
                </div>
                <!-- Text input-->
                <div class="form-group">
                  <label class="control-label" for="password">Password</label>
                  <input id="password" name="password" type="password" placeholder="Masukan password" class="form-control input-md" required>

                </div>

                <!-- Button -->
                <div class="form-group">
                  <label class="control-label" for="button"></label>
                  <button type="submit" id="button" name="button" class="btn tp-btn tp-btn-orange">login</button>
                </div>
                <small><a href="#">Forgot Password?</a></small>
              </form>



            </div><!-- /.greay box -->
          </div>
          <div class="col-md-6">
           <div class="grey-box"><!-- greay box -->
             <h2>Belum Punya Akun? @ Citra Kedaton</h2>
             <p>.</p>
             <?php
include 'modal-register.php';

?>
             <a href="" data-toggle="modal" data-target="#modals-register" class="btn tp-btn tp-btn-orange">Daftar Sekarang</a>
           </div>

         </div>
       </div>
     </div>
   </div>
 </div>
</div>
<!-- form section -->
</div>

