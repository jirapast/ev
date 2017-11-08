<?php
	
	include '_global.php';

    // -------------------------------------------------------------------------------------------------------------------------

	// parameter from client
	$login_u = $_POST['index_u'];
	$login_p = $_POST['index_p'];

    // -------------------------------------------------------------------------------------------------------------------------


	$sql_select = " SELECT * FROM USER WHERE name='" . $login_u . "' AND pass = '" . $login_p . "' ";

	$result = $conn->query($sql_select);
	$count  = $result->num_rows;

	if (0 < $count) {
		echo "$ login : access granted!." . "<br>";
		echo "$ login : user = " . $login_u . "<br>";
		
		if(0 == strcmp($login_u, 'admin')) {
			include '_admin.php';
		}

		if(0 == strcmp($login_u, 'iot')) {
			include '_iot.php';
		}

	
	} else {
		echo ">> access denied!.";
	}

	$result->free();
	$conn->close();	
?>