<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta sname="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css_files/style_home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>DestiWish | Home</title>
</head>
<body>
    <header>
    <nav>
    <div class="nav_container">
    <div class="logo_div">
    <img class="logo" src="./../images/logo4_bg.png" alt="logo"></div>
        <div class="nav_item1">
            <a href="#">Home</a>
            <a href="options.php">Travel</a>
            <a href="about2.php">About</a>
        </div>
        <div  class="nav_item2">   
        <h5>user: <?php echo $_SESSION['name']; ?></h5>
        <a href="logout.php">Logout</a>
        </div>         
    </div>
    </nav> 
    <div  class="image_header">
   <p>
    TAKE THE QUIZ
   </p>
   <a href="options.php">
         <button >Start Now</button>
    </div>
</a>
    </header>
    <div class="scroll_and_cards">
        <p  class="para_quote">What we offer</p>
        <div  id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./../images/car4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5  class="title_scroll">Visit the best places</h5>
                    <p class="para_scroll">We provide detailled informations about places all arround the world</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img  src="./../images/car1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5  class="title_scroll">Discover history</h5>
                    <p class="para_scroll">We lead you to the best places known in each country </p>
                  </div>
              </div>
              <div  class="carousel-item">
                <img  src="./../images/car2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="title_scroll">Try different food</h5>
                    <p class="para_scroll">We suggest food from different counries</p>
                  </div>
              </div>
            </div>
            <button  class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    <h1 class="travel_features">Travel features</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div  class="col">
          <div class="card h-100">
            <a  href="./bloc_cheap.php"><img  src="./../images/featured_turkey.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <a  href="./bloc_cheap.php"><h5 class="card-title">Top cheap countries to visit</h5></a>
              <p class="card-text">looking for cheap countries? here are the 5 best countries you should check</p>
            </div>
    
          </div>
        </div>
        <div  class="col">
          <div  class="card h-100">
            <a  href="bloc_cities.php"><img "  src="./../images/featured_cities.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <a  href="bloc_cities.php"><h5 class="card-title">Cities in another level </h5></a>
              <p class="card-text">this is a list of the 5 best cities that still surprise visiters arround the world</p>
            </div>
            
          </div>
        </div>
        <div  class="col">
          <div class="card h-100">
            <a href="food.php"><img  src="./../images/hkyu-wu-vG4nNfEOzsY-unsplash.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <a  href="food.php"><h5 class="card-title">Foods you need to try</h5></a>
              <p class="card-text">here are the top 5 countries with foods you need to try once in your life</p>
            </div>
           
          </div>
        </div>
      </div>

        
    </div>
    <!--footer-->
    <footer class="footer">
    
    <div class="col_2">

            <a href=""><img style="width: 12%; " src="./../images/logo_1-PhotoRoom.png-PhotoRoom.png"></a>
            <p><br>Your companion to make better choices <br>and better memories next time you<br>   decide to travel</p>
            <p>&copy; 2023 oumaima achour. All rights reserved. | Contact: oumaimamy25@gmail.com</p>
        </div>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>