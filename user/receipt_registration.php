<?php 
include('../include/dbconnect.php');
$user = $_SESSION['username'];
$regid = $_GET['regid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
h1   {color: blue;}
p    {color: white;}
</style>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <?php 
	  
	 $query = "SELECT * FROM registration r, class c, user u
	 WHERE r.register_id ='$regid' AND r.class_id = c.class_id AND u.username='$user'";
	 $result = mysql_query($query) or die(mysql_error());
	 $numrow = mysql_num_rows($result);
	 $row = mysql_fetch_array($result);
	  
	 $ball = ($row['class_price'])-($row['deposit']);  
  ?>
  <tr>
    <td>
      <table width="100%" border="0" align="center">
	  <tr>
        <th colspan="2" bgcolor="#000000" align="center"><p>Chantek Sekali Customer Receipt</p></th>  
      </tr>  
      <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Customer Name</th>  
        <td width="80%" bgcolor="#ffffe6"><?php echo $row['name']; ?></td>  
      </tr>   
	  <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Class Name</th>
        <td width="80%" bgcolor="#ffffe6"><?php echo $row['class_name']; ?></td>
      </tr>
	  <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Class Date</th>
        <td width="80%" bgcolor="#ffffe6"><?php echo $row['class_date']; ?></td>
      </tr>
	  <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Class Price</th>
        <td width="80%" bgcolor="#ffffe6">RM <?php echo $row['class_price']; ?></td>
      </tr>
      <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Registration Date</th>  
        <td width="80%" bgcolor="#ffffe6"><?php echo $row['register_date']; ?></td>  
      </tr>
	  <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Registration Status</th>  
        <td width="80%" bgcolor="#ffffe6"><?php echo $row['register_status']; ?></td>  
      </tr>
      <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Deposit</th>  
        <td width="80%" bgcolor="#ffffe6">RM <?php echo $row['deposit']; ?></td>  
      </tr>
	  <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Balance</th>  
        <td width="80%" bgcolor="#ffffe6">RM <?php echo $ball; ?>.00</td>  
      </tr>
	  <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Total Price</th>  
        <td width="80%" bgcolor="#ffffe6">RM <?php echo $row['class_price']; ?></td>  
      </tr>
      <tr> 
	    <td bgcolor="#f2f2f2">&nbsp;</td>
        <td colspan="7" bgcolor="#ffffe6">&nbsp;</td>
      </tr>
      <tr> 
        <td bgcolor="#f2f2f2">
		 <input type="button" value=" Print" onclick="window.print()"/>
        </td>
		<td colspan="7" bgcolor="#ffffe6">&nbsp;</td>
      </tr>
	  <tr>
        <td colspan="8" bgcolor="black" align="center">
	    <font color="white" size="2">
	      Chantek Sekali Cake & Confectionary
	    </font>
	    </td>
      </tr>
      </table>
    </form>
    </td>
  </tr>
</table>
</body>
</html>