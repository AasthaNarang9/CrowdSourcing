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
      <div class="slideshow-container " style="z-index: -1000;">
        <div class="mySlides w3-animate-right">
          <div class="numbertext">1 / 3</div>
          <img src="./img/cul1.png" style="width: 100%">
        </div>
        <div class="mySlides w3-animate-right">
          <div class="numbertext">2 / 3</div>
          <img src="./img/cul5.jpg" style="width: 100%">
        </div>
        <div class="mySlides w3-animate-right">
          <div class="numbertext">3 / 3</div>
          <img src="./img/cul3.png" style="width:100%">
          <div class="text">
         
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
            <li class="Menuclass" style="padding-top: 5px; padding-bottom: 5px;"><a style="padding: 0;" href="audio.php" class="sidemenulink">
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
      <div style="display: flex; justify-content: space-around; border-radius: 10px; padding-bottom: 30px; ">
          <div class="card" style="width: 30%;padding-bottom: 30px;" >
            <img src=".\img\cul6.jpg" style="width:100%">
            <h1>European Poetry Championship </h1>
            <p class="price">Rs. 11,800,484</p>
            <p>We're organizing the European poetry slam championship and we need help covering traveling expenses</p>
            <form action="culture165.php">
              <button type="submit">VIEW DETAILS</button>
            </form>
          </div>

         <div class="card" style="width: 30%; padding-bottom: 30px;">
            <img src=".\img\cul7.jpg"style="width:100% ">
            <h1>Grapes & Heroes</h1>
            <p class="price">Rs.3,57,129</p>
            <p>Without the dry stone walls, there would be no Cinque Terre. #savethewalls5terre #nowallsno5terre
</p><br><br>
            <form action="culture265.php">
                <button type="submit">VIEW DETAILS</button>
            </form>
        </div>

        <div class="card" style="width: 30%; padding-bottom: 30px;" >
            <img src=".\img\cul8.jpg" style="width:100%">
            <h1>Save College of Wizardry!</h1>
            <p class="price">Rs.77,15,453</p>
            <p>We need your help to preserve the College of Wizardry and run the cancelled 2019 events!</p><br><br><br><br><br><br><br>
            <form action="culture365.php">
              <button type="submit">VIEW DETAILS</button>
            </form>
        </div>
    </div>

    <div style="display: flex; justify-content: space-around; border-radius: 10px;">
        <div class="card" style="width: 30%; padding-bottom: 30px;" >
          <img src=".\img\cul9.jpg"style="width:100%">
          <h1>XX3 Jazz Fest Sarajevo 2019</h1>
          <p class="price">Rs.1,323,940</p>
          <p>After 22 years, we need your help to co-fund the XX3rd international music festival in Sarajevo.</p><br><br><br><br>
         <form action="culture465.php">
            <button type="submit">VIEW DETAILS</button>
          </form>
        </div>

           <div class="card" style="width: 29%; padding-bottom: 30px;" >
  <img src=".\img\cul10.jpg"style="width:100%">
  <h1>Join the #REDvolution in India</h1>
  <p class="price">Rs.50,354</p>
  <p>Weave the change you want to see in the world, to unlearn stereotypes about female body</p>
 <form action="culture565.php">
 <button type="submit">VIEW DETAILS</button>
    </form>
</div>

           <div class="card" style="width: 30%; padding-bottom: 30px;" >
  <img src=".\img\cul11.jpg"style="width:100%">
  <h1>Ruckus Retreat 2019 - STRETCH GOAL </h1>
  <p class="price">Rs.4,75,653 </p>
  <p>Interactive and community-based creative retreat in the heart of the countryside</p><br>
 <form action="culture665.php">
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

  