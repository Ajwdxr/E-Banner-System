

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
	<title>Welcome To E-Banner(Admin)</title>
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
			</a> -->
			<div class="user-panel">
				<td colspan="3" align="center"><h3>WELCOME <?php echo $_SESSION['username'];?> TO USER PAGE</h3></td>
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
		<div class="ln-title"><font color="black">Latest News</font></div>
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
	
		<div class="container">
			
			<div class="row">
				<div class="col-md-15">
					
						<div class="ti-content">
							<div class="ti-thumb set-bg"></div>
							<div class="ti-text">
							<tr>
							
								<td background="/wp-content/uploads/blue.edge_.gif"></td>
											  </tr>
											  <tr>
												<td colspan="2"><?php contents();?></td>
											  </tr>
											  <tr>
												<td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>
											  <tr>
												<td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>
											  <tr>
											   <td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>   
											  <tr>
												<td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>   
											  <tr>
												<td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>
											  <tr>
											   <td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>   
											  <tr>
												<td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>   
											  <tr>
												<td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>
												<tr>
												<td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>
											  <tr>
												<td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>
											  <tr>
											   <td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>   
											  <tr>
												<td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>   
											  <tr>
												<td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>
											  <tr>
											   <td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>   
											  <tr>
												<td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>   
											  <tr>
												<td colspan="6" bgcolor="#e6f2ff">&nbsp;</td>
											  </tr>
											  <tr>
												<td colspan="6" bgcolor="white">&nbsp;</td>
											  </tr>
											  <tr>
								
							</tr>
							</div>
						</div>
					</div>
				</div>
				
	
	<!-- Tournaments section bg -->




	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
					<li><a href="index.php">Home</a></li>
				    <li><a href="user.php?site=01">User </a></li>
					<li><a href="view_product.php?site=03">Banner Reservation & Status </a></td>
					<li><a href="view_class.php?site=03">Web Banner Reservation & Status </a></li>
					<li><a href="..">Logout</a></li>
			</ul>
			
			
			
			
			
			
			
			<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<script>document.write(new Date().getFullYear());</script> All rights reserved
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