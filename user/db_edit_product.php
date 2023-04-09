<?php session_start(); 
include('../include/dbconnect.php');

$i=0;

foreach ( $_POST as $sForm => $value )
{
	$postedValue = htmlspecialchars( stripslashes( $value ), ENT_QUOTES ) ;
    $valuearr[$i] = $postedValue; 
$i++;
}

$update = "UPDATE product SET bannerID='$valuearr[0]', bannerSize='$valuearr[1]', bannerDesc='$valuearr[2]', bannerLocation='$valuearr[3]',
	bannerApplyDate='$valuearr[4]',bannerEventDate='$valuearr[5]',bannerStatus='$valuearr[6]', bannerComment='$valuearr[7]'
	WHERE bannerID='$valuearr[0]'";
	//echo $update;
	$result = mysql_query($update) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	window.location = "view_product.php?site=03"
</script>
<?php } ?>