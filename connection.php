<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "test_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      } 
?>  