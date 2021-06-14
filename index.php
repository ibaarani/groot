
<!DOCTYPE html>
<html>
	
<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-26/? by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 11:37:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	<meta name="robots" content="noindex, follow">
</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				<form method = "POST" action="#">
					<h3>Login</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name = "username"class="form-control" placeholder="Name">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" name= "password" class="form-control" placeholder="Phone Number">
					</div>
					<button>
						<span><a href="../groot/dash.php">Login</a></span>
					</button>
					<br>
					<p style="color:black;"><center><a href="../groot/register.php">Register</a></center></p> 

				</form>
				  
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		<script>
			const apiBaseUrl = "https://grootpsna.free.beeceptor.com";

			function getUsers(){
			const endpoint = "/users";
  
			axios.get(`${apiBaseUrl}${endpoint}`).then(response=>{
  			const users = response.data.data;
  			console.log(users);
 			 });	
		}


		getUsers();

		</script>>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	
</html>
