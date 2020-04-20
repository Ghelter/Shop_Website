<?php
$servername = "localhost";
$username = "id13191005_storageemail";
$password = "7XRK11ISWkSRG4^=";
$database = "id13191005_emaildb";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
    

//close Connection
mysqli_close($conn);
?>