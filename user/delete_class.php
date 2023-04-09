<?php session_start(); 
include('../include/dbconnect.php');
$classid = $_GET['classid'];

if($classid){
	$delete = "DELETE FROM class WHERE webID='$classid'";
	//echo $delete;
	$result = mysql_query($delete) or die(mysql_error());
	if ($result) {
	?>
	<script type="text/javascript">
	window.location = "view_class.php?site=05"
	</script>
	<?php } 
}
?>