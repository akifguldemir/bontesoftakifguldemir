<?php 

include 'header.php'; 

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Banner Ekleme Sayfası <small>

            </small></h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"   id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

             <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banner Seç<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" id="first-name"  name="banner_yol"  class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banner Başlık <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="banner_baslik"  required="required" placeholder="Banner başlık giriniz." class="form-control col-md-7 col-xs-12">
              </div>
            </div>


          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banner İçerik <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" name="banner_icerik"   placeholder="Banner İçerik Giriniz." class="form-control col-md-7 col-xs-12">
            </div>
          </div>

    

        <div class="ln_solid"></div>
        <div class="form-group">
          <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button type="submit" name="bannerkaydet" class="btn btn-success">Ekle</button>
          </div>
        </div>

      </form>



    </div>
  </div>
</div>
</div>



<hr>
<hr>
<hr>



</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>