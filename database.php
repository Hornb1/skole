<?php 
$db = mysql_connect("localhost","root","");
if(!$db)
	// Change from die to error handling
	die("No database found");
if(!mysql_select_db("userdb",$db))
	// Change from die to error handling
	die("No database selected");
?>