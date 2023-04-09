<?php
// Inialize session
session_start();

// Include database connection settings
include('../include/dbconnect.php');

$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT username, password, level_id FROM user WHERE username='$username' AND password='$password'");

$row = mysql_fetch_array($login);
$level = $row['level_id'];

    if($level==1) { 
		$_SESSION['username'] = $row['username'];
		// Jump to secured page
        header('Location: ../admin'); 
    } 
	elseif($level==2) {
		$_SESSION['username'] = $row['username'];
		// Jump to secured page
        header('Location: ../user');
    }
	elseif($level==3) {
		$_SESSION['username'] = $row['username'];
		// Jump to secured page
        header('Location: ../user');
    }
    else {
	header('Location: index.php');
	}
    mysql_close();
?>