<?php

	include("connection.php");
	session_start();
	
	function display_confirm(){
		$q = mysql_query("Select * from book");
		echo $q;
		
		
		
	}
	
	





?>