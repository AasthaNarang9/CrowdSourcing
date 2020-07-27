<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
   <meta http-equiv="content-type" content="text/html; charset=windows-1252">
   
    
    <title>humanrights6</title>
    <link rel="stylesheet" type="text/css" href="index.css">
   
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="http://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
        <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  </head>
  <body>
    <div>
      <div>
        <ul style="height: 68px; margin: 0;">
          <li class="headerlist" style="position: static; float: left; margin-top: 5px;"><a

              style="padding: 0;"><img src="./img/logo.jpg" style=" padding: 0; margin: 0; width: 70%; margin-top: 1rem;"></a></li>
          <form style="display: inline-flex;"> <input class="search-hover" name=""

              placeholder="search here..." type="text"> </form>
          <li class="headerlist" style="float: right;"><a href="sign.html" style="color: black;">Sign
              up</a></li>
          <li class="headerlist" style="float: right;"><a href="login.html" style="color: black;">Login</a></li>
         <li class="headerlist" style="float: right;"><a 






             <?php 

            if($_SESSION['login']==true)
            {

              ?>

              href="start.html"

              <?php 
              }
              ?>



              <?php  

              if($_SESSION['login']==false)

              {

               ?>

               href="login.html";
               

               <?php
                }
               ?>


           style="color: black;">Start
              a Campaign</a></li>
          <li class="headerlist" style="float: right;"><a> <button type="button"

                class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"

                style="background-color: transparent; border: 0; font-size: 2rem; padding: 0; color: black;"

                ;="">Explore </button> </a></li>
        </ul>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel"

        aria-hidden="true" style="color: darkblue;">
        <div class="modal-dialog" role="dialog" style="display: flex; justify-content: space-around;">
          <div>
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><a href="tech.html">Tech
                    &amp; Innovation</a></h3>
                <br>
              </div>
              <div class="modal-body">
                <h4 class="modal-title" id="exampleModalLabel"><a href="audio.html">Audio</a></h4>
                <br>
                <h4><a href="education.html">Education</a></h4>
                <br>
                <h4><a href="fashion.html">Fashion</a></h4>
                <br>
                <h4><a href="food.html">Food</a></h4>
                <br>
                <h4><a href="health.html">Health</a></h4>
              </div>
            </div>
          </div>
          <!-- SECOND DIV -->
          <div>
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><a href="creativeworks.html">Creative
                    Works</a></h3>
                <br>
              </div>
              <div class="modal-body">
                <h4 class="modal-title" i="exeModalLabel"><a href="art\art.html">Art</a></h4>
                <br>
                <h4><a href="comics.html">Comics</a></h4>
                <br>
                <h4><a href="film.html">Theatre</a></h4>
                <br>
                <h4><a href="gaming.html">Gaming</a></h4>
                <br>
                <h4><a href="movies.html">Movies</a></h4>
              </div>
            </div>
          </div>
          <!-- THIRD DIV -->
          <div>
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Community works</h3>
                <br>
              </div>
              <div class="modal-body">
                <h4 class="modal-title" id="exampleModalLabel">Culture</h4>
                <br>
                <h4><a href="environment.html">Environment</a></h4>
                <br>
                <h4>Human Rights</h4>
                <br>
                <h4>Donations</h4>
                <br>
                <h4>Local Business</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--Kunal-->
<center>
    <div style="display: flex; justify-content: space-around; width: 80%;" >
     
      <div>
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/hr55.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/hr56.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/hr57.jpg" class="d-block w-100" alt="...">
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
            <h1>Feed hungry children in Hajjah province of Yemen</h1><br><br><br>
            <h4>Around 2.9 million women and children are acutely malnourished in Yemen..</h4>
            <br><br>
            <p class="price"> Rs 51,57,994</p>
           
            <div style="border-radius: 20px; width: 20%;"><button type="button" class="btn btn-default cart">Add funds</button></div>
          
      </div>
    </div>
  </center><br><br>

    <hr width="2px">
   <center>
       <img src="./img/hr58.PNG"><br>
         <img src="./img/hr59.PNG"><br>
        
         <img src="./img/hr60.png"><br>
         <img src="./img/hr61.png"><br>
    
       <img src="./img/hr63.png"><br>
 
       <img src="./img/hr64.png"><br>
    <img src="./img/hr65.png"><br>
  <img src="./img/hr66.png"><br>
       <img src="./img/hr67.png"><br>
              <img src="./img/hr68.PNG"><br>
              <img src="./img/hr69.PNG"><br>
  </center><br><br>


  
   

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
