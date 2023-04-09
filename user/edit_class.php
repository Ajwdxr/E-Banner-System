<!DOCTYPE html>

<?php 
include ('contents.php');

include ("../login/session.php");
session_start();

if (!isset($_SESSION['username'])) {
        header('Location: ../login');
		} 
		
	include('../include/dbconnect.php');
	$classid = $_GET['classid'];
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
				<li><td width="16%" align="center"><a href="index.php?site=01">Profile</a></td></li>
				<li><td width="17%" align="center"><a href="product.php?site=02">  Banner Reservation & Status </a></td></li>
				<li><td width="16%" align="center"><a href="index.php?site=05">  Web Banner</a></td></li>
				<li><td width="17%" align="center"><a href="index.php?site=07">  Web Status</a></td></li>
				<li><td width="16%" align="center"><a href="..">Logout</a></td></li>
								
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

													
						  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
						  <tr> 
							<td>&nbsp;</td>
						  </tr>
						  <?php 
							  $query = "SELECT * FROM class WHERE webID='$classid'";
							  $result = mysql_query($query) or die(mysql_error());
							  $numrow = mysql_num_rows($result);
							  $row = mysql_fetch_array($result);
						  ?>
						  <tr>
							<td>
							<form action="db_edit_class.php" method="post" name="edit_class">
							<table width="110%" border="10" align="">
							  <!--<tr>
								<td width="16%"><font color="white">Web Resolution</font></td>
								<td><input type="hidden" name="webRes" size="50" placeholder="Web Resolution" value="<?php echo $row['webRes'];?>" /></td>
							  </tr>-->
							  <tr>
								<tr>
								<td width="16%"><font color="white">Website Banner Description</font></td>
								<td><input type="text" name="webDesc" size="50" placeholder="Description"/></td>
							  </tr>	
							  </tr>
							  <tr>
								<td width="16%"><font color="white">Web Apply Date</font></td>  
								<td width="84%"><input type="date" name="webApplyDate" size="50" value="<?php echo $row['webApplyDate'];?>" /> </td>  
							  </tr>
							  <!--<tr>
								<td width="16%"><font color="white">Web Status</font></td>  
								<td width="84%"><input type="text" name="webStatus" size="50" placeholder="Status" value="<?php echo $row['webStatus'];?>" /></td>  
							  </tr>-->
							  <!--<tr>
								<td width="16%"><font color="white">Web Comment</font></td>  
								<td width="84%"><input type="text" name="webComment" size="50" placeholder="Web Comment" value="<?php echo $row['webComment'];?>" /></td>  
							  </tr>-->
							  <tr> 
								<td colspan="2"><input type="hidden" name="webID" size="50" value="<?php echo $row['webID'];?>" /></td>
							  </tr>
							  <tr> 
								<td colspan="2">
								<input type="submit" name="submit" value=" Save " />
								<input type="button" name="cancel" value=" Cancel " onclick="location.href='view_class.php?site=05'" />
								</td>
							  </tr>
							</table>
							</form>
							</td>
						  </tr>
						</table>
								
							</div>
						</div>
					</div>
				</div>
				
	</section>
	



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>