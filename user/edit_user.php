<?php 
include('../include/dbconnect.php');
$user = $_SESSION['username'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

  <?php 
	  $query = "SELECT * FROM user a LEFT JOIN level b ON a.level_id=b.level_id WHERE username='$user' ORDER BY name";
	  $result = mysql_query($query) or die(mysql_error());
	  $numrow = mysql_num_rows($result);
	  $row = mysql_fetch_array($result);
	  ?>
  <tr>
    <td>
    <form name="edit_user" method="post" action="db_edit_user.php" enctype="multipart/form-data">
    <table width="80%" border="10" align="center" background="white">
      <tr>
        <td width="16%"><font color="black">Name</font></td>  
         <td><?php echo $row['name']; ?>
        	<font color="black"><input type="hidden" name="name" size="50" value="<?php echo $row['name']; ?>" /></font></td> 
		</tr>
      </tr>  
      <tr>
      	<td><font color="black">Applicant ID</font></td>
            <td><?php echo $row['applicantID']; ?>
        	<input type="hidden" name="applicantID" size="50" value="<?php echo $row['applicantID']; ?>" /></td> 
		</tr>
      </tr> 
      <tr> 
        <td width="16%"><font color="black">Faculty/Department</font></td>
			 <td><?php echo $row['faculty']; ?>
        	<input type="hidden" name="faculty" size="50" value="<?php echo $row['faculty']; ?>" /></td> 
		</tr>
      </tr>
      <tr>
        <td width="16%"><font color="black">E-mail</font></td>
         <td><?php echo $row['email']; ?>
        	<input type="hidden" name="email" size="50" value="<?php echo $row['email']; ?>" /></td> 
		</tr>
      </tr>
      <tr>
        <td width="16%"><font color="black">Phone No</font></td>
         <td><?php echo $row['telephone']; ?>
        	<input type="hidden" name="telephone" size="50" value="<?php echo $row['telephone']; ?>" /></td> 
		</tr>
      </tr>
      <tr>
        <td width="16%"><font color="black">Username</font></td>
        <td><?php echo $row['username']; ?>
        	<input type="hidden" name="username" size="50" value="<?php echo $row['username']; ?>" /></td> 
		</tr>
      <tr>
        <td width="16%"><font color="black">Password</font></td>
         <td><?php echo $row['password']; ?>
        	<input type="hidden" name="password" size="50" value="<?php echo $row['password']; ?>" /></td> 
		</tr>
      </tr>
      <tr> 
        <td width="16%"><font color="black">User Level</font></td>
         <td><?php echo $row['level_id']; ?>
        	<input type="hidden" name="level_id" size="50" value="<?php echo $row['level_id']; ?>" /></td> 
		</tr>
      </tr>
      <tr> 
        <td colspan="2"><input type="hidden" name="user" size="50" value="<?php echo $user;?>" />
        <input type="hidden" name="applicantID" value="<?php echo $row['applicantID'];?>"></td>
      </tr>
	  <!--<tr> 
        <td colspan="2"><input type="submit" name="submit" value=" Save " />
        <input type="button" name="cancel" value=" Cancel " onclick="location.href='index.php'" /></td>
      </tr>-->
    </table>
    </form>
    </td>
  </tr>
</table>
</body>
</html>