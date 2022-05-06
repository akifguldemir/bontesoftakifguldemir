<?php include 'header.php' ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Banner Sayfası</h3><a href="banner-ekle.php"><button type="button" class="btn btn-success">Banner Ekle</button><a>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
           
             

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Banner ID</th>
                          <th>Banner Resim</th>
                          <th>Banner Başlık</th>
                          <th>Banner İçerik</th>
                          <th>Banner Eklenme Zamanı</th>
                          <th>Banner Düzenle</th>
                          <th>Banner Sil</th>


                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><button type="button" class="btn btn-primary btn-xs">Düzenle</button></td>
                          <td><button type="button" class="btn btn-danger btn-xs">Sil</button></td>

                        </tr>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php include 'footer.php' ?>