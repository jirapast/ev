<?php
	
	include '_global.php';

    // -------------------------------------------------------------------------------------------------------------------------

    // parameter from client
    $acc_u = $_POST['reg_u'];
    $acc_p = $_POST['reg_p'];

    // -------------------------------------------------------------------------------------------------------------------------


    $sql_select = " SELECT * FROM USER WHERE name='" . $acc_u   . "' ";
    
	$result = $conn->query($sql_select);
	$count  = $result->num_rows;

    if(0 == $count) {
        echo 'USER is okay!'.'<br>';

        $sql_insert = " INSERT INTO USER (name, pass) VALUES ('" . $acc_u . "','" . $acc_p . "') ";
       
        if ($conn->query($sql_insert) === TRUE) {
            echo "New record created successfully".'<br>';
        } else {
            $e = "!! Error: " . $sql . $conn->error;
            echo "<script type=text/javascript>alert('" . $e . "')</script>";                        
        }

    } else {
        $e = 'USER is already exist!';
        echo $e;
        // echo "<script type=text/javascript>alert('" . $e . "')</script>";            
    }

    // -------------------------------------------------------------------------------------------------------------------------


	$conn->close();
?>