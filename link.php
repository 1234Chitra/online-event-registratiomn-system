<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "infothon";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());

$sql = "INSERT INTO project (fname, mname, lname,department,  gender, contact , address, email)
VALUES ('$fname', '$mname', '$lname', '$department', '$gender','$contact' , '$address', '$email')";

if (mysqli_query($conn, $sql)) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>