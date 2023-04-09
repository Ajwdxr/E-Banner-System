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
	<title>Welcome To E-Banner(User)</title>
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
			
  <tr>
  
		
			<ul class="footer-menu">
				<li><td width="16%" align="center"><a href="index.php">Home</a></td></li>
				<li><td width="16%" align="center"><a href="user.php?site=01">Profile</a></td></li>
				<li><td width="17%" align="center"><a href="view_product.php?site=03">  Banner Reservation & Status </a></td></li>
				<li><td width="16%" align="center"><a href="view_class.php?site=03"> Web Banner & Status</a></td></li>
				<!--<li><td width="17%" align="center"><a href="receipt.php?site=07">  Report</a></td></li>-->
				<li><td width="16%" align="center"><a href="..">Logout</a></td></li>
	</ul>
	
	
  </tr>
  
  </nav>
		</div>
	</header>
	<!-- Header section end -->
  
  <tr>
    <td colspan="6"><?php echo contents();?></td>
  </tr>
  
	<!-- Hero section -->
	<section class="hero-section">
		
	</section>
	<!-- Hero section end -->


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
			<div class="tournament-title">VISION & MISSION</div>
			<div class="row">
				<div class="col-md-6">
					<div class="tournament-item mb-4 mb-lg-0">
						<div class="ti-notic">VISION</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/vision.png"></div>
							<div class="ti-text">
								<h4>To establish UiTM as a premier university of outstanding scholarship and academic excellence capable of providing leadership to Bumiputeras’ dynamic involvement in all professional fields of world-class standards in order to produce globally competitive graduates of sound ethical standing.</h4>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="tournament-item">
						<div class="ti-notic">MISSION</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/mission.png"></div>
							<div class="ti-text">
								<h4>To enhance the knowledge and expertise of Bumiputeras in all fields of study through professional programmes, research work and community service based on moral values and professional ethics.</h4>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Tournaments section bg -->


	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				
			</div>
			<div class="row">
				<div class="col-lg-4">
					 
				
				
		</div>
	</section>
	<!-- Footer top section end -->

	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><td width="16%" align="center"><a href="index.php">Home</a></td></li>
				<li><td width="16%" align="center"><a href="user.php?site=01">Profile</a></td></li>
				<li><td width="17%" align="center"><a href="view_product.php?site=03">  Banner Reservation & Status </a></td></li>
				<li><td width="16%" align="center"><a href="view_class.php?site=05">  Web Banner & Status</a></td></li>
				<!--<li><td width="17%" align="center"><a href="receipt.php?site=07">  Report</a></td></li>-->
				<li><td width="16%" align="center"><a href="..">Logout</a></td></li>
			</ul>
			<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
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
  
 
</table>
</body>
</html>