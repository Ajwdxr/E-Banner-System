<!DOCTYPE html>

<?php 
include ('contents.php');

include ("../login/session.php");
session_start();

if (!isset($_SESSION['username'])) {
        header('Location: ../login');
		} 
		
	include('../include/dbconnect.php');

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
	<link rel="stylesheet" href="css/modal.css"/>


	

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
				<li><td width="16%" align="center"><a href="index.php">Home</a></td></li>
				<li><td width="16%" align="center"><a href="user.php?site=01">Profile</a></td></li>
				<li><td width="17%" align="center"><a href="view_product.php?site=02">  Banner Reservation & Status </a></td></li>
				<li><td width="16%" align="center"><a href="view_class.php?site=03">  Web Banner & Status</a></td></li>
				<!--<li><td width="17%" align="center"><a href="index.php?site=07">  Report</a></td></li>-->
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
					
						<div class="ti-content">
							<div class="ti-thumb set-bg"></div>
							<div class="ti-text">

							
							 <table width="105%" border="0" align="center" cellpadding="0" cellspacing="0">

						  <tr>
							<td>&nbsp;</td>
						  </tr>
							<tr>
							<td>&nbsp;</td>
						  </tr>
						  <tr>
							<td bgcolor="white"><a href="add_product.php?site=03_01"><font color="Black">Add Banner</font></a></td>
						  </tr>
						   <tr>
							<td>&nbsp;</td>
						  </tr>
						  <tr>
							<td>
							<table width="120%" border="1" align="center" cellpadding="0" cellspacing="0">
							  <tr align="left" bgcolor="#f2f2f2">
								<th width="6%">&nbsp;No</th>
								<th width="8%">&nbsp;Size</th>
								<th width="15%">&nbsp;Description</th>       
								<th width="15%">&nbsp;Location</th>
								<th width="8%">&nbsp;Apply Date</th>
								<th width="8%">&nbsp;Event Date</th>
								<th width="15%">&nbsp;Image</th>
								<th width="10%">&nbsp;Status</th>
								<th width="20%">&nbsp;Comment</th>
								
								<!--<th colspan="2" align="center">&nbsp;Action</th>-->
							  </tr>
							  <?php 
							  $query = "SELECT * FROM product ORDER BY bannerSize,bannerDesc,bannerLocation";
							  $result = mysql_query($query) or die(mysql_error());
							  $numrow = mysql_num_rows($result);
							  for ($a=0; $a<$numrow; $a++) {
								$row = mysql_fetch_array($result);
							  ?>
							  <tr bgcolor="#ffffe6">
								<td>&nbsp;<?php echo $a+1; ?></td>
								<td>&nbsp;<?php echo $row['bannerSize']; ?></td>       
								<td>&nbsp;<?php echo $row['bannerDesc']; ?></td>
								<td>&nbsp;<?php echo $row['bannerLocation']; ?></td>
								<td>&nbsp;<?php echo $row['bannerApplyDate']; ?></td>
								<td>&nbsp;<?php echo $row['bannerEventDate']; ?></td>
								 <td 
									<!-- Trigger the Modal -->
									<img id="bannerImg" src="../images/<?php echo $row['bannerImg'];?>" style="width:100%;max-width:150px">

									<!-- The Modal -->
									<div id="myModal" class="modal">

									  <!-- The Close Button -->
									  <span class="close">&times;</span>

									  <!-- Modal Content (The Image) -->
									  <img class="modal-content" id="img01">

									  <!-- Modal Caption (Image Text) -->
									  <div id="caption"></div>
									</div>
								</td>
								<td>&nbsp;<?php echo $row['bannerStatus']; ?></td>
								<td>&nbsp;<?php echo $row['bannerComment']; ?></td>
								<!-- <td width="8%" align="center"><a class="one" href="edit_product.php?site=02_02&prod=<?php echo $row['bannerID']?>">&nbsp;Edit</a></td>
								<td width="9%" align="center"><a class="one" href="delete_product.php?prod=<?php echo $row['bannerID']?>">&nbsp;Delete</a></td>-->
							  </tr>
							  <?php } 
							  if ($numrow==0)
								{
								 echo '<tr>
											<td colspan="8"><font color="#FF0000">No record avaiable.</font></td>
									   </tr>'; 
								}
							  ?>
							</table>
								
							</div>
						</div>
					
				</div>
				
	</section>
	
	
	
	
				
	</section>
	
	
	



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/modal.js"></script>
    </body>
</html>