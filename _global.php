<?php
    
    // variable for DB
	$db_server     = 'localhost';
	$db_user       = 'x';
	$db_pass       = 'WEG_MySql12345';
	$db_name       = 'USER_DB';
	
	// $db_table      = 'USER';
	// $db_table_col1 = 'name';
	// $db_table_col2 = 'pass';

    // Create connection
	$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
	
	// Check connection
	if ($conn->connect_error) {
		die("$ db : Connection failed: " . $conn->connect_error);
	} 
	echo    "$ db : Connected successfully" . "<br>";

?>