<?php      
    $host = "localhost";  
    $user = "root";  
    $password = 'Fryalog';  
    $db_name = "new_schema";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>   