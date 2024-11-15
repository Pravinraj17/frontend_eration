<?php

$invalid=0;
$mismatch=0;

include 'connect.php';

if (isset($_POST['e_signup_submit'])) {

	$e_username=$_POST['e_username'];
	$e_name=$_POST['e_name'];
	$e_email=$_POST['e_email'];
    $e_aadhar=$_POST['e_aadhar'];
    $e_ration=$_POST['e_ration'];
    $mobile_number=$_POST['e_mobilenumber'];
    $e_senior_citizen=$_POST['e_senior_citizen'];
    $e_physically_challenged=$_POST['e_physically_challenged'];
    $e_addressline1=$_POST['e_addressline1'];
    $e_addressline2=$_POST['e_addressline2'];
    $e_dob=$_POST['e_dob'];
    $e_gender=$_POST['e_gender'];
    $e_country=$_POST['e_country'];
    $e_state=$_POST['e_state'];
    $e_district=$_POST['e_district'];
    $e_city=$_POST['e_city'];
    $e_pincode=$_POST['e_pincode'];
    $password=password_hash($_POST['e_password'], PASSWORD_DEFAULT);
	// $cpassword=password_hash($_POST['e_cpassword'],PASSWORD_DEFAULT);
	// echo $password. "&&&". $cpassword;
	// exit();

$sql="select * from `e_ration_signup` where (e_username ='$e_username' or e_email='$e_email' or e_aadhar='$e_aadhar' or e_ration='$e_ration')";

	$result=mysqli_query($con,$sql);

	if ($result) {
		$num=mysqli_num_rows($result);

		if ($num > 0) {

			while ($row=mysqli_fetch_assoc($result)) {

				// $invalid=1;
				echo "invalid";

			
			}
		
		}else{

		// if ($password===$cpassword) {


		$sql="insert into `e_ration_signup`(e_username,e_name,e_email,e_aadhar,e_ration,e_mobile_number,e_senior_citizen,e_physically_challenged,e_addressline1,e_addressline2,e_dob,e_gender,e_country,e_state,e_district,e_city,e_pincode,e_password) values ('$e_username','$e_name','$e_email','$e_aadhar','$e_ration','$mobile_number','$e_senior_citizen','$e_physically_challenged','$e_addressline1','$e_addressline2','$e_dob','$e_gender','$e_country','$e_state','$e_district','$e_city','$e_pincode','$password')";


			$result=mysqli_query($con,$sql);

			if ($result) {
				
				header('location:e-ration-login.php');

				
			}else
			{
				die(mysqli_error($con));
			}

		// // }
		// else
		// {
		// 	echo "password and cpassword doesnt match";
		//    // $mismatch=1;
		// }
		}
	}


}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- 	<?php 

if ($invalid=1) {

	echo '<div class="alert alert-danger alert-sm alert-dismissible fade show" role="alert">
  <strong>Sorry!!!</strong>Username or Email Already Exits.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

}
?> -->


	<div class="container signupcontainer mt-4 bg-white rounded img-thumbnail">

	   <div class="header">

		  <h3 class="text-center text-muted mt-5 fs-2"><img src="./images/wheat1.png"> E-Ration Signup</h3>

	   </div>

		<form method="post" autocomplete="off" class="form">

			<div class="my-2">
				<label class="form-label">Create Your Username <span class="text-danger"> (To login your account )* </span> : </label>
				<input type="text" name="e_username" class="form-control form-control-sm" placeholder="Create Your Username">
			</div>

			   <div class="my-2">
				<label class="form-label">Name <span class="text-danger">( Name as per Ration card )*</span> :</label>
				<input type="text" name="e_name" class="form-control form-control-sm" placeholder="Enter Your name">
				

			</div>
			<div class="my-2">
				<label class="form-label">Email :</label>
				<input type="email" name="e_email" class="form-control form-control-sm" placeholder="Enter Your email">

			</div>

			<!-- aadhar and ration card -->

			<div class="row">
				<div class="col-lg-6">
	                 <div class="my-2">
				<label class="form-label">Aadhar number :</label>
				<input type="text" name="e_aadhar" class="form-control form-control-sm" placeholder="Enter Your Aadhar number">

			        </div>		
				</div>

				<div class="col-lg-6">
                    <div class="my-2">
				<label class="form-label">Ration-card number :</label>
				<input type="text" name="e_ration" class="form-control form-control-sm" placeholder="Enter Your Ration-card number">

			</div>
				</div>
				</div>

<!-- end of aadhar and ration card -->

<!-- mobile number -->

	<div class="my-2">
				<label class="form-label">Mobile Number <span class="text-danger">( Registered Mobile number )* </span>:</label>
				<input type="text" name="e_mobilenumber" class="form-control form-control-sm" placeholder="Enter Your Mobile number">

			</div>

<!-- end of mobile number -->


<!-- senior citizen -->
<div class="row">
	<div class="col-lg-6">

<div class="my-3">
				<label class="form-label">Senior Citizen <span class="text-danger"> (Age 60 and above people are consider as Senior Citizen)* </span>:</label>
				<br>		
				<select class="form-select form-select-sm" name="e_senior_citizen">

					<option  value="">Select an option</option>
					<option  value="yes">Yes</option>
					<option value="no">No</option>


				</select>

			</div>
			</div>

			<div class="col-lg-6">

<div class="my-3">
				<label class="form-label">Are you a Physically Challenged Person <span class="text-danger">* </span>:</label>
				<br>
			
				<!-- <input type="radio" name="e_physically_challenged" value="yes"> Yes -->

				<select class="form-select form-select-sm" name="e_physically_challenged">

					<option  value="">Select an option</option>
					<option  value="yes">Yes</option>
					<option value="no">No</option>


				</select>
				<!-- <input type="radio" name="e_physically_challenged" value="no"> No -->

			</div>
			</div>
			</div>

<!-- end of senior citizen-->

<!-- address  -->
		<div class="row">
				<div class="col-lg-6">
	                 <div class="my-2">
				<label class="form-label">Address line 1 :</label>
				<input type="text" name="e_addressline1" class="form-control form-control-sm" placeholder="Enter Your  Door no / flat no /Apartment no">

			        </div>
					
				</div>

				<div class="col-lg-6">
                    <div class="my-2">
				<label class="form-label">Address line 2:</label>
				<input type="text" name="e_addressline2" class="form-control form-control-sm" placeholder="Enter Your Street Address">

			</div>
				</div>
				</div>

<!-- end of address -->
<!-- date of birth & gender -->
	<div class="row">
				<div class="col-lg-6">
	                 <div class="my-2">
				<label class="form-label">DOB :</label>
				<input type="date" name="e_dob" class="form-control form-control-sm">

			        </div>
					
				</div>

				<div class="col-lg-6">

                    <div class="my-2">

				<label class="form-label">Gender :</label>

				<select class="form-select" name="e_gender">

					<option  value="">Select an option</option>
					<option  value="male">Male</option>
					<option value="female">female</option>
					<option value="transgender">Transgender</option>

				</select>


			</div>


				</div>

				</div>
<!-- end of date of birth & gender -->

<!-- country and state -->

				<div class="row">
				<div class="col-lg-6">
	                 <div class="my-2">
				       <label class="form-label">Country :</label>
				           <input type="text" name="e_country" class="form-control form-control-sm" value="INDIA">

			        </div>
					
				</div>

				<div class="col-lg-6">
                    <div class="my-2">
				<label class="form-label">State :</label>
				<input type="text" name="e_state" class="form-control form-control-sm" value="TAMILNADU">

			</div>
				</div>
				</div>	
			
		
<!-- end of country and state -->


<!-- district, city and pincode -->

		<div class="row">
				<div class="col-lg-4">
	                 <div class="my-2">
				       <label class="form-label">District :</label>
				           <input type="text" name="e_district" class="form-control form-control-sm" placeholder="District">

			        </div>
					
				</div>

				<div class="col-lg-4">
                    <div class="my-2">
				         <label class="form-label">City :</label>
				          <input type="text" name="e_city" class="form-control form-control-sm" placeholder="City">

			</div>
				</div>

					<div class="col-lg-4">
                       <div class="my-2">
				          <label class="form-label">Pincode:</label>
				             <input type="text" name="e_pincode" class="form-control form-control-sm" placeholder="Pincode">
			</div>
				</div>
				</div>



<!-- end of district, city and pincode -->
		

			<div class="my-2">
				<label class="form-label">Password</label>
				<input type="password" name="e_password" class="form-control form-control-sm" placeholder="Create Your Password">
			</div>

		<!-- 	<div class="my-3">
				<label class="form-label">Confrim Password</label>
				<input type="password" name="e_cpassword" class="form-control form-control-sm" placeholder="Please Confirm your password">
			</div> -->

			<div class="my-3 validation">

				<button class="btn btn-primary btn-sm w-100" name="e_signup_submit">Submit</button>

			</div>

		</form>

		<div class="mt-3">
			
			<p><label class="text-danger fs-5 fw-semibold"> Note:</label> You Have Already Complete the Signup Form then go to ==> <a href="e-ration-login.php" class="text-decoration-none fw-semibold">Login</a></p>

		</div>
	</div>

 <!-- praveen -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>


<script>

	$(document).ready(function() {

		 $.validator.addMethod("passwordRule", function(value) {
    return /[A-Z]/.test(value) &&
           /[a-z]/.test(value) &&
           /[0-9]/.test(value) &&
           /[@$!%*?&#]/.test(value);
  });
		
		$('.form').validate({
			rules:{
				e_username:{required:true,minlength:3},
				e_name:{required:true},
				e_email:{required:true},
				e_aadhar:{required:true,digits:true,minlength:12},
				e_ration:{required:true},
				e_mobilenumber:{required:true,digits:true,minlength:10},
				e_senior_citizen:{required:true},
				e_physically_challenged:{required:true},
				e_addressline1:{required:true},
				e_addressline2:{required:true},
				e_dob:{required:true},
				e_gender:{required:true},
				e_country:{required:true},
				e_state:{required:true},
				e_district:{required:true},
				e_city:{required:true},
				e_pincode:{required:true,digits:true},
				e_password:{required:true,minlength:8,passwordRule:true},
			},
			messages:{

				e_password:{passwordRule:"Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character"},
				e_senior_citizen: "Please select Yes or No.",
				e_physically_challenged: "Please select Yes or No.",
				e_addressline1:"Please Enter Your House.no/Flat.no/Apartment.no",
				e_addressline2:"Please Enter Your Street,Area and Location.",
				e_dob:"Please Enter Your Date of Birth",
				e_gender:"Please select Your Gender.",
				e_district:"Please Enter Your District Name.",
				e_city:"Please Enter Your City Name",
				
			},


			});


</script>

</html>