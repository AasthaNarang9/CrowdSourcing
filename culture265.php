<?php
session_start();

$_SESSION['login']=false;
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1252">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <title>home page</title>
  <link rel="stylesheet" type="text/css" href="index.css">
   
  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"  ></script>
        <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
 <style type="text/css">
   *{
      font-family: 'Raleway';
   }
 </style>


</head>
<body>
  <div>
    <div>
      <ul style="height: 68px; margin: 0;margin-right: 2%; display: flex; justify-content: space-between;">
        <div style="align-content: flex-start; display: flex;">
          <li class="headerlist" style="position: static; margin-top: 5px;"><a

            style="padding: 0;"><img src="./img/logo.jpg" style=" padding: 0; margin: 0; width: 60%; "></a></li>


            <form style="margin-top: 1rem;"> 

              <input class="search-hover" name=""  placeholder="search here..." type="text" style="background-image: url('./img/icons8-search-24.png'); background-repeat: no-repeat;">

            </form>

          </div>

          <div style=" align-content: flex-end;">



            <li class="headerlist"><button type="button"

              class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"

              style="background-color: transparent; border: 0; font-size: 2rem; padding: 0;padding-bottom: 0px; color: black;"

              ;="">Explore </button></li>
              <li class="headerlist" style="float: right;"><a href="#campaign" style="color: black;">Start
              a Campaign</a></li>


               <li class="headerlist"><a href="sign.html" style="color: black;">Sign
               up</a></li>
               <li class="headerlist"><a href="login.html" style="color: black;">Login</a></li>

             </div>
           </ul>
         </div>
       </div>
       <center>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" style="color: darkblue;">
        <div class="modal-dialog" role="dialog" style="display: flex; justify-content: space-between;">
          <div>
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><a href="#">Tech
                &amp; Innovation</a></h3>
                <br>
              </div>
              <div class="modal-body">
                <h4 class="modal-title" id="exampleModalLabel"><a href="audio65.php">Audio</a></h4>
                <br>
                <h4><a href="education.php">Education</a></h4>
                <br>
                <h4><a href="fashion.php">Fashion</a></h4>
                <br>
                <h4><a href="food.php">Food</a></h4>
                <br>
                <h4><a href="health.php">Health</a></h4>
              </div>
            </div>
          </div>
          <!-- SECOND DIV -->
          <div>
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><a href="#">Creative
                Works</a></h3>
                <br>
              </div>
              <div class="modal-body">
                <h4 class="modal-title" i="exeModalLabel"><a href="a65.php">Art</a></h4>
                <br>
                <h4><a href="comics.php">Comics</h4>
                <br>
                <h4><a href="film.php">Theatre</h4>
                <br>
                <h4><a href="gaming65.php">Gaming</h4>
                <br>
                <h4><a href="movie65.php">Movies</a></h4>
              </div>
            </div>
          </div>
          <!-- THIRD DIV -->
          <div>
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><a href="#">Community works</a></h3>
                <br>
              </div>
              <div class="modal-body">
                <h4 class="modal-title" id="exampleModalLabel"><a href="environment65.php">Environment</a></h4>
                <br>
                <h4><a href="culture65.php">Culture</a></h4>
                <br>
                <h4><a href="human.php">Rights</a></h4>
                <br>
                <h4><a href="dona.php">Donations</a> </h4>
                <br>
                <h4><a href="local.php">Local Works</a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </center>
<!--Kunal-->
<center>
    <div style="display: flex; justify-content: space-around; width: 80%;" >
     
      <div>
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/cul17.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/cul18.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/cul19.jpg" class="d-block w-100" alt="...">
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
      <div> <br><br><br>
            <h1>Grapes & Heroes</h1><br><br><br>
            <h4>Without the dry stone walls, there would be no Cinque Terre. #savethewalls5terre #nowallsno5terre</h4>
            <br><br>
            <p class="price"> Rs 4,80,659 </p>
           
            <div style="border-radius: 20px; width: 20%;"><button type="button" class="btn btn-default cart"><a href="perks.php">Add funds</a></button></div>
          
      </div>
    </div>
  </center><br><br>

    <hr width="2px">
   <center>
    <h2><b>Winemakers of the Cinque Terre</b></h2><br>
 
    <div style="padding: 50px;"><p><center>
<p>The Cinque Terre in northwest Italy has won the hearts of millions of travelers the world over. What very few visitors realize is that this area is much more than just five colorful villages dotting a picturesque stretch of the Italian Riviera; the true heart and heritage of this region are found on its steep hillsides in its terraced vineyards.  But these terraces⁠—and the dry stone walls that support them⁠—are crumbling.<br></p><br>
              <img src="./img/cul20.jpg"><br><br>
<p>The Cinque Terre was hit hard by incessant and intense storms in the fall of 2019.  These back-to-back weather fronts poured torrential rain on the region, saturating the land and causing the collapse of countless dry stone walls.  It will take years to repair the damage, but restoring them is imperative: these walls provide structural support to an already fragile region.</p>
        
       <img src="./img/cul21.jpg"><br><br>
        <p><b>These walls are not just a scenic feature of the landscape, they are the backbone of the Cinque Terre, keeping it erect and preventing it from washing to the sea.</b>

The responsibility of rebuilding these walls falls squarely—and weighs heavily—on the shoulders of those who work the land: its winemakers.<br></p>
 <img src="./img/cul22.jpg"><br><br>
        <p>If you look at the hills surrounding the Cinque Terre villages today you can easily see that much of the land has been abandoned.  Rather than crops, the overwhelming majority of the terraces are overgrown with Mediterranean brush, brambles and trees. <br></p>
          <img src="./img/cul23.jpg"><br><br>
        <p>Italians use the term viticoltura eroica (heroic viticulture) to describe winegrowers who work in particularly challenging conditions. This could not be more true than in the Cinque Terre where the centuries-old vineyards are rooted on narrow terraces carved out of the cliffs and steep hillsides. Working the land atop the dry stone walls, which have been pieced together like a giant artisan puzzle without the use of cement or mortar, is not for the faint of heart.<br></p>
         <img src="./img/cul24.jpg"><br><br>
        <p>Today the heroic winemakers of the Cinque Terre are the true caretakers and guardians of the land.  Their dry stone walls help to maintain balance in this incredibly vulnerable landscape and are absolutely critical to the longevity of the Cinque Terre.  <br><br>

 <b>

1. Without the wine growers, there would be no one to monitor or repair the walls.  
     2. Without the walls, there would be no Cinque Terre.</b></p>
        
        <h2><b>The Cinque Terre is a<br>
UNESCO World Heritage Site</b></h2><br><br>
 <img src="./img/cul25.jpg"><br><br>
        <p>In addition to their critical role as a support system for the region, these dry stone walls are the very thing that prompted the Cinque Terre to be named a UNESCO World Heritage Site in 1997. <br>

UNESCO declares this region:<br>

"A remarkable cultural landscape created by human endeavor over a millennium in a rugged and dramatic natural landscape.  It represents the harmonious interaction between people and nature to produce a landscape of exceptional quality."<br>

<b>It is imperative that we regard the dry stone walls and the terraces they form as an important part of the world's patrimony and that we protect and maintain them as such.</b><br><br></p>
            <h2><b>The Grapes & Heroes Campaign</b></h2><br><br>
             <img src="./img/cul26.jpg"><br><br>
        <p>Inspired by the enduring spirit of farmers in the Cinque Terre, “Grapes & Heroes” began as a photographic project that aimed to explore and document local winemakers' specific challenges, hopes and success stories. <br>

The project has evolved into this crowdfunding campaign to assist a group of Cinque Terre winemakers in their wall building quest.<br>

 
<b>
1. The goal of this crowdfunding campaign is to offset the winemakers' ongoing and ever-increasing costs associated with building and maintaining the dry stone walls. 
2. Although some public funding is available (and appreciated!) unfortunately it will never be enough.  This campaign aims to fill the gap between those funds and the actual wall building costs incurred by the winemakers. 
3. Your contribution, no matter the size, will make a difference.</b>
<br>
  <h2><b>Let's crunch some numbers</b></h2><br><br>       
        <p>Because the terraces on which the vineyards are located are narrow and steep and in such rugged and remote locations, the most cost-effective way to deliver rocks for building the walls is by helicopter.  But helicopters charge by the minute and with the clock ticking, costs soar.  It's no surprise that building and maintaining the walls is a financial burden on the Cinque Terre winemakers, who are defined as micro agricultural enterprises meaning they have equally small resources.</p><br>
        <img src="./img/cul27.png"><br><br>
  </center><br><br>
</p></center></p></div></center>

  
   
  <center>
    <footer style="background-color: black;" >
      <div style="display: flex; background-color: black; justify-content: space-around; padding-top: 50px; padding-bottom: 50px;">
      <div>
        <ul class="footer-nav" id="ult">
          <li><a href="#">Explore</a></li>
          <li><br>
          </li>
          <br>
          <li><a href="#">Fund Us</a></li>
          <li><br>
          </li>
          <br>
          <li><a href="#">GoFundMe</a></li>
        
        </ul>
      </div>
      <div>
        <ul class="footer-nav" id="ult">
          <li><a href="proper.html">About us</a></li>
          <li><br>
          </li>
          <br>
          <li><a href="#">Help and Support</a></li>
          <li><br>
          </li>
          <br>
          <li><a href="#">Contact Us</a></li>
          
        </ul>
      </div>
      <div>
        <ul class="footer-nav" id="ult">
          <li><a href="#">How It Works</a></li>
          <li><br>
          </li>
          <br>
          <li><a href="#">Fees</a></li>
          <br>
          <br>
          <li><a href="#">Enterprise</a></li>
          
        </ul>
      </div>
    </div>
         <div>
            <img src=".\img\facebook.png" width="40px" class="footico">
            <img src=".\img\instagram.png" width="40px"class="footico">
            <img class="footico" src=".\img\icons8-linkedin-40.png" width="40px">
            <img class="footico" src=".\img\twitter.png" width="40px">
            <div>P I T C H E R S &copy<br><br>
              Pouring Money For Your Dreams
            </div>
      </div>
    </footer>
  </center>

</body>
</html>

  