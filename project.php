<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V5</title>
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
					<li><?php echo $_SESSION['name'];?></li>

				</div>
			</div>
			<center>


				<div class="container-contact100">
					<div class="wrap-contact100">
						<form class="contact100-form validate-form" action="picture.php" method="post" enctype="multipart/form-data">
							<span class="contact100-form-title">
								Basics 
							</span>

							

							<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
								<span class="label-input100" style="float: left;" >PROJECT NAME *</span>
								<input class="input100" type="text" name="name" placeholder="Enter Your Project Name" required>
							</div>

							<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
								<span class="label-input100"style="float: left;">PROJECT TAGLINE</span>
								<input class="input100" type="text" name="tag" placeholder="Product Tagline" required> 
							</div>

							<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
								<span class="label-input100" style="float: left;">DURATION</span>
								<input class="input100" type="text" name="duration" placeholder="Duration of Your Project " required>
							</div>



							<div class="wrap-input100 input100-select bg1">
								<span class="label-input100"style="float: left;">Category *</span>
								<div>
									<select class="js-select2" name="service" required>
										<option>Please choose</option>
										<option>Tech & Innovation</option>
										<option>Creative Works</option>
										<option>Community Works</option>
									</select>
									<div class="dropDownSelect2"></div>
								</div>
							</div>

							<div class="w-full dis-none js-show-service">
								<div class="wrap-contact100-form-radio">
									<span class="label-input100" style="float: left;">What type of products do you sell?</span>

									<div class="contact100-form-radio m-t-15">
										<input class="input-radio100" id="radio1" type="radio" name="type" value="physical" checked="checked" required>
										<label class="label-radio100" for="radio1" >
											Physical Products
										</label>
									</div>

									<div class="contact100-form-radio" >
										<input class="input-radio100" id="radio2" type="radio" name="type" value="digital" required>
										<label class="label-radio100" for="radio2">
											Digital Products
										</label>
									</div>

									<div class="contact100-form-radio" >
										<input class="input-radio100" id="radio3" type="radio" name="type" value="service" required>
										<label class="label-radio100" for="radio3">
											Services Consulting
										</label>
									</div>
								</div>

								<div class="wrap-contact100-form-range">
									<span class="label-input100" >Amt To Be Raised *</span>

									<div class="contact100-form-range-value">
										Rs <span id="value-lower">610</span> - Rs <span id="value-upper">980</span>
										<input type="text" name="tvalue" required>
									</div>

									<div class="contact100-form-range-bar">
										<div id="filter-bar"></div>
									</div>
								</div>
							</div>





							<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
								<span class="label-input100" style="float: left;">Description</span>
								<textarea class="input100" name="message" placeholder="Your description here..." required></textarea >
							</div>

							<div class="wrap-input100 validate-input bg0 rs1-alert-validate">

								Select image to upload:<br>
								<input type="file" name="fileToUpload0" id="fileToUpload"><br>
    <input type="file" name="fileToUpload1" id="fileToUpload"><br>
   	<input type="file" name="fileToUpload2" id="fileToUpload"><br>


   </div>





   <div class="container-contact100-form-btn">
   	<button class="contact100-form-btn">
   		<span><input type="Submit" name="submit" value="Submit" style="text-decoration: none; color: white; font-size: 20px;">
   		</span>
   	</button>
   </div>
</form>
</div>
</div>



<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
	$(".js-select2").each(function(){
		$(this).select2({
			minimumResultsForSearch: 20,
			dropdownParent: $(this).next('.dropDownSelect2')
		});


		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				if($(this).val() == "Please chooses") {
					$('.js-show-service').slideUp();
				}
				else {
					$('.js-show-service').slideUp();
					$('.js-show-service').slideDown();
				}
			});
		});
	})
</script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="vendor/noui/nouislider.min.js"></script>
<script>
	var filterBar = document.getElementById('filter-bar');

	noUiSlider.create(filterBar, {
		start: [ 1500, 12000 ],
		connect: true,
		range: {
			'min': 1500,
			'max': 60000,
		}
	});

	var skipValues = [
	document.getElementById('value-lower'),
	document.getElementById('value-upper')
	];

	filterBar.noUiSlider.on('update', function( values, handle ) {
		skipValues[handle].innerHTML = Math.round(values[handle]);
		$('.contact100-form-range-value input[name="fvalue"]').val($('#value-lower').html());
		$('.contact100-form-range-value input[name="tvalue"]').val($('#value-upper').html());
	});
</script>
<!--===============================================================================================-->

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