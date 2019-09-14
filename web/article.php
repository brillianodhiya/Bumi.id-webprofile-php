<!DOCTYPE html>
<html lang="en">
<head>
<title>Bumi.id | Please Save our Earth</title>
<link rel="shortcut icon" href="images/earth.png">
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script type="text/javascript" src="//maps.googleapis.com/maps/api/js"></script>
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="w3_agileits_banner_main_grid">
				<div class="w3_agile_logo">
					<h1><a href="index.php"><span>B</span>umi.id<i>Save our Earth</i></a></h1>
				</div>
				<div class="agileits_w3layouts_menu">
					<div class="shy-menu">
						<a class="shy-menu-hamburger">
							<span class="layer top"></span>
							<span class="layer mid"></span>
							<span class="layer btm"></span>
						</a>
						<div class="shy-menu-panel">
							<nav class="menu menu--horatio link-effect-8" id="link-effect-8">
								<ul class="w3layouts_menu__list">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="services.php">Services</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
								</ul>
							</nav>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- banner -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>/</span></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i>Article</li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>Article</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- contact -->
<?php
$dbh = mysqli_connect("localhost", "root", "", "bumi");
if($dbh === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "select * from tbl_artikel where no='".$_GET['no']."'";
$result = mysqli_query($dbh,$sql);
while ($row = mysqli_fetch_array($result))
{
  $image = $row['image'];
  $image_src = "upload/".$image;
 ?>
 <div class="welcome">
	 <div class="container">
		 <h3 class="agileits_w3layouts_head"><span><?php echo $row[1]; ?></span></h3>
		 <div class="w3_agile_image">
			 <img src="images/1.png" alt=" " class="img-responsive" />
			 <p class="agile_para"><?php echo $row[6]; ?><span> <?php echo $row[4]; ?></span></p>
			 <div class="w3ls_news_grids">
				 <div class="col-md-8 w3_agile_mail_left">
					 <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						 <div class="container">
							 <img src="<?php echo $image_src; ?>" class="mx-auto d-block" style="width:50%"></br></br>
						 </div class="caption">
						 <p><?php echo $row[5]; ?></P>
					 </div>
				 </div>
			 </div>
		 <?php } ?>
			 <div class="col-md-4 w3_agile_mail_right">
				 <div class="w3_agileits_mail_right_grid">
					 <h4>About Bumi.id</h4>
					 <p>Bumi.id is an organization from Indonesian and focused on reforestation for the future.</p>
					 <h5>Follow Us On</h5>
					 <ul class="agileits_social_list">
						 <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						 <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						 <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						 <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					 </ul>
					 <div class="w3_agileits_mail_right_grid_pos">
						 <img src="images/34.jpg" alt=" " class="img-responsive" />
					 </div>
				 </div>
				 <div class="w3_agileits_mail_right_grid_main">
					 <div class="w3layouts_mail_grid_left">
						 <div class="w3layouts_mail_grid_left1 hvr-radial-out">
							 <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						 </div>
						 <div class="w3layouts_mail_grid_left2">
							 <h3>Mail Us</h3>
							 <a href="mailto:info@example.com">info@example.com</a>
						 </div>
						 <div class="clearfix"> </div>
					 </div>
					 <div class="w3layouts_mail_grid_left">
						 <div class="w3layouts_mail_grid_left1 hvr-radial-out">
							 <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						 </div>
						 <div class="w3layouts_mail_grid_left2">
							 <h3>Address</h3>
							 <p>Bumi.id 8907 Greenly.</p>
						 </div>
						 <div class="clearfix"> </div>
					 </div>
					 <div class="w3layouts_mail_grid_left">
						 <div class="w3layouts_mail_grid_left1 hvr-radial-out">
							 <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						 </div>
						 <div class="w3layouts_mail_grid_left2">
							 <h3>Phone</h3>
							 <p>+(0121) 121 121</p>
						 </div>
						 <div class="clearfix"> </div>
					 </div>
				 </div>
			 </div>
			 <div class="clearfix"> </div>
		 </div>
	 </div>
 </div>

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-3 agileinfo_footer_grid">
					<div class="agileits_w3layouts_footer_logo">
						<h2><a href="index.php"><span>B</span>umi.id<i>Save our Earth</i></a></h2>
					</div>
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Contact Info</h3>
					<h4>Call Us <span>+1234 567 891</span></h4>
					<p>Bumi.id, 456 Green Road <span>8907 Greenly.</span></p>
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-2 agileinfo_footer_grid agileinfo_footer_grid1">
					<h3>Navigation</h3>
					<ul class="w3layouts_footer_nav">
						<li><a href="index.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Home</a></li>
						<li><a href="about.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>About Us</a></li>
						<li><a href="services.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Services</a></li>
						<li><a href="contact.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 agileinfo_footer_grid">
					<h3>Blog Posts</h3>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/2.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/3.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3_agileits_footer_copy">
			<div class="container">
				<p>© 2018 Bumi.id. All rights reserved | Thanks to <a href="http://w3school.com">W3school.</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- menu -->
	<script>
		$(function() {

			initDropDowns($("div.shy-menu"));

		});

		function initDropDowns(allMenus) {

			allMenus.children(".shy-menu-hamburger").on("click", function() {

				var thisTrigger = jQuery(this),
					thisMenu = thisTrigger.parent(),
					thisPanel = thisTrigger.next();

				if (thisMenu.hasClass("is-open")) {

					thisMenu.removeClass("is-open");

				} else {

					allMenus.removeClass("is-open");
					thisMenu.addClass("is-open");
					thisPanel.on("click", function(e) {
						e.stopPropagation();
					});
				}

				return false;
			});
		}
	</script>
<!-- //menu -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
