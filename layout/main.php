<?php 
// Display message if there is one in session data
if(isset($_SESSION['message'])) {
	// Display message
	echo "<div class=\"alert alert-error\">{$_SESSION['message']}</div>";
	
	// Remove message from session
	unset($_SESSION['message']);
}

// Store the 'p' parameter from the QS into a variable
if(isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'list_bands';
}

include("views/$p.php");