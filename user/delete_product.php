<?php session_start(); 
include('../include/dbconnect.php');
$prod = $_GET['prod'];

if($prod){
	$delete = "DELETE FROM product WHERE bannerID='$prod'";
	//echo $delete;
	$result = mysql_query($delete) or die(mysql_error());
	if ($result) {
	?>
	<script type="text/javascript">
	window.location = "view_product.php?site=03"
	</script>
	<?php } 
}
?>