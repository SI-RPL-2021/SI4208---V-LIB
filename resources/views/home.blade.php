
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Home</title>
   
    <style>
        .logo{
            width: 280px;
            height: 80px;
        }
    </style>
  </head>

  <body >

  <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5" style="background-color:rgba(220, 220, 220);" align = center>

      <a class="navbar-brand" href="#">
        <img src="x.png" width="100">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <br> 
  <span class="navbar-toggler-icon"></span>
</button>
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto">
    
      <li class="nav-item active">
        <a class="nav-link" href="Home.php">Home<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
    <li class="nav-item active">
        <a class="nav-link" href="catalog.php">Catalog</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="publication.php">Publication</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="About.php">About Us</a>
      </li>
        <li class="nav-item active">
        <a class="nav-link text-dark" href="login.php">Login</a>
       </li>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
</div>
</nav>
<!--NAVBAR-->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
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

<!--Mengggunakan card-->
<div class="container">
    <div class="card-columns">
    <div class="card shadow  mb-5 bg-white rounded">
        <div class="card" style="text-align: center;">
          <img src="Superior.jpg" class="card-img-top" alt="card">
          <div class="card-body">
            <h5 class="card-title">Dimanapun</h5>
            </div>
            </div>
        </div>
    
        <div class="card shadow  mb-5 bg-white rounded">
        <div class="card" style="text-align: center;">
          <img src="Superior.jpg" class="card-img-top" alt="card">
          <div class="card-body">
            <h5 class="card-title">Oleh Siapapun</h5>
            </div>
            </div>
        </div>

        <div class="card shadow mb-5 bg-white rounded">
        <div class="card" style="text-align: center;">
          <img src="luxury.jpg" class="card-img-top" alt="card">
          <div class="card-body">
            <h5 class="card-title">Kapanpun</h5>
            </div>
        </div>
      </div>
    </div>
  </card>

    <br> <br> <br> <br> 
    <div class="container">
    <div class="footer">
        <div class="card-header" style="background-color:rgba(40, 178, 170);">
          <h5 class="">Beranda</h5>
          <h5 class="">Tentang Kami</h5>
          <p>CC Virtual Library</p>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>