<!DOCTYPE html>

<?php 
include ('contents.php');

include ("../login/session.php");
session_start();

if (!isset($_SESSION['username'])) {
        header('Location: ../login');
		} 
		
	
?>



<html lang="zxx">
<head>
	<title>Welcome To E-Banner</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo 
			<a class="site-logo" href="index.html">
				<li><a href="index.html">E-BANNER</a></li>
			</a>-->
			<div class="user-panel">
					 <td colspan="6" align="center"><h3>WELCOME <?php echo $_SESSION['username'];?> TO USER PAGE</h3></td>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="index.php">Home</a></li>
				    <li><a href="user.php?site=01">User </a></li>
					<li><a href="view_product.php?site=03">Banner Reservation & Status </a></td>
					<li><a href="view_class.php?site=03">Web Banner Reservation & Status </a></li>
					<li><a href="..">Logout</a></li>
								
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	

	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Latest News</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new"> 1 </span>Majlis Anugerah Dekan </div>
				<div class="nt-item"><span class="strategy"> 2 </span> Bazar ramadhan </div>
				<div class="nt-item"><span class="racing"> 3 </span> Aktiviti Pusat Islam </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->




	<!-- Tournaments section -->
	<section class="tournaments-section spad">
		<div class="container">
			<div class="tournament-title">Banner Reservation</div>
			<div class="row">
				<div class="col-md-20">
					<div class="tournament-item mb-0 mb-lg-0">
						<div class="ti-content">
							<div class="ti-thumb set-bg"></div>
							<div class="ti-text">

													
						  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
						  <tr> 
							<td>&nbsp;</td>
						  </tr>
						  <tr>
							<td>
							<form action="db_add_class.php" method="post" name="add_class">
							<table width="100%" border="5" align="center">
							<tr>
								<td width="20%"><font color="white">Website Banner Resolution</font></td>  
								<td width="84%"><input hidden="text" name="webRes" size="50" placeholder="Resolution" /><font color="white">Fixed Resolution (700px x 400px)</font></td>
								
							  </tr>   
							  <tr>
								<td width="20%"><font color="white">Website Banner Description</font></td>
								<td><input type="text" name="webDesc" size="50" placeholder="Description"/></td>
							  </tr>
							  <tr>
								<td width="16%"><font color="white">Website Banner Apply Date</font></td>  
								<td width="84%"><input type="date" name="webApplyDate" size="50"  /></td>  
							  </tr>
							  <tr>
								<td width="16%"><font color="White">Website Banner Event Date</font></td>  
								<td width="84%"><input type="date" name="webEventDate" size="50"  /></td>  
							  </tr>
							   <tr>
									<td><font color="white">Picture:</font></td>
									<td>
									  <input type="file" name="file" id="file"/>
									</td>
								</tr>  
							  <!--<tr>
								<td width="16%"><font color="black">Website Banner Status</font></td>  
								<td width="84%"><input type="text" name="webStatus" size="50" placeholder="Pending" /></td>  
							  </tr>-->
							   <!--<tr>
								<td width="16%"><font color="black">Website Banner Comment</font></td>  
								<td width="84%"><input type="text" name="webComment" size="50" placeholder="Pending" /></td>  
							  </tr>-->
							  
							  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  
							  <tr> 
								<td colspan="2">
								<input type="submit" name="submit" value=" Save "  />
								<input type="button" name="cancel" value=" Cancel " onclick="location.href='view_class.php?site=05'" /></td>
							  </tr>
							</table>
							<br>
							</div>
							<p><b><h5><font color="white">Please Check Your Banner Details Before Submit. Once It Submited, It Cannot Be Edited.</font></h5></b></p>
						</div>
					</div>
				</div>
				
	</section>
	
	<!-- Footer section
	<footer class="footer-section">
		<div class="container"> -->
			
			<!--<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<script>document.write(new Date().getFullYear());</script> All rights reserved-->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
		</div>
	</footer>
	<!-- Footer section end -->
	



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>