<?php
session_start();


?>
<!DOCTYPE html>
<html>
  <head>
   <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <title>camp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
   
  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div>
      <div>
        <ul style="height: 68px; margin: 0;">
          <li class="headerlist" style="position: static; float: left; margin-top: 5px;"><a

              style="padding: 0;" href="index.html"><img src="./img/logo.jpg" style=" padding: 0; margin: 0; width: 70%;"></a></li>
          <form style="display: inline-flex; margin-top: 1rem;"> <input class="search-hover" name=""

              placeholder="search here..." type="text"> </form>
          <li class="headerlist" style="float: right;"><a href="sign.html" style="color: black;">Sign
              up</a></li>
          <li class="headerlist" style="float: right;"><a href="login.html" style="color: black;">Login</a></li>
         <li class="headerlist" style="float: right;"><a 






             <?php 

            if($_SESSION['login']==true)
            {

              ?>

              href="perks.html"

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
    </div>
    <center>
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
                <h4>Education</h4>
                <br>
                <h4>Fashion</h4>
                <br>
                <h4>Food</h4>
                <br>
                <h4>Health</h4>
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
                <h4 class="modal-title" i="exeModalLabel"><a href="a1.html">Art</a></h4>
                <br>
                <h4>Comics</h4>
                <br>
                <h4>Theatre</h4>
                <br>
                <h4>Gaming</h4>
                <br>
                <h4>Movies</h4>
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
                <h4 class="modal-title" id="exampleModalLabel"><a href="environment.html">Environment</a></h4>
                <br>
                <h4>Culture</a></h4>
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
    </div>
    </center>
      
      <div style="margin-left: 41%;"><img src="./img/melee-icon-4.png";></div>


    <div style="display: flex; justify-content: space-around; text-align: center;">
            <div class="parent-button"> 

                    <button class="accordion">
                     <h2 style="text-align: center;"><b> D O N A T I O N   </b> </h2><br>
                     <h4 style="text-align: center;">No perks will be provided</h4><br>
                     <h5 style="text-align: center;">No Minimam Amount to be paid</h5></a>
                   </button>

                     <div class="panel">
                        <form action="donation.php" method="post">
                          <h4 style="text-align: center;">Source Of Income</h4>
                          <h5 style="text-align: center;">Business   <input type="radio" name="radio" value="Business"></h5>
                          <h5 style="text-align: center;">Political  <input type="radio" name="radio" value="Political"></h5>
                          <h5 style="text-align: center;">Savings    <input type="radio" name="radio" value="Savings"></h5><br>
                           <label for="currency">Amt to be Invested</label> <input type="number" name="num" placeholder=" Amount" style="width: 100px; border-radius: 15px;" required><br><br>
                           <label for="currency">Choose denomination </label>
                        <select name="currency" required>
                          <option >INR</option>
                          <option >USD</option>
                          <option >EUR</option>
                          <option >AUD</option>
                        </select><br>

                        <div style="display: <?php  


                             if($_SESSION['login']== TRUE)
                             {
                                   echo "block";
                             }


                             else
                             {
                              echo "none";
                             }


                          ?>">
                        <input type="submit" name="submit" value="Submit" style="margin: 5px; float: right;">
                      </div>



                       <div style="display: <?php  


                             if($_SESSION['login']== FALSE)
                             {
                                   echo "block";
                             }


                             else
                             {
                              echo "none";
                             }


                          ?>">
                        <ul class="list-inline wizard mb-0">
                        <li data-toggle="modal" data-target="#myModal2">
                        <a href="#" style="margin: 5px; float: right;">SUBMIT</a></span>
                                
                        </li>
                        </ul>
                      </div>


                        </form>
                    </div>
            </div>


            <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
<center>
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
     
      </div>
      <div class="modal-body">
        <form method="post" id="form2">
            
            <h3>Kindly Login To access.</h3>

            <br>
            


        
      </div>
      <div class="modal-footer">
        <button  class="btn btn-info" data-dismiss="modal" id="but1" name="save1">OK</button>
    </form>
      </div>
    </div>
      </center>
  </div>
</div>

            <div class="parent-button">
              <button class="accordion"> <h2 style="text-align: center;"><b> P E R K S  </b> </h2><br>
               <h4 style="text-align: center;">Perks will be provided</h4><br>
               <h5 style="text-align: center;">Minimam 5% to be paid</h5></a></button>
               
               <div class="panel">
                        <form action="reward.php" method="post">
                          <h4 style="text-align: center;">Source Of Income</h4>
                          <h5 style="text-align: center;">Business   <input type="radio" name="radio" value="Business"></h5>
                          <h5 style="text-align: center;">Political  <input type="radio" name="radio" value="Political"></h5>
                          <h5 style="text-align: center;">Savings    <input type="radio" name="radio" value="Savings"></h5><br>
                           <label for="currency">Amt to be Invested</label> <input type="number" name="num" placeholder=" Amount" style="width: 100px; border-radius: 15px;" required><br><br>
                           <label for="currency">Choose denomination </label>
                        <select name="currency" required>
                          <option >INR</option>
                          <option >USD</option>
                          <option >EUR</option>
                          <option >AUD</option>
                        </select><br>

                        <div style="display: <?php  


                             if($_SESSION['login']== TRUE)
                             {
                                   echo "block";
                             }


                             else
                             {
                              echo "none";
                             }


                          ?>">
                        <input type="submit" name="submit" value="Submit" style="margin: 5px; float: right;">
                      </div>



                       <div style="display: <?php  


                             if($_SESSION['login']== FALSE)
                             {
                                   echo "block";
                             }


                             else
                             {
                              echo "none";
                             }


                          ?>">
                        <ul class="list-inline wizard mb-0">
                        <li data-toggle="modal" data-target="#myModal2">
                        <a href="#" style="margin: 5px; float: right;">SUBMIT</a></span>
                                
                        </li>
                        </ul>
                      </div>


                        </form>
                    </div>
            </div>


            <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
<center>
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
     
      </div>
      <div class="modal-body">
        <form method="post" id="form2">
            
            <h3>Kindly Login To access.</h3>

            <br>
            


        
      </div>
      <div class="modal-footer">
        <button  class="btn btn-info" data-dismiss="modal" id="but1" name="save1">OK</button>
    </form></div></form></div></div></center></div></div></form></div>
   
    <div style="display: flex; justify-content: space-around; text-align: center;">
            <div class="parent-button"> 
              <button class="accordion">
               <h2 style="text-align: center;"><b> R E T U R N S </b> </h2><br>
               <h4 style="text-align: center;">No perks will be provided</h4><br>
               <h5 style="text-align: center;">Minimam 6% to be paid</h5></a>
             </button>
                 <div class="panel">
                         <form action="returns.php" method="post">
                          <h4 style="text-align: center;">Source Of Income</h4>
                          <h5 style="text-align: center;">Business   <input type="radio" name="radio" value="Business"></h5>
                          <h5 style="text-align: center;">Political  <input type="radio" name="radio" value="Political"></h5>
                          <h5 style="text-align: center;">Savings    <input type="radio" name="radio" value="Savings"></h5><br>
                           <label for="currency">Amt to be Invested</label> <input type="number" name="num" placeholder=" Amount" style="width: 100px; border-radius: 15px;" required><br><br>
                           <label for="currency">Choose denomination </label>
                        <select name="currency" required>
                          <option >INR</option>
                          <option >USD</option>
                          <option >EUR</option>
                          <option >AUD</option>
                        </select><br>


                        <div style="display: <?php  


                             if($_SESSION['login']== TRUE)
                             {
                                   echo "block";
                             }


                             else
                             {
                              echo "none";
                             }


                          ?>">
                        <input type="submit" name="submit" value="Submit" style="margin: 5px; float: right;">
                      </div>



                       <div style="display: <?php  


                             if($_SESSION['login']== FALSE)
                             {
                                   echo "block";
                             }


                             else
                             {
                              echo "none";
                             }


                          ?>">
                        <ul class="list-inline wizard mb-0">
                        <li data-toggle="modal" data-target="#myModal2">
                        <a href="#" style="margin: 5px; float: right;">SUBMIT</a></span>
                                
                        </li>
                        </ul>
                      </div>


                        </form>
                    </div>
            </div>


            <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
<center>
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
     
      </div>
      <div class="modal-body">
        <form method="post" id="form2">
            
            <h3>Kindly Login To access.</h3>

            <br>
            


        
      </div>
      <div class="modal-footer">
        <button  class="btn btn-info" data-dismiss="modal" id="but1" name="save1">OK</button>
    </form></div></form></div>
                    </div>
            </div>
            <div class="parent-button">
              <button class="accordion"> <h2 style="text-align: center;"><b> P E R K S  + R E T U R N S   </b> </h2><br>
               <h4 style="text-align: center;">Perks and Returns both will be provided</h4><br>
               <h5 style="text-align: center;">Minimam 8% to be paid</h5></a></button>
               
                <div class="panel">
                       <form action="both.php" method="post">
                          <h4 style="text-align: center;">Source Of Income</h4>
                          <h5 style="text-align: center;">Business   <input type="radio" name="radio" value="Business"></h5>
                          <h5 style="text-align: center;">Political  <input type="radio" name="radio" value="Political"></h5>
                          <h5 style="text-align: center;">Savings    <input type="radio" name="radio" value="Savings"></h5><br>
                           <label for="currency">Amt to be Invested</label> <input type="number" name="num" placeholder=" Amount" style="width: 100px; border-radius: 15px;" required><br><br>
                           <label for="currency">Choose denomination </label>
                        <select name="currency" required>
                          <option >INR</option>
                          <option >USD</option>
                          <option >EUR</option>
                          <option >AUD</option>
                        </select><br>


                        <div style="display: <?php  


                             if($_SESSION['login']== TRUE)
                             {
                                   echo "block";
                             }


                             else
                             {
                              echo "none";
                             }


                          ?>">
                        <input type="submit" name="submit" value="Submit" style="margin: 5px; float: right;">
                      </div>



                       <div style="display: <?php  


                             if($_SESSION['login']== FALSE)
                             {
                                   echo "block";
                             }


                             else
                             {
                              echo "none";
                             }


                          ?>">
                        <ul class="list-inline wizard mb-0">
                        <li data-toggle="modal" data-target="#myModal2">
                        <a href="#" style="margin: 5px; float: right;">SUBMIT</a></span>
                                
                        </li>
                        </ul>
                      </div>


                        </form>
                    </div>
            </div>


            <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
<center>
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
     
      </div>
      <div class="modal-body">
        <form method="post" id="form2">
            
            <h3>Kindly Login To access.</h3>

            <br>
            


        
      </div>
      <div class="modal-footer">
        <button  class="btn btn-info" data-dismiss="modal" id="but1" name="save1">OK</button>
    </form></div></form></div></div>
                    </div>
            </div>
   </div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

  <center>
    <footer style="background-color: black;" >
      <div style="display: flex; background-color: black; justify-content: space-around; padding-top: 40px; padding-bottom: 40px;">
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
