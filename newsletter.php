<?php
$servername = "localhost";
$username = "id13191005_storageemail";
$password = "7XRK11ISWkSRG4^=";
$database = "id13191005_emaildb";

$fname = stripslasher($_POST['fname']);
$lname = stripslasher($_POST['lname']);
$displayContents = $_REQUEST[""];
$useremail = $_POST['email'];
$TableName = "subscribers";

/*
if (preg_match("~([a-zA-Z0-9!#$%&'*+-/=?^_`{|}~])@([a-zA-Z0-9-]).([a-zA-Z0-9]{2,4})~", $useremail)) {
    $useremail = $_POST['email'];
} else {
    echo "the email $useremail is invalid";
}
*/

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$SQLs = "INSERT INTO subscribers (fname, lname, Semail) VALUES ($fname, $lname, $useremail)";


if (mysqli_query($conn, $SQLs)) {
echo "<p>Successfully added the record.</p>";
}
else {     
echo "<p>Unable to execute the query.</p>";
}


?>
