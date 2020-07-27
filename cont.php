<?php

$result=$_GET['type'];
$item=$_GET['amt'];
$pf_charge=0;
$percent=0;
if($result=="d")
{

 $total=$item;


}
else if($result=="p")
{
 $percent=5;
 $pf_charge= (5/100) * $item;
 $total = $item + $pf_charge;
}
else if($result=="r")
{
 $percent=6;
 $pf_charge= (6/100) * $item;
 $total = $item + $pf_charge;
}
else if($result=="pr")
{
 $percent=8;
 $pf_charge= (8/100) * $item;
 $total = $item + $pf_charge;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>payment</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">

  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

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

          style="padding: 0;" href="index.html" ><img src="./img/logo.jpg" style=" padding: 0; margin: 0; width: 70%;"></a></li>
        </ul>

      </div>
    </div>
    <center>


      <div style="display: flex; padding-right: 10%;padding-left: 10%; background-color: #E6E6E6 ; justify-content: space-around; ">
       <div class="container-contact100" style="width: 60%;padding-right: 0px;" >
        <div style="display: flex; justify-content: space-around;">
          <div class="wrap-contact100" style=" width: 100%; height: 100%;">

            <span class="contact100-form-title">
              Payment Details
            </span> 


            <!-- <div style="display: flex; justify-content: space-around; text-align: center;"> -->
              <div class="parent-button" style="width: 100%;"> 
                <button class="accordion" style="display: flex; padding: 2%; width: 100%; justify-content: space-between;">
                 <div style="float: left; width: 50%; font-size: 90%;"><b>DEBIT/ CREDIT CARD</b></div>
                 <div style="float: right;"><img src="./img/cards.png" style="width: 30%; float: right; margin-top:2%; "></div>
               </button>
               <div class="panel">
                 <form  action="final.html">

                   <h5 style="text-align: center;">Name on Card 
                   &nbsp;&nbsp;&nbsp;<input type="text" name="name"
                   placeholder="  CARDHOLDER NAME"  class="adjust"
                   required></h5><br> <h5 style="text-align: center;">Card
                   Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number"
                   id="number" name="num" placeholder="  CARD NUMBER" 
                   class="adjust" required></h5><br> <h5 style="text-align:
                   center;">Expiry Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
                   type="date" id="date" name="date" placeholder="  EXPIRY
                   DATE"  class="adjust" required></h5><br> <input
                   type="submit" name="submit" value="Submit" style="margin:
                   20px; float: right; background-color:black; color:white;
                   border-radius: 10px; width: 10%; height: 5%">


                 </form>
               </div>
             </div>

             <div class="parent-button" style="width: 100%;"> 
              <button class="accordion" style="display: flex; padding: 2%; width: 100%; justify-content: space-between;">
               <div style="float: left; width: 50%; font-size: 90%;"><b>UPI Fund Transfer</b></div>
               <div style="float: right;"><img src="./img/upi1.png" style="width: 30%; float: right; margin-top:2%; "></div>
             </button>
             <div class="panel">
               <form  action="final.html" onsubmit="return Validate(this);">
                <h5 style="text-align: center;">UPI ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="upi" name="upi" placeholder="  xxxxxxxx@okaxis"  class="adjust" required></h5><br>
                <h5 style="text-align: center;">GPAY  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="gpay" name="gpay" placeholder="  GPAY Number"  class="adjust" required></h5><br>
                <h5 style="text-align: center;">PAYTM&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="paytm" name="paytm" placeholder="  PAYTM Number"  class="adjust" required></h5><br>
                <h5 style="text-align: center;">PAY PAL&nbsp;&nbsp;&nbsp;<input type="text" id="pay" name="pay" placeholder="  PAY PAL Number"  class="adjust" required></h5><br>
                <input type="submit" name="submit" value="Submit" style="margin: 20px; float: right; background-color:black; color:white; border-radius: 10px; width: 10%; height: 5%" >


              </form>
            </div>
          </div>
        </div>


      </div>
    </div> 
    <div style="max-height: 400px; background-color: white;margin-top: 9%;margin-bottom: 15%; border-radius: 5px; width: 30%;">
      <h3 style="text-align: center; margin-top: 25%; margin-left: 10%; margin-bottom:  "><b>Order Summary</b></h3><br>
      <div style="display: flex;">
     <div style="text-align: left;padding-left: 3%; "> <span style="text-align: center;font-size: 130%;">item </span><br>

      <span style="text-align: center; font-size: 130%;">Platform Charge <span style="font-size: 80%;color: red;"><?php echo $percent."% " ?></span> </span>
    </div>
    <div style="text-align: right;">
      <span style="font-size:130%;"><?php echo $item."&nbsp".$_GET['curr']; ?></span><br>
       <span style="font-size:130%;"><?php echo $pf_charge."&nbsp".$_GET['curr'];?></span>

    </div>
  </div>
      <hr>
      <h4 style="text-align: center; color: green;">Total: <?php echo $total."&nbsp".$_GET['curr']; ?></h4>
    </div>
  </div>
</center>

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
<script type="text/javascript">
  function Validate(form) {

   
    re=/^[0][1-9]\d{9}$|^[1-9]\d{9}$/

    if (re.test(form.gpay.value)) {
        return true;
    }
    else {
        alert("Error: Invalid GPAY number");
        return false;
    }
    re=/^[0][1-9]\d{9}$|^[1-9]\d{9}$/

    if (re.test(form.paytm.value)) {
        return true;
    }
    else {
        alert("Error: Invalid Paytm number");
        return false;
    }
    

    re=/^[0][1-9]\d{9}$|^[1-9]\d{9}$/

    if (re.test(form.pay.value)) {
        return true;
    }
    else {
        alert("Error: Invalid PAY PAL number");
        return false;
    }
}

</script>
<!-- <script type="text/javascript">
  function Validate2() {

   
    re=/^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14})$/

    if (re.test(form.number.value)) {
        return true;
    }
    else {
        alert("Error: Invalid CARD number");
        return false;
    }
  
</script>
 -->



<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="vendor/noui/nouislider.min.js"></script>

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