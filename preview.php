<?php
session_start();
$servername = "localhost";
$dbname = "dbms";
$name="root";
$pass="";

// Create connection
$conn = mysqli_connect($servername,$name,$pass,$dbname);
// Check connect

if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}

if(isset($_GET['pname']))
{
  $uname=$_GET['pname'];
}

$sql="Select * from basic where name='".$uname."'";

$result=$conn->query($sql);

if($result->num_rows == 1)
{
  while($row =$result->fetch_assoc())
  {
    $tag=$row['tag'];
    $tvalue=$row['tvalue'];
    $description=$row['message'];
    $img1= $row['img1'];
    $img2= $row['img2'];
    $img3= $row['img3'];

  }
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=windows-1252">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

 <title>PREVIEW</title>
 <link rel="stylesheet" type="text/css" href="index.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  ></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"  ></script>
 <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  <div>
    <div>
      <ul style="height: 68px; margin: 0;">
        <li class="headerlist" style="position: static; float: left; margin-top: 5px;"><a

          style="padding: 0;" href="index.html"><img src="./img/logo.jpg" style=" padding: 0; margin: 0; width: 70%;"></a></li>
          <form style="display: inline-flex; margin-top: 1rem;"> <input class="search-hover" name=""

            placeholder="search here..." type="text"> </form>
            
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
<center>
  <div style="display: flex; justify-content: space-around; width: 80%;" >

    <div>
      <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">

              <img  src="<?php echo $img1;?>" class=" d-block w-100 " alt="...">
              
            </div>
            <div class="carousel-item">
             <img  src="<?php echo $img2;?>" class=" d-block w-100 " alt="...">
           </div>
           <div class="carousel-item">
            <img  src="<?php echo $img3;?>" class=" d-block w-100 " alt="...">
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
    <h1><?php echo $uname;?></h1><br><br><h3><?php echo $tag;?></h3>
    <br><br>
    <p class="price" style="text-align: center;"><h4><?php echo $tvalue;?></h4></p>
    
    <div style="border-radius: 20px; width: 20%; margin-right: 50%;"><button type="button" class="btn btn-default cart">Add funds</button></div><br><br>
     </div>
</div>
 <p><h4 style="padding-right:10%; padding-left: 10%;"><?php echo $description;?></h4></p><br>
 <h3 style="font-family: 'Comic Sans MS', cursive, sans-serif; text-align: center;  margin-left: 60%;" ><a href="rules.html">Continue To Complete the Process </a></h3>
</center>





