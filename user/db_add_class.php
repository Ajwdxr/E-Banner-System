<?php 
include('../include/dbconnect.php');

$i=0;

foreach ( $_POST as $sForm => $value )
{
	$postedValue = htmlspecialchars( stripslashes( $value ), ENT_QUOTES ) ;
    $valuearr[$i] = $postedValue; 
$i++;
}
//echo $valuearr[0].'<br>'.$_FILES["file"]["name"].'<br>'.$valuearr[1].'<br>'.$valuearr[2].'<br>'.$valuearr[3].'<br>'.$valuearr[4].'<br>'.$valuearr[5].'<br>';
$path = 'C:\xampp\htdocs\tiket\images/';
$pic = $_FILES["file"]["name"];
$tmplocation = $_FILES["file"]["tmp_name"];
  
	if (file_exists($path . $pic))
    {
			  $addrecord = "INSERT INTO class (webRes, webDesc, webApplyDate, webEventDate, webImg, webStatus, webComment) VALUES('700x400', '$valuearr[1]', '$valuearr[2]', '$valuearr[3]',  '$valuearr[4]','Pending', '$valuearr[6]')";
			//echo $addrecord;
			$result = mysql_query($addrecord) or die(mysql_error());

		if ($result) {
		?>
		<script type="text/javascript">
			window.location = "view_class.php?site=05"
		</script>
		<?php } 
    }
    else
    {
      move_uploaded_file($tmplocation, $path . $pic);
	  
	  $addrecord = "INSERT INTO class (webRes, webDesc, webApplyDate, webEventDate, webImg, webStatus, webComment) VALUES('700x400', '$valuearr[1]', '$valuearr[2]', '$valuearr[3]',  '$valuearr[4]','Pending', '$valuearr[6]')";
	//echo $addrecord;
	$result = mysql_query($addrecord) or die(mysql_error());
	
	if ($result) {
	  ?>
	  <script type="text/javascript">
	  	window.location = "view_class.php?site=05"
	  </script>
	  <?php }       
     }
?>