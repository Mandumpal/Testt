<?php 
include "db_connect.php";
$data=new Database;
if(isset($_POST["add"]))
{
	$user=$_POST["owner"];
	echo $user;
	$insert_data=array(
	'user_type' => mysqli_real_escape_string($data->con,$_POST['owner']),

	'user_name' => mysqli_real_escape_string($data->con,$_POST['name']),
	'email' => mysqli_real_escape_string($data->con,$_POST['u_email']),
	'password' => mysqli_real_escape_string($data->con,$_POST['password'])
	
);
	if($user=="owner")
	{
		if($data->insert("owner",$insert_data))
		{
		header("location:user_registration.php");
		}
	}
	else
	{
		if($data->insert("user_reg",$insert_data))
		{
		header("location:user_registration.php");
		}
	}


}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Parking project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/news_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
</head>
<body>
<?php include('header.php'); ?>

<div class="super_container">
	
	<!-- Header -->

	

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo"><br>
								<div>parking management</div>
								<div>visitor parking</div>
								<div class="logo_image"><img src="images/logos.jpg" alt=""></div>
							</div>
						</div>

						<!-- Main Navigation -->
						<!-- <nav class="main_nav ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="home.php">Home</a></li>
								<li class="main_nav_item"><a href="aboutus.php">About us</a></li>
								<li class="main_nav_item"><a href="sevice.php">Sevice</a></li>
								<li class="main_nav_item active"><a href="registration.php">Registration</a></li>
								<li class="main_nav_item"><a href="contact.php">Contact</a></li>
							</ul>
						</nav> -->

						<!-- Search -->
						<!-- <div class="search">
							<form action="login.php" class="search_form">
								<input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
								<button type="submit" class="search_button ml-auto ctrl_class"><img src="images/search.png" alt=""></button>
							</form>
						</div> -->

						<!-- Hamburger -->
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<div class="menu_search_form_container">
					<form action="#" id="menu_search_form">
						<input type="search" class="menu_search_input menu_mm">
						<button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="images/search_2.png" alt=""></button>
					</form>
				</div>
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="home.php">Home</a></li>
					<li class="menu_item menu_mm"><a href="aboutus.php">About us</a></li>
					<li class="menu_item menu_mm"><a href="service.php">Service</a></li>
					<li class="menu_item menu_mm"><a href="registration.php">Registration</a></li>
					<li class="menu_item menu_mm"><a href="contact.php">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8" ></div>
<!-- 		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Registration</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="home.php">Home</a></li>
									<li class="home_breadcrumb">Registration</li>


								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->		
	</div>
	<br><br><br>
	<br><br><br>
	<br><br><br>
	
	<center><section id="main-content">
      <section class="wrapper">
        <h2 style="text-align: center;">Registration </h2>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">

              <form class="form-horizontal style-form" method="post">
                <div class="form-group">
                  <!-- <label class="col-sm-2 col-sm-2 control-label">Type</label> -->
                  <div class="col-sm-10">
                    <select name="owner" class="form-control">
						<option value="">select user type</option>
						<option value="user">user</option>
						<option value="owner">Land owner</option>
					</select>					
                  </div>
                </div>
                <div class="form-group">
                  <!-- <label class="col-sm-2 col-sm-2 control-label">Name</label> -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name"placeholder="Name">                   
                  </div>
                </div>
                
                
                <div class="form-group">
                  <!-- <label class="col-sm-2 col-sm-2 control-label">Email ID</label> -->
                  <div class="col-sm-10">
                    <input class="form-control" name="u_email" id="u_email" type="email" placeholder="Email ID" >
                  </div>
                </div>
                
                <div class="form-group">
                  <!-- <label class="col-sm-2 col-sm-2 control-label">Password</label> -->
                  <div class="col-sm-10">
                    <input type="password" class="form-control"id="password" name="password" placeholder="Password">
                  </div>
                </div>
                 <input type="submit" class="btn btn-theme" name="add" value="sign in">
                
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
       
       
      </section>
      <!-- /wrapper -->
    </section></center>
			

	<!-- Find Form -->

	

	<!-- News -->

	

	<!-- Newsletter -->


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_about">
						<!-- Logo -->
						<div class="logo_container">
							<div class="logo"><br>
								<div>Parking management</div>
								<div>visitor parking</div>
								<div class="logo_image"><img src="images/logo.png" alt=""></div>
							</div>
						</div>
						<div class="footer_about_text">The people to park thier vehicles safely and also in a way helping the owners of the land,to get the valid details about the vehicles and the person who parked the vehicle in thier area,inorder to protect from malpracrises of land.</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/news_custom.js"></script>
</body>
</html>