<?php
include('../include/dbconnect.php');

$i=0;

foreach ( $_POST as $sForm => $value )
{
	$postedValue = htmlspecialchars( stripslashes( $value ), ENT_QUOTES ) ;
    $valuearr[$i] = $postedValue; 
$i++;
}
	  $update = "UPDATE user SET name='$valuearr[0]', applicantID='$valuearr[1]', faculty='$valuearr[2]', email='$valuearr[3]',
	  telephone='$valuearr[4]', username='$valuearr[7]', password='$valuearr[5]', level_id='$valuearr[6]'
	  WHERE username='$valuearr[7]'";
	  //echo $update;
	  $result = mysql_query($update) or die(mysql_error());
	  if ($result) {
	  ?>
	  <script type="text/javascript">
	  	window.location = "user.php?site=01"
	  </script>
	  <?php }
    
    
?>