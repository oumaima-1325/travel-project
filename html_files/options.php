<!DOCTYPE html>
<html>
<head>
  <title>Travel and Food Suggestions</title>
  <link rel="stylesheet" href="./../css_files/options.css">
</head>
<body>
<header>
    <nav>
    <div class="nav_container">
    <div class="logo_div">
    <img class="logo" src="./../images/logo4_bg.png" alt="logo"></div>
        <div class="nav_item1">
            <a href="home.php">Home</a>
            <a href="options.php">Travel</a>
            <a href="about2.php">About</a>
        </div>
        <div  class="nav_item2">   
        <a href="logout.php">Logout</a>
        </div>         
    </div>
</nav> 
</header>
<!---------------------------------------------------------------------------------------------------------->
<div class="all">
  
  <div class="form">
    <h3 class="h3_p" style="padding:20px">choose your options</h3>
  <form action="suggestions.php" method="post">
    
    <label for="discover">  1-What are  you looking to discover?</label>
    <br>
    <br>
    <br>
    <div class="select_containt">
    <select class="button-select" name="discover" id="discover">
       
      <option value="History and Monuments">History and Monuments</option>
      <option value="Bridges and Big cities">Bridges and Big cities</option>
      <option value="Nature and Forests">Nature and Forests</option>
    </div>
    </select>
    <br>

    <label for="food">2-What culture are you intersted in?</label>
    <br>
    <div class="select_containt">
    <select class="button-select" name="food" id="food">
    
      <option value="Asian culture">Asian culture</option>
      <option value="Western culture">Western culture</option>
      <option value="Arabic culture">Arabic culture</option>
    
    </select>
    <div>
    <br>
   <input class="btt" type="submit" value="Get Suggestions">
  
  </form>
  </div>
</div>
<footer>

</footer>
</body>



</html>