<?php 

session_start();



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
       <ul style="height: 68px; margin: 0;">

        <li class="headerlist" style="position: static; float: left; margin-top: 5px;"><a

          style="padding: 0;"><img src="./img/logo.jpg" style=" padding: 0; margin: 0; width: 70%;"></a></li>
          <form style="display: inline-flex; margin-top: 1rem;"> <input class="search-hover" name=""

            placeholder="search here..." type="text" style="background-image: url('./img/icons8-search-24.png'); background-repeat: no-repeat;"> </form>
            <li class="headerlist" style="float: right;"><a href="index.php?status=loggedout" style="color: black;"><img src="./img/user.png" style="width: 65%; "></a></li>
            
            <li class="headerlist" style="float: right;"><a href="start.html" style="color: black;">Start
            a Campaign</a></li>
           
            <li class="headerlist" style="float: right;"><a> <button type="button"

              class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"

              style="background-color: transparent; border: 0; font-size: 2rem; padding: 0; color: black;">Explore </button> </a></li>
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

  <div>
  <div class="slideshow-container " style="z-index: -1000;">
    <div class="mySlides w3-animate-right">
      <div class="numbertext">1 / 3</div>
      <img src="./img/small-business-culture-growth.jpg" style="width:100%">
    </div>
    <div class="mySlides w3-animate-right">
      <div class="numbertext">2 / 3</div>
      <img src="./img/hero-justin-large-20190225.jpg" style="width:100%">
    </div>
    <div class="mySlides w3-animate-right">
      <div class="numbertext">3 / 3</div>
      <img src="./img/hero-jenesis-large-20190213.jpg" style="width:100%">
      <div class="text">
        <h1>Fundraising for the people<br> and causes you care about</h1>
      </div>
    </div>
  </div>
</div>
<br>
<div style="text-align:center"> <span class="dot"></span> <span class="dot"></span>
  <span class="dot"></span> </div>
  <br>
  <br>
  <div style="display: flex; justify-content: space-around;">
    <div class="row" style="width: 25%;">
      <div style="background-color:# bbb; width: 100%;padding: 0;">
        <center>

          <ul id="myMenu" style="background-color: transparent; padding-left: 0px;">
            <div><h2>F I L T E R</h2></div>
            <li class="Menuclass" style="padding-top: 10px; padding-bottom: 10px;"><a style="padding: 0;" href="tech.html" class="sidemenulink">
              <h3>Tech &amp; Innovation</h3>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="audio.html" class="sidemenulink">
              <h4>Audio</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="education.html" class="sidemenulink">
              <h4>Education</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#" class="sidemenulink">
              <h4>Fashion</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#" class="sidemenulink">
              <h4>Food &amp; Beverages</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#" class="sidemenulink">
              <h4>Health &amp; Fitness</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 10px; padding-bottom: 10px;"><a style="padding: 0;" href="creativeworks.html" class="sidemenulink">
              <h3>Creative Works</h3>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="a1.html" class="sidemenulink">
              <h4>Art</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#" class="sidemenulink">
              <h4>Comics</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#" class="sidemenulink">
              <h4>Theatre</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#" class="sidemenulink">
              <h4>Gaming</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#" class="sidemenulink">
              <h4>Movies &amp; Shows</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 10px; padding-bottom: 10px;"><a style="padding: 0;" href="#" class="sidemenulink">
              <h3>Community Works</h3>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#" class="sidemenulink">
              <h4>Culture</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="environment.html" class="sidemenulink">
              <h4>Environment</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#" class="sidemenulink">
              <h4>Human Rights</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#" class="sidemenulink">
              <h4>Donation</h4>
            </a></li>
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#" class="sidemenulink">
              <h4>Local Business</h4>
            </a></li>
          </ul>
        </center>
      </div>
    </div>

   <div style="width: 80%;">

        <div style="text-align: center;"><b><h3>P O P U L A R &nbsp;&nbsp;&nbsp;P R O J E C T S</b></h3></div><br><br>
        <div style="display: flex; justify-content: space-around; border-radius: 10px; ">

          <div class="con">
            <img src="./img/idk.png" class="image">
            <div class="overlay">
              <div class="text"><h2>Park & Diamond: Foldable Bike Helmet</h2><br>
                Created by ex-SpaceX engineers. Looks & feels like a baseball cap. Safe as a traditional helmet.<br><br>
                <p><button class="w3-button w3-black w3-round" style=".w3-btn {width:150px;};  font-size: 12px; text-decoration: underline;"><a href="top1.html" style="color: white;">View Details</button></p></a></div>
              </div>
            </div>
            <div class="con">
              <img src="./img/output (3).png" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text"><h2>Skatebolt Breeze II - Start of Your Eboarding Life</h2><br>
                  Get calm, creative and courageous with Wakes music for every mood & moment.
                  <p><button class="w3-button w3-black w3-round" style=".w3-btn {width:150px;};  font-size: 12px; text-decoration: underline;"><a href="top2.html" style="color: white;">View Details</button></p></a>

                </div>
              </div>
            </div>

            <div class="con">
              <img src="./img/idk3.png" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text"><h2>Jurni: Carry on Suitcase</h2><br>
                  A thrilling new play by Stephanie Garrison, dir by Megan Kosmoski coming to New Orleans May 2020.<br>
                  <button class="w3-button w3-black w3-round" style=".w3-btn {width:150px;};  font-size: 12px; text-decoration: underline;"><br><br><a href="top3.html" style="color: white;">View Details</button></a></button>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>
            <br>




            <div style="display: flex; justify-content: space-around; border-radius: 10px; ">
              <div class="con">
                <img src="./img/ind15.png" class="image">
                <div class="overlay">
                  <div class="text"><h2>Potato Pirates: The Tastiest Coding Card Game</h2><br>
                    Potatoes, Programming And Piracy Rolled Into A Strategic Card Game<br><br>
                    <p><button class="w3-button w3-black w3-round" style=".w3-btn {width:150px;};  font-size: 12px; text-decoration: underline;"><a href="top4.html" style="color: white;">View Details</button></p></a>

                  </div>
                </div>
              </div>
              <div class="con">
                <img src="./img/ind9.png" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text"><h2>Bay 2 Border Bike for Testicular Cancer Awareness</h2><br>
                  Cancer survivor and partner bike from San Francisco to Mexico for disease awareness/prevention<br><br>
                   <p><button class="w3-button w3-black w3-round" style=".w3-btn {width:150px;};  font-size: 12px; text-decoration: underline;"><a href="top5.html" style="color: white;">View Details</button></p></a>
                  </div>
                </div>
              </div>

              <div class="con">
                <img src="./img/ind12.png" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text"><h2>CIGA Design Z-Series Mechanical Titanium Watch</h2><br>
                  Designed to highlight real men love of complexity with outstanding design and superb performance<br><br>
                  <p><button class="w3-button w3-black w3-round" style=".w3-btn {width:150px;};  font-size: 12px; text-decoration: underline;"><a href="fashion1.html" style="color: white;">View Details</button></p></a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>






      





      <center>
        <h2 id="head">Top Investors</h2>
        <br>
        <div style="display: flex; justify-content: space-around;">
          <div><img src="./img/416x416.jpg" id="invest" style="width: 220px; height: auto;"><b><h4>Mukesh Ambani</b></h4></div>
          <div> <img src="./img/images%20%282%29.jpg" id="invest"><b><h4>Bill Gates</b></h4></div>
          <div> <img src="./img/M-FEJMZ0_400x400.jpg" id="invest" style="width: 230px; height: auto;"><b><h4>Sunder Pichai</b></h4></div>
        </div>
      </center>
      <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 5 seconds
    }
  </script>
  <script type="text/javascript">
   function popup() {
    alert("You Have to login First");
  }
</script>


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
