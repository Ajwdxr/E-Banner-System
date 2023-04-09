<?php 
include('../include/dbconnect.php');
$user = $_SESSION['username'];
$orderid = $_GET['orderid'];
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
	  
	 $query = "SELECT * FROM booking b, product p, user u
	 WHERE b.order_id ='$orderid' AND b.product_id = p.product_id AND u.username='$user'";
	 $result = mysql_query($query) or die(mysql_error());
	 $numrow = mysql_num_rows($result);
	 $row = mysql_fetch_array($result);
	  
	 $total = $row['quantity']*$row['product_price'];  
  ?>
  <tr>
    <td>
      <table width="100%" border="10" align="center">
	  <tr>
        <th colspan="2" bgcolor="#000000" align="center"><p>Chantek Sekali Customer Receipt</p></th>  
      </tr>  
      <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Customer Name</th>  
        <td width="80%" bgcolor="#ffffe6"><?php echo $row['name']; ?></td>  
      </tr>   
      <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Product Name</th>
        <td width="80%" bgcolor="#ffffe6"><?php echo $row['product_name']; ?></td>
      </tr>
	  <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Product Category</th>
        <td width="80%" bgcolor="#ffffe6"><?php echo $row['product_category']; ?></td>
      </tr>
	  <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Price Per Unit</th>
        <td width="80%" bgcolor="#ffffe6">RM <?php echo $row['product_price']; ?></td>
      </tr>
      <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Order Date</th>  
        <td width="80%" bgcolor="#ffffe6"><?php echo $row['order_date']; ?></td>  
      </tr>
      <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Order Pickup Date</th>  
        <td width="80%" bgcolor="#ffffe6"><?php echo $row['order_pickup_date']; ?></td>  
      </tr>
      <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Quantity</th>  
        <td width="80%" bgcolor="#ffffe6"><?php echo $row['quantity']; ?></td>  
      </tr>
	  <tr>
        <th width="20%" bgcolor="#f2f2f2" align="left">Total Price</th>  
        <td width="80%" bgcolor="#ffffe6">RM <?php echo $total; ?>.00</td>  
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