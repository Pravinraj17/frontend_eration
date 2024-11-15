	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">	
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Index</title>
	</head>
	<body>
		
		<div class="navbar navbar-expand-lg bg-light">

			<div class="navbar-brand">

				<div class="logo mx-4">

					<a href="javascript:void(0)" class="text-decoration-none fs-5 fw-semibold text-muted">
						<img src="./images/nationalsymbol1.png" class="mx-2"> E-RATION
					</a>

				</div>

			</div>

			<button class="navbar-toggler" type="button"data-bs-toggle="collapse" data-bs-target="#mynavbar"><i class="bi bi-list"></i>
			</button>

			<div class="collapse navbar-collapse" id="mynavbar">

				<ul class="navbar-nav ms-5">

					<li class="nav-item e-ration-nav ">
						<a href="javascript:void(0)" class="nav-link mx-lg-4 mx-sm-0 fw-semibold"><i class="bi bi-house-door-fill "></i> Home</a> 
					</li>

					<li class="nav-item e-ration-nav"> <a href="javascript:void(0)" class="nav-link mx-lg-4 mx-sm-0 fw-semibold"><i class="bi bi-database-fill-dash"></i> DashBoard </a></li>

					<li class="nav-item e-ration-nav">
						<a href="javascript:void(0)" class="nav-link mx-lg-4 mx-sm-0 fw-semibold"> 
							<i class="bi bi-shop"></i> Shop 
						</a>
					</li>

					<li class="nav-item e-ration-nav">
						<a href="javascript:void(0)" class="nav-link mx-lg-4 mx-sm-0 fw-semibold">
							<i class="bi bi-telephone-fill"></i> Contact Us
						</a>
					</li>

					<li class="nav-item d-lg-block d-lg-none e-ration-nav">
						<a href="javascript:void(0)" class="nav-link mx-lg-4 mx-sm-0 fw-semibold">
							<i class="bi bi-cart-plus-fill"></i> Cart
						</a>
					</li>

					<div class="dropdown d-lg-block d-lg-none mx-lg-4 mx-sm-0 e-ration-nav">

						<a class="dropdown-toggle nav-link fw-semibold " href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="bi bi-person-fill"></i> Profile
						</a>

						<ul class="dropdown-menu">
							<li class="e-ration-nav">
								<a class="dropdown-item fw-semibold text-muted" href="javascript:void(0)"> <i class="bi bi-person-lines-fill"></i> User Info
								</a>
							</li>
							<li class="e-ration-nav">
								<a class="dropdown-item fw-semibold text-muted" href="javascript:void(0)"><i class="bi bi-person-plus-fill"></i> Edit Profile
								</a>
							</li>
						</ul>
					</div>
					<li class="nav-item d-lg-block d-lg-none e-ration-nav">
						<a href="javascript:void(0)" class="nav-link mx-lg-4 mx-sm-0 fw-semibold"><i class="bi bi-bell-fill"></i> Notification
						</a>
					</li>

					<div class="dropdown d-lg-block d-lg-none mx-lg-4 mx-sm-0 e-ration-nav">

						<a class="dropdown-toggle nav-link fw-semibold " href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="bi bi-gear-fill"></i> Settings
						</a>

						<ul class="dropdown-menu">
							<li class="e-ration-nav">
								<a class="dropdown-item fw-semibold text-muted" href="javascript:void(0)"> <i class="bi bi-person-gear"></i> Account Settings
								</a>
							</li>
							<li class="e-ration-nav">
								<a class="dropdown-item fw-semibold text-muted" href="javascript:void(0)"><i class="bi bi-shield-shaded"></i> Privacy
								</a>
							</li>
							<li class="e-ration-nav">
								<a class="dropdown-item fw-semibold text-muted" href="javascript:void(0)"> <i class="bi bi-question-circle"></i> Help
								</a>
							</li>
						</ul>
					</div>

					<li class="nav-item d-lg-block d-lg-none e-ration-nav">
						<a class="nav-link mx-lg-4 mx-sm-0 fw-semibold  text-muted" href="e-ration-logout.php">
							<i class="bi bi-box-arrow-right"></i> Logout
						</a>
					</li>


					<!-- dropdown for profile -->


				</ul>


			</div>

			<div class="mx-3 d-md-block d-none e-ration-icon">

				<a href="javascript:void(0)" class="">
					<i class="bi bi-cart-plus-fill fs-5 text-muted"></i>
				</a>

			</div>

			<div class="mx-3 d-md-block d-none e-ration-icon">

				<a href="javascript:void(0)" class="">

					<button type="button" class="btn btn-white position-relative">
						<i class="bi bi-bell fs-5"></i>
						<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> 0 </span>
					</button>
				</a>

			</div>

			<div class="mx-3 d-md-block d-none e-ration-icon">

				<a href="javascript:void(0)">
					<i class="bi bi-gear-fill fs-5 text-muted e-icon"></i>
				</a>

			</div>

			<div class="mx-3 d-md-block d-none e-ration-icon">

				<a href="javascript:void(0)" class="text-decoration-none">
					<i class="bi bi-person-circle fs-5 text-muted "></i>
				</a>

			</div>

			<div class="me-4 mx-3 d-md-block d-none  e-ration-icon">

				<a href="e-ration-logout.php">
					<i class="bi bi-box-arrow-right fs-5 text-muted e-icon"></i>
				</a>

			</div>
			<br>


		</div>
		<!-- end of navbar -->



		<!-- Home page container -->

		<section id="e-ration-home">
			<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
				<source src="./images/farm3.mp4" type="video/mp4">
				</video>

				<div class="container-fluid e-ration-home rounded">

					<div class="row text-white">

						<div class="col">
							<h1 class="mt-5">The Best Platform for E-Ration</h1><br>
							<h4 class="text-capitalize">ease of doing  a book ration</h4><br>
							<h4 class="text-capitalize "> safety and skip the Queue</h4>
							<a href="javascript:void(0)" class="text-dark text-decoration-none btn btn-light btn-sm my-5">Book Ration</a>

						</div>

					</div>


				</div>

			</section>

			<!-- bookslot__delivery -->

			<section id="bookslot__delivery">

				<div class="container-fluid bookslot__delivery mt-5 bg-white img-thumbnail">
					<h2 class="text-center">Order Details</h2>
					<form method="post" action="">
					<div class="row">
						<div class="col-md-6 bg-light rounded bookslot my-3 img-thumbnail">

						 <div>
							<h5 class="mt-3">
								<input type="radio" name="e-ration-bookslot" value="" class="mx-2">Book Slot 
							</h5>
						 </div>

						<div class="row">

						 <div class="col-md-4 my-2">
							<label class="form-label">Locations</label>
								<select class="form-select form-select-sm" name="e-ration-city">
									<option value="">Select your city</option>
									<option value="Vellore">Vellore</option>
									<option value="Chennai">Chennai</option>
									<option value="Ranipet">Ranipet</option>
									<option value="Thiruvannamalai">Thiruvannamalai</option>
								</select>
						  </div>
						   <div class="col-md-4 my-2">
							<label class="form-label">Area</label>
								<select class="form-select form-select-sm" name="e-ration-area">
									<option value="">Select your area</option>
									<option value="Vellore">Vellore</option>
									<option value="virupakchipuram">Virupakchipuram</option>
									<option value="Sainathapuram">Sainathapuram</option>
									<option value="otteri">Otteri</option>
								</select>
						  </div>
						   <div class="col-md-4 my-2">
							<label class="form-label">Date</label>
							<input type="date" name="e-ration-date" class="form-control form-control-sm">

						  </div>

							</div>
							
						</div>


						<!--delivery slot -->
		<div class="col-md-6 bg-light  rounded delivery my-3 img-thumbnail">

						 <div>
							<h5 class="mt-3">
								<input type="radio" name="e-ration-delivery" value="" class="mx-2">Delivery 
							</h5>
						 </div>

						<div class="row">

						 <div class="col-md-4 my-2">
							<label class="form-label">Delivery-Locations</label>
								<select class="form-select form-select-sm" name="e-ration-delivery-city">
									<option value="">Select your city</option>
									<option value="Vellore">Vellore</option>
									<option value="Chennai">Chennai</option>
									<option value="Ranipet">Ranipet</option>
									<option value="Thiruvannamalai">Thiruvannamalai</option>
								</select>
						  </div>
						   <div class="col-md-4 my-2">
							<label class="form-label">Delivery-Area</label>
								<select class="form-select form-select-sm" name="e-ration-delivery-area">
									<option value="">Select your area</option>
									<option value="Vellore">Vellore</option>
									<option value="virupakchipuram">Virupakchipuram</option>
									<option value="Sainathapuram">Sainathapuram</option>
									<option value="otteri">Otteri</option>
								</select>
						  </div>
						   <div class="col-md-4 my-2">
							<label class="form-label">Delivery-Date</label>
							<input type="date" name="e-ration-delivery-date" class="form-control form-control-sm">

						  </div>

							</div>
							
						</div>
					


				</div>
				</form>
			</div>

			</section>	

<!-- e-ration advertisement (note)  -->

             <section id="e-ration-note">
             
                 <div class="container-fluid my-4 bg-light rounded img-thumbnail">
                 	<div class="row">
                 		<div class="col text-center">
                 			<label class="text-danger fs-5 fw-semibold"> Note :</label>
                          <span class="element fs-5 fst-italic"></span><label class="text-danger">*</label>
                       </div>
                     </div>
                 </div>

             </section>

             <section id="e-ration-dashboard">
             	<div class="container-fluid e-ration-dashboard mt-3 bg-white img-thumbnail">
             		  	<h1 class="text-center text-muted">DashBoard</h1>
             	<div class="row">

             		<div class="col-lg-6">
             			
             			<h3 class="text-start text-muted">Today Available</h3>

             		</div>
             		<div class="col-lg-6 dashboard-view my-2">
             			
             			<button class="float-end btn btn-primary btn-sm w-50"><a href="javascript:void(0)" class="text-decoration-none text-white">View All</a></button>

             		</div>
             	</div>
             	<div class="row">

             	<div class="col-lg-3 img-thumbnail">
             		
                <img src="./images/boiled-rice1.jpg" style="width:300px !important;height: 200px!important;" class="rounded">
                <p class="fw-semibold mt-3">Boiled Rice</p>
                <p class="fw-semibold text-muted">30 Kg</p>
                <div class="row">
                	<div class="col-lg-6">
                		<p class="fw-semibold">Free</p>
                	</div>
                	<div class="col-lg-6">
                		<button class="btn btn-primary btn-sm w-100">ADD</button>
                	</div>
                </div>

             	</div>
             	<div class="col-lg-3 img-thumbnail">
             		 <img src="./images/sugar.jpg" style="width:300px!important;height: 200px!important;" class="rounded">
                <p class="fw-semibold mt-3">Sugar</p>
                <p class="fw-semibold text-muted">30 Kg</p>
                <div class="row">
                	<div class="col-lg-6">
                		<p class="fw-semibold">Free</p>
                	</div>
                	<div class="col-lg-6">
                		<button class="btn btn-primary btn-sm w-100">ADD</button>
                	</div>
                </div>

             	</div>
             	<div class="col-lg-3 img-thumbnail">
             		 <img src="./images/wheat.jpg" style="width:300px!important;height: 200px!important;" class="rounded">
                <p class="fw-semibold mt-3">Wheat</p>
                <p class="fw-semibold text-muted">30 Kg</p>
                <div class="row">
                	<div class="col-lg-6">
                		<p class="fw-semibold">Free</p>
                	</div>
                	<div class="col-lg-6">
                		<button class="btn btn-primary btn-sm w-100">ADD</button>
                	</div>
                </div>
             	</div>
             	<div class="col-lg-3 img-thumbnail">
             		 <img src="./images/dal.jpg" style="width:300px !important;height: 200px!important;" class="rounded">
                <p class="fw-semibold mt-3">Toor Dal</p>
                <p class="fw-semibold text-muted">30 Kg</p>
                <div class="row">
                	<div class="col-lg-6">
                		<p class="fw-semibold">Free</p>
                	</div>
                	<div class="col-lg-6">
                		<button class="btn btn-primary btn-sm w-100">ADD</button>
                	</div>
                </div>
             	</div>
             	</div>

             	</div>

             </section>

             <section id="e-ration-contact_us">
             	
             	
                <div class="container-fluid mt-3 bg-white img-thumbnail e-ration-contact_us">
                	<h1 class="text-center">Contact Us</h1>
                	
                	<div class="row">
                		<div class="col-lg-6 my-2">
                			<h3 class="text-primary mt-5">E-Ration</h3>
                			<p class="text-muted">Our vision is to provide convenience and<br> helped in stabilising food prices <br>and making food available to consumers </p>

                			<a href="javascript:void:(0)" class="text-decoration-none text-muted contact"><i class="bi bi-telephone-fill me-2"></i> 000-123456</a> <br>
                			<a href="javascript:void:(0)" class="text-decoration-none text-muted contact"><i class="bi bi-envelope-at-fill me-2"></i>abcdef@adc.com</a>
                		</div>

                		<div class="col-lg-6">
                			<div class="row">
                				<div class="col-lg-6">

                			       <h3 class="mt-5 text-primary">About</h3>
                			          <div class="my-2">
                			            <a href="javascript:void(0)" class="text-muted text-decoration-none about">How it works</a>
                			          </div>

                			           <div>
                			              <a href="javascript:void(0)" class="text-muted text-decoration-none about">Featured</a>
                			          </div>
                			    </div>
                			    <div class="col-lg-6">
                			    	
                			    	<h3 class="text-primary mt-5">Social Media</h3>
                			    	<div class="mt-2">
                			    		<a href="javascript:void(0)" class="text-muted text-decoration-none social-media"><i class="bi bi-discord me-2"></i> Discord</a>
                			    	</div>
                			    	<div class="mt-2">
                			    		<a href="javascript:void(0)" class="text-muted text-decoration-none social-media"><i class="bi bi-instagram me-2"></i>Instagram</a>
                			    	</div>
                			    	<div class="mt-2">
                			    		<a href="javascript:void(0)" class="text-muted text-decoration-none social-media"><i class="bi bi-twitter-x me-2"></i> Twitter</a>
                			    	</div>
                			    	<div class="mt-2">
                			    		<a href="javascript:void(0)" class="text-muted text-decoration-none social-media"><i class="bi bi-facebook me-2"></i> Facebook</a>
                			    	</div>

                			    </div>
                			</div>

                		</div>
                	</div>
                    
                </div>

             </section>

             <hr>

             <section id="e-ration-footer">
             	<div class="container-fluid bg-white img-thumbnail">

             	<footer>
             		<div class="row">
             			<div class="col-lg-6 mt-2">
             		      <p>&copy2024 E-RATION.All rights reserved</p>
             		    </div>

             		    <div class="col-lg-6">

             		    <div class="float-end">
             		      <a href="javascript:void(0)" class="text-muted text-decoration-none me-5">Privacy & policy</a>
             		      <a href="javascript:void(0)" class="text-muted text-decoration-none me-4">Terms & Conditions</a>
             		    </div>

             		    </div>

             		</div>
             	</footer>
             </div>
             		

             </section>




		</body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
		<script>
			$(document).ready(function () {

				var typed = new Typed('.element',{
					 strings: ["Physically challenged people and Senior Citizen user can get free Delivery of Commodities"],  
                     typeSpeed: 100,
                     backSpeed:30,
                     loop:true,
                     loopCount:Infinity,
                     startDelay:500,
				});
				
			})
		</script>
		</html>
