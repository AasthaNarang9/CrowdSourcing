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
              <img src="./img/cul12.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/cul16.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/cul14.png" class="d-block w-100" alt="...">
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
            <h1>European Poetry Slam Championship 2019-2020</h1><br><br><br>
            <h4>We're organizing the European poetry slam championship and we need help covering traveling expenses</h4>
            <br><br>
            <p class="price"> Rs 2,25,297 </p>
           
            <div style="border-radius: 20px; width: 20%;"><button type="button" class="btn btn-default cart"><a href="perks.php">Add funds</a></button></div>
          
      </div>
    </div>
  </center><br><br>

    <hr width="2px">
   <center>
    <h3><b>Slam with us!</b></h3><br><br>
 
    <div style="padding: 50px;"><p><center><br>
<p>Hi! Do you know what Poetry Slam is?
If you're here, you probably already know, or you know someone who knows it, so we won't bother you with details about this art form (if you're new to it, go and enjoy it on youtube, you won't regret it!).<br>

We are LIPS, the italian poetry slam league, and we're hosting this year's european championship finals in Milan. The event will take place on march 19-20-21, it will be hosted in a marvelous venue (BASE Milano is a huge and lovely area where concerts, theater, exibitions, book-fairs and other kinds of events fit perfectly) and we're planning to have an entire week of gigs and performances.<br>

For the first time ever, the championship will see 30 poets from all around Europe compete for the title, and a lot of italian volunteers are already working in order to make this experience extraordinary for everyone involved.</p><br>
<br>
       

      <h3><b>We're creating a book</b></h3>
<p>In order to raise the money we need to cover travelling and extra expenses, we wanted to give something unforgettable and enjoyable in return. So we thought about a book (but if you prefer a t-shirt or you need a tote bag, we have you covered).</p>
        
       <img src="./img/cul12.jpg"><br><br>
        <p>The book will contain the best poem (in english and italian) from every slammer participating in the competition, it will have a literary compendium about languages and translations, but the real killing feature is that Martina Dirce Carcano (MDC Illustration) will illustrate the introduction page for every poet, giving an artistic touch to the anthology.<br>

We want to make everyone feel our warm italian welcome, so we'll donate to each participant a bag with her or his copy of the book. You can have it too by contributing to the campaign. Feel free to chose among perks and spread the word if you think you know somebody who could be interested (or just do it in order to be sure that your favourite slammer won't have to WALK to Italy). </p>
<br>
        <h3>Come to see the event!</h3>
        <p>The best way to enjoy a poetry slam is to participate live, so feel free to go on our site and find all the details about the events, we'll be happy to hug you!<br>

We're planning to have a lot of side events, workshops, live shows, open mics, and so on, so, if you're a poet and you want to be part of this community, make sure not to miss this opportunity. But if you can't make it to Italy, have yourself a wonderful book that gathers all the best poems, from the best poets.<br></p>
          <img src="./img/cul15.jpg"><br><br>
        <h3>Risks & Challenges</h3>
        <p>We're trying to plan everything, in order not to face unexpected expenses, but the organization of events of this size and proportions could be problematic, we just want to be sure to give everyone the best experience possible.<br>

We're a team of 50 volunteers (and counting) that will take care of every aspect of the event, the production of the book and every little thing that concerns this special occasion.

</p>
        <h3>Support words with words</h3>
        <p>If you can't support us here, first of all try to come and enjoy the championship with us, but be sure to spread the word of this campaign, in order to help us reach our goal.<br>

<b>Thank you so much for your attention and slam on!</b></p>
  </center><br><br>
</p></div></center></div>

  
   

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

  