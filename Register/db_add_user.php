<?php include('../include/dbconnect.php');

$i=0;

foreach ( $_POST as $sForm => $value )
{
	$postedValue = htmlspecialchars( stripslashes( $value ), ENT_QUOTES ) ;
    $valuearr[$i] = $postedValue; 
$i++;
}

//echo $valuearr[0].'<br>'.$valuearr[2].'<br>'.$valuearr[3].'<br>'.$valuearr[4].'<br>'.$valuearr[5].'<br>'.$valuearr[6].'<br>'.$valuearr[7].'<br>'.$valuearr[8];

	  $addrecord = "INSERT INTO user (name, applicantID, faculty, email, telephone, username, password, level_id)
	  VALUES('$valuearr[0]', '$valuearr[1]', '$valuearr[2]', '$valuearr[3]', '$valuearr[4]', '$valuearr[5]', '$valuearr[6]', '$valuearr[7]')";
	  //echo $addrecord;
	  $result = mysql_query($addrecord) or die(mysql_error());
	  
	  if ($result) {
	  ?>
	  <script type="text/javascript">
	  	window.location = "../login/index.php"
	  </script>
	  <?php }  
?>
