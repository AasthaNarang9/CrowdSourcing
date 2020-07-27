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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
         <li class="headerlist" style="position: static; margin-bottom: 10px;"><a

            style="padding: 0;"><a href="index.php"><img src="./img/logo.jpg" style=" padding: 0; margin: 0; width: 60%;  "></a></a></li>
            <form style="margin-top: 1rem;"> 

              <input class="search-hover" name=""  placeholder="search here..." type="text" style="background-image: url('./img/icons8-search-24.png'); background-repeat: no-repeat;">

            </form>

          </div>

          <div style=" align-content: flex-end;">



            <li class="headerlist"><button type="button"

              class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"

              style="background-color: transparent; border: 0; font-size: 2rem; padding: 0;padding-bottom: 0px; color: black;"

              ;="">Explore </button></li>
              <li class="headerlist"><a 



                <?php 

                if($_SESSION['login']==true)
                {

                  ?>

                  href="start1.php"

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





               > <button type="button"

               style="background-color: transparent; border: 0; font-size: 2rem; padding: 0;margin: 0; color: black;">Start a Campaign </button> </a></li>


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

    <div>
      <div class="slideshow-container " style="z-index: -1000; width: 100%;">
        <div class="mySlides w3-animate-right">
          <div class="numbertext">1 / 3</div>
          <img src="./img/hell.jpg" style="width:100%;" height="100%;">
        </div>
        <div class="mySlides w3-animate-right">
          <div class="numbertext">2 / 3</div>
          <img src="./img/hell4.jpg" style="width:100%; height: 100%;">
        </div>
        <div class="mySlides w3-animate-right">
          <div class="numbertext">3 / 3</div>
          <img src="./img/hel3.png" style="width:100%; height: 100%;">
         
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
              <li class="Menuclass"><h2>M E N U</h2></li>
              <li class="Menuclass" style="padding-top: 10px; padding-bottom: 10px;"><a style="padding: 0;" href="tech.html">
                  <h3>Tech &amp; Innovation</h3>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="audio.html">
                  <h4>Audio</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="education.html">
                  <h4>Education</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#">
                  <h4>Fashion</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#">
                  <h4>Food &amp; Beverages</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#">
                  <h4>Health &amp; Fitness</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 10px; padding-bottom: 10px;"><a style="padding: 0;" href="creativeworks.html">
                  <h3>Creative Works</h3>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="art.html">
                  <h4>Art</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="comics.html">
                  <h4>Comics</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="film.html">
                  <h4>Theatre</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="gaming.html">
                  <h4>Gaming</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="movies.html">
                  <h4>Movies &amp; Shows</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 10px; padding-bottom: 10px;"><a style="padding: 0;" href="#">
                  <h3>Community Works</h3>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#">
                  <h4>Culture</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#">
                  <h4>Environment</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#">
                  <h4>Human Rights</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#">
                  <h4>Donation</h4>
                </a></li>
              <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="#">
                  <h4>Local Business</h4>
                </a></li>
            </ul>
          </center>
        </div>
      </div>
      <div style="width: 80%;">
      <div style="display: flex; justify-content: space-around; border-radius: 10px; padding-bottom: 30px; ">
     

         <div class="card" style="width: 30%; padding-bottom: 30px;">
            <img src=".\img\health1.jpeg"style="width:100% ">
            <h2>LUFT Cube - Portable, Filterless Air Purifier</h2>
            <p class="price">Rs.19,811,484</p>
            <p>LUFT Cube filterless SPP nanotech neutralizes pollutants, viruses and bacteria around you.</p>
            <form action="health1.html">
                <button type="submit"><a href="health1.html">VIEW DETAILS</a></button>
            </form>
        </div>
            <div class="card" style="width: 30%;padding-bottom: 30px;" >
            <img src=".\img\health2.jpeg" style="width:100%">
            <h2>Graff Golf: The World’s First Smart Golf Ball</h2>
            <p class="price">Rs.10,811,484</p>
            <p>A smart golf ball + analytics platform that tracks your ball and analyzes your unique shot data.</p>
            <form action="health2.html">
              <button type="submit">VIEW DETAILS</button>
            </form>
          </div>


        <div class="card" style="width: 30%; padding-bottom: 30px;" >
            <img src=".\img\health3.jpeg" style="width:100%">
            <h2>Kailo - The Future of Pain Relief</h2>
            <p class="price">Rs.12,811,484</p>
            <p>Nanotech bio-antenna that interacts with electrical signals in your body, naturally relieving pain.</p><br><br>
            <form action="health3.html">
              <button type="submit">VIEW DETAILS</button>
            </form>
        </div>
    </div>

    <div style="display: flex; justify-content: space-around; border-radius: 10px;">
        <div class="card" style="width: 30%; padding-bottom: 30px;" >
          <img src=".\img\health4.jpeg"style="width:100%">
          <h2>Spring is Here: The Smart Rolling Walker</h2>
          <p class="price">34,841,484</p>
          <p>Stand tall. Reclaim your seat at the table. www.foraydesign.com</p><br><br>
         <form action="health4.html">
            <button type="submit">VIEW DETAILS</button>
          </form>
        </div>

           <div class="card" style="width: 29%; padding-bottom: 30px;" >
  <img src=".\img\health5.jpeg"style="width:100%">
  <h2>MONKII 360: Efficient Fitness Device</h2>
  <p class="price">4,841,484</p>
  <p>The science-backed, dynamic resistance trainer that makes you strong and saves you time.
</p><br>
 <form action="health5.html">
 <button type="submit">VIEW DETAILS</button>
    </form>
</div>

           <div class="card" style="width: 30%; padding-bottom: 30px;" >
  <img src=".\img\health6.jpeg"style="width:100%">
  <h2>Accusage Thermo 7 in 1 Hot & Cold Massage Wrap</h2>
  <p class="price">4,841,484</p>
  <p>Cordless Smart Compression Wrap for Immediate Relief</p><br><br>
 <form action="health6.html">
 <button type="submit">VIEW DETAILS</button>
    </form>
</div>
</div>
    
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
    <script>
    function myFunction() {
      var input, filter, ul, li, a, i;
      input = document.getElementById("mySearch");
      filter = input.value.toUpperCase();
      ul = document.getElementById("myMenu");
      li = ul.getElementsByTagName("li");
      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    }
  </script>
</div>
</div>
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
