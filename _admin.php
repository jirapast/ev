<?php
    
	$result_admin = $conn->query("SELECT * FROM USER");
    
    echo "___ name ___" . "<br>";
    
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
    echo '<script>';
    echo    '$(document).ready(function(){';
    echo        '$(".b1").click(function(){';
    echo            'alert(\'!!!!1111\');';
    echo        '});';
    echo    '});';
    
    echo    '$(document).ready(function(){';
    echo        '$(".b2").click(function(){';
    echo            'alert(\'!!!!2222\');';
    echo        '});';
    echo    '});';
    
    echo '</script>';
   
    while ($row_admin = $result_admin->fetch_assoc()) {     
        echo '<button class=\'b1\' id=\'\'>1</button>';
        echo '<button class=\'b2\' id=\'\'>2</button>';
        echo $row_admin['name'];
        echo '<br>';
    }

    $result_admin->free();
?>