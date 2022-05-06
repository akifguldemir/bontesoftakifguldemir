<?php
  include 'admin/netting/baglan.php';



?>
<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <!-- Navbar Start-->
  <nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
   <div class="container">
     <a class="navbar-brand" href="#">BONTE SOFT BANNER AKİF GÜLDEMİR</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText">
       <span class="navbar-toggler-icon"></span>
     </button>


   </div>
 </nav>
 <!-- Navbar Finish -->

 <body>
  <!-- Slider Start -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
 


  <div class="carousel-inner">

                <?php   

                    $carousel = $bannersor=$db->prepare("select * from banner");
                    $bannersor->execute();
                    $n=0;
                    while($bannercek=$bannersor->fetch(PDO::FETCH_ASSOC)) { 
                      $active = '';
                      if($n==0)
                      {
                          $active = 'active';
                      }
                      ?>

                    <div class="carousel-item <?php echo $active; ?>">
                      <img src="<?php echo $bannercek['banner_yol'] ?>" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $bannercek['banner_baslik'] ?></h5>
                        <p><?php echo $bannercek['banner_icerik'] ?></p>
                      </div>
                    </div>

                  

                <?php $n++; } ?>
  
    
  </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- Slider Finish -->




<!-- Footer Start--->

<section>
  <nav class="navbar fixed-bottom navbar-light bg-light">
    <div class="container">
      <a href="#" class="navbar-brand"></a>
      <p class="ms-auto"> AKİF GÜLDEMİR</p>
    </div>
  </nav>
</section>
<!-- Footer Finish -->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
     var myCarousel = document.querySelector('#carouselExampleCaptions')
     var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 5000,
      wrap: true
    })
  </script>



<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
</body>
</html>