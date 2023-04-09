<?php
function contents()
{ 
	$site = "";
	
	if(isset($_GET['site'])){$site = $_GET['site'];}
	
	switch($site)
	{ 
		case "01": 
		include("edit_user.php"); 
		break;
		
		case "02": 
		include("view_product.php"); 
		break;
		
		case "03": 
		include("view_order.php"); 
		break;
		
		case "04": 
		include("add_order.php"); 
		break;
		
		case "05": 
		include("view_class.php"); 
		break;
		
		case "06": 
		include("add_classregistration.php"); 
		break;
		
		case "07": 
		include("view_classregistration.php"); 
		break;
		
		case "08": 
		include("receipt.php"); 
		break;
		
		case "09": 
		include("receipt_registration.php"); 
		break;
		
	} 
} 
?>

