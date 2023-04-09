<?php session_start(); 
include('../include/dbconnect.php');

$i=0;

foreach ( $_POST as $sForm => $value )
{
	$postedValue = htmlspecialchars( stripslashes( $value ), ENT_QUOTES ) ;
    $valuearr[$i] = $postedValue; 
$i++;
}

	$update = "UPDATE class SET webRes='$valuearr[0]', webDesc='$valuearr[1]', webApplydate='$valuearr[2]', webEventdate$valuearr[3]',
	webStatus='$valuearr[4]' , webComment='$valuearr[5]'
	WHERE webID='$valuearr[6]'";
	//echo $update;
	$result = mysql_query($update) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	window.location = "view_class.php?site=05"
</script>
<?php } ?>