<?php
    $server_address="localhost";
    $username="root";
    $password="";
    $database_name="university";

    $conn = mysqli_connect($server_address, $username, $password, $database_name);

    if (!$conn){
        die("Connection error".mysqli_connect_error());
    }

?>