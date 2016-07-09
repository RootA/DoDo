<?php

/**
* 
*/

		$conn = mysqli_connect("localhost", "root", "onepiece","Dodo") or die("Could not connect.");
		mysqli_set_charset($conn,"utf8");
		if(!$conn) { 	
			die("no db");
		}
		if(!get_magic_quotes_gpc())
		{
		  $_GET = array_map('mysqli_real_escape_string', $_GET); 
		  $_POST = array_map('mysqli_real_escape_string', $_POST); 
		  $_COOKIE = array_map('mysqli_real_escape_string', $_COOKIE);
		}
		else
		{  
		   $_GET = array_map('stripslashes', $_GET); 
		   $_POST = array_map('stripslashes', $_POST); 
		   $_COOKIE = array_map('stripslashes', $_COOKIE);
		   $_GET = array_map('mysql_real_escape_string', $_GET); 
		   $_POST = array_map('mysql_real_escape_string', $_POST); 
		   $_COOKIE = array_map('mysql_real_escape_string', $_COOKIE);
		}


