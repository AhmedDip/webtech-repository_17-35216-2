<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC.COM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>ABC.COM</h1>

  <?php 
  
  include ('header/header.php');
  
  ?>


     <!-- Slider/Carousel -->
     <div class="container">
        <div id="carouselExampleControls" class="carousel slide orange-bg" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h1>Full HD TV</h1>
                            <p>Buy it from ABC.COM</p>
                            <h1 class="price">44999 TAKA</h1>
                            <button class="buy-now-button"> Buy Now</button>
                        </div>
                        <div class="col-md-5">
                            <img src="image/tv.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
              <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-7" >
                            <h1>X-Box</h1>
                            <p>Buy it from ABC.COM</p>
                            <h1 class="price">60000 TAKA</h1>
                            <button class="buy-now-button"> Buy Now</button>
                        </div>
                        <div class="col-md-5">
                            <img src="image/xbox.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-7" >
                            <h1> Headphone</h1>
                            <p>Everything happens here. Watch, Play, Connect</p>
                            <h1 class="price">4000 TAKA</h1>
                            <button class="buy-now-button"> Buy Now</button>
                        </div>
                        <div class="col-md-5">
                            <img src="image/headphone.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>