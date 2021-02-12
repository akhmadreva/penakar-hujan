<?php
    // filename: koneksi.php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "penakar_hujan";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Check connection
    if($conn == false) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>