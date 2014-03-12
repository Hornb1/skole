<?php
	session_start();

	require_once 'includes/database.php';
	
	if($_POST) {
	// Sjekk om passord matcher det i databasen
		$password = SHA1(mysql_real_escape_string($_POST['password']));
		$db_pass = "SELECT * FROM pj211_users WHERE id='1'";
		$db_pass1 = mysql_query($db_pass);
		$db_pass2 = mysql_fetch_array($db_pass1);
		
		if($password == $db_pass2['password']) {
		// Vi har en match, bruker sendes videre til studietesten
			$_SESSION['authenticated'] = true;
			header('Location:studietest.php');
			exit;
		} else {
		// Sorry, prøv igjen.
			echo "Feil passord. <a href='index.php'>Prøv igjen.</a>";
		}
	}
?>