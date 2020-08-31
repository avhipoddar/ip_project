<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="sports";

    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        // echo "Connection Established Succesfully!<br>";
        die("Connection Failed Because --> <br>" . mysqli_connect_error());
    }
?>