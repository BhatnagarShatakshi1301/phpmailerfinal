
<?php 
	session_start();
	//echo session_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>Capitalvia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  


<meta charset="utf-8">
<title>Style </title>
<style media="screen">
#custom-button {
padding: 10px;
color: white;
 background-color: #2196F3;
 border: 1px solid #000;
 border-radius: 5px;
 cursor: pointer;
}

#custom-button:hover {
 background-color: #00b28f;
}

#custom-text {
 margin-left: 10px;
 font-family: sans-serif;
 color: #aaa;
}
</style>


<style>
.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}


.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}
</style>

<style>
hr {
display: block;
margin-top: 0.5em;
margin-bottom: 0.5em;
margin-left: auto;
margin-right: auto;
border-style: inset;
border-width: 1px;
}
</style>


</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="sending.php"  method="POST" enctype="multipart/form-data"  >
				<span class="contact100-form-title" >	
				<h1>CapitalVia 	
					Mailer </h1>
				</span>
				
				<br>
					
				
                   <span class="label-input100"> Enter CSV File name </span>
				   <br><br>
				   <style="border:1px solid  #f2f2f2;">
					<input class="input100" type="file" name="file" placeholder="file_name.csv"><br>

				<br>
				<br>

 

<br>
				

					<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100"> Sender</span>
					<input class="input100" type="text" name="sender" placeholder="Enter senders email"><br>
				</div>
				<br>
<hr>
<br>
<br>
			<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Subject</span>
					<textarea class="input100" rows="1px" cols="1px" name="subject" placeholder="Your subject for Email here..."></textarea>
				</div>
			<style>
u { 
  text-decoration: underline;
}
</style>
			<br>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Message</span>
					<textarea class="input100" rows="8px" cols="10px" name="msg" placeholder="Your message here..."></textarea>
				</div>
<br>
<hr>
<br>
  
  <u><a href ="ide.html"><p style="font-size:25px">HTML Compiler to preview</p></a></u>


<br>
<br>
<br>

<h3>Upload Your Attachment file here</h3>
<style="border:1px solid  #f2f2f2;">
<input class="input100" type="file" name="file" placeholder="file_name.csv"><br>

<br>

<br>

<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100"> Add CC:</span>
					<input class="input100" type="text" name="cc" placeholder="Enter cc email"><br>
				</div>
<br>
			<hr>

			<br>

 <p style="font-size:20px;"style= "text-align: left;"> Test Email Address</p>

  <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100"></span>
					<input class="input100" type="text" name="email_id" placeholder="Enter recivers email">
				</div>
<p style="font-size:15px;"style= "text-align: left;">A Lead with this email address should exist</p><br>



<!----button class="btn info">Save</button>----->
<hr>
				<div class="container-contact100-form-btn">
					<button id="btn" class="contact100-form-btn" type="submit" name="sendemail" value="1" >
					<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript">
const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
 realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
 if (realFileBtn.value) {
customTxt.innerHTML = realFileBtn.value.match(
 /[\/\\]([\w\d\s\.\-\(\)]+)$/
)[1];
 } else {
customTxt.innerHTML = "No file chosen, yet.";
 }
});

</script>
<?php
	if(isset($_SESSION['alert']))
	{
		echo $_SESSION['alert'];
		unset($_SESSION['alert']);
	}
?>
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
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


</body>
</html>
