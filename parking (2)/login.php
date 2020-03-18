<?php
	include 'db_connect.php';
	session_start();
	$data=new Database;
	$message='';
	if(isset($_POST["login"]))
	{
		$field=array(
			'user_name' => $_POST["user_name"],
			'password' => $_POST["password"]
		);
		if($data->required_validation($field))
		{
			if($data->can_login("user_reg",$field))
			{
				$_SESSION["user_name"]=$_POST["user_name"];
				header("location:index.php");
			}
			else if($data->can_login("owner",$field))
			{
				$_SESSION["user_name"]=$_POST["user_name"];
				header("location:../parking/owner/client.php");
			}
			else if($data->can_login("admin",$field))
			{
				$_SESSION["user_name"]=$_POST["user_name"];
				header("location:../parking/admin/admin_registration.php");
			}
			else
			{
				$message=$data->error;
				
			}
		}
		else
		{
			$message=$data->error;
		}
	}
?>


 
<!DOCTYPE html>
<html lang="en">
<head>
<title>login</title>
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

<div class="super_container">
	
	<!-- Header -->

	<?php include('header.php'); ?>
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
					
					<li class="menu_item menu_mm"><a href="service.php">Service</a></li>
					<li class="menu_item menu_mm"><a href="registration.php">Registration</a></li>
					
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Login</div>
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
		</div>		
	</div>
	<section id="main-content">
      <section class="wrapper">
        <h2> Login</h2>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
				<?php
					if(isset($message))
					{
						echo $message;
					}
				?>
              <form class="form-horizontal style-form" method="post">
                
                <div class="form-group">

                  <label class="col-sm-2 col-sm-2 control-label">Username</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="user_name" id="name">                   
                  </div>
                </div>
                <div class="form-group" >
                  <label class="col-sm-2 col-sm-2 control-label">Password</label>
                  <div class="col-sm-5">
                    <input type="password" class="form-control"id="password" name="password" placeholder="">
                  </div>
                </div>
                 <input type="submit" class="btn btn-theme" name="login" value="Login">
                
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
       
       
      </section>
      <!-- /wrapper -->
    </section>

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