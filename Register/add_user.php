<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <form name="add_user" method="post" action="db_add_user.php" enctype="multipart/form-data">
    <table width="100%" border="0" align="center">
      <tr>
        <td width="16%">Name</td>  
        <td width="84%"><input type="text" name="name" size="50" /></td>  
      </tr>  
   	 <tr>
      	<td><font color="white">Applicant ID</font></td>
        <td width="84%"><input type="text" name="applicantID" size="50"  placeholder="Student ID / Staff ID" /></td>
      </tr>   
      <tr> 
        <td width="16%"><font color="white">Faculty/Department</font></td>
        <td width="84%"><input type="text" name="faculty" size="50" placeholder="Faculty/Department" /></td>
      </tr>
      <tr>
        <td width="16%"><font color="white">E-mail:</font></td>
        <td width="84%"><input type="text" name="email" size="50" placeholder="E-mail Address" /></td>
      </tr>
      <tr>
        <td width="16%">Phone No</td>
        <td><input type="text" name="phone" size="50" /></td>
      </tr>
      <tr>
        <td width="16%">Username</td>
        <td><input type="text" name="username" size="50" /></td> 
      </tr>
      <tr>
        <td width="16%">Password</td>
        <td><input type="password" name="password" size="50" /></td> 
      </tr>
      <tr> 
        <td width="16%">User Level</td>
        <td>
        <select name="level">
            <option value="2">Staff</option>
            <option value="3">User</option>
        </select>
        </td>
      </tr>
      <tr> 
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr> 
        <td colspan="2"><input type="submit" name="submit" value=" Save " />
        <input type="button" name="cancel" value=" Cancel " onclick="location.href='user.php?site=01'" /></td>
      </tr>
    </table>
    </form>
    </td>
  </tr>
</table>
</body>
</html>