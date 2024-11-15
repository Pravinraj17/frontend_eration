<?php
session_start();

if (isset($_SESSION['e_ration_login'] )){

header('location:e-ration-index.php');
}


if (isset($_POST['e_login'])) {

	include 'connect.php';

	$e_login_username=$_POST['e_login_username'];
	$e_login_password=$_POST['e_login_password'];

	$sql="select * from `e_ration_signup` where (e_username='$e_login_username' or e_email='$e_login_username' or e_aadhar='$e_login_username')";

	$result=mysqli_query($con,$sql);

	if ($result) {
		$num=mysqli_num_rows($result);
		if ($num>0) {

			while ($row=mysqli_fetch_assoc($result)) {

				if (password_verify($e_login_password,$row['e_password'])) {
					$_SESSION['e_login_username']=$row['e_username'];
					$_SESSION['e_ration_login']=true;
					header('location:e-ration-index.php');
					
				}
				
			}
			
		}else
				{
					header('location:e-ration-signup.php');
				}
	}



}






?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E_ration_Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="container logincontainer bg-white rounded img-thumbnail mt-5">

		<h2 class="text-center">Welcome to E-Ration</h2>

		<h2 class="text-center">Login <i class="bi bi-shop"></i></h2>

		<div class="row">

			<div class="col-lg-6 rounded border-end">

				<form method="post" class="form" autocomplete="off">
					
					<div class="my-3">

					<label for="e-login-name" class="form-label">Enter your Username, Email or Aadhar number : </label>
						<input type="text" name="e_login_username" class="form-control form-control-sm" placeholder="Enter valid address">
						
					</div>

				<div class="my-3">
				   <label for="e-login-password" class="form-label">Enter your Password :</label>
						<input type="password" name="e_login_password" class="form-control form-control-sm" placeholder="Enter Your Password">
						
					</div>	

					<div class="my-3">

                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                       <label class="form-check-label" for="exampleCheck1">Check me out</label>
				
					</div>

            <button class="btn btn-primary btn-sm w-100" name="e_login">Login</button>

				</form>

				<div class="mt-3">
					
					<p> Don't have an any account | <a href="e-ration-signup.php" class="text-decoration-none">Signup</a></p>
				</div>

			</div>

			<div class="col-lg-6 shoppingpng bg-light rounded">
				 
              <img src="./images/eration.png">

			</div>

		</div>


	</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
<script>

	$(document).ready(function() {
		
		$('.form').validate({
			rules:{
				e_login_username:{required:true},
				e_login_password:{required:true},
				


			},
			messages:{
				e_login_username:"Please enter your username or valid Id numbers*",
				e_login_password:"Please enter Your password *",
			}


			})
	})

</script>
</html>