<?php
    $host="50.62.209.161"; // Host Name
    $port_number="3306"; // Port Number
    $username="inspire"; // Mysql Username
    $password="x7H5c$8c"; // Mysql Password
    $db_name="inspirecenter_onedayinstatistics2018"; // Database Name

    // Connection to database with the required information   
    $conn = mysqli_connect("$host", "$username", "$password", "$db_name", "$port_number");

    if (!$conn) {
        die ("Connection failed: " . mysqli_connect_error());
    }
    
?>
