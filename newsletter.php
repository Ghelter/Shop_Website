<?php
$servername = "localhost";
$username = "id13191005_storageemail";
$password = "7XRK11ISWkSRG4^=";
$database = "id13191005_emaildb";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$useremail = $_POST['email'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
/*
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
*/
//$conn = mysqli_connect($servername, $username, $password, $database);

$SQLs = "INSERT INTO subscribers (fname, lname, Semail) VALUES ('$fname', '$lname', '$useremail');";
/*
if (mysqli_query($conn, $SQLs)) {
echo "<p>Successfully added the record.</p>";
}
else {     
echo "<p>Unable to execute the query.</p>";
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="thankyou.css">
<title>Thank you!</title>
</head>
<body>

<p>Thank you for subscribing to our Newsletters!</p>

<a href="index.html">Back To HomePage</a>

</body>
</html>
