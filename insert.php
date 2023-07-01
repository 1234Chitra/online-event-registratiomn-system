<?php
include dbconnect.php;

$username=$_POST[username];
$password= $_POST[password];

$sql=INSERT INTO `login` (`id`, `username`, `password`) VALUES (NULL, $username, $password);

if (mysqli_query($conn, $sql)) {
  echo New record created successfully;
} else {
  echo Error:  . $sql . <br> . mysqli_error($conn);

}
mysqli_close($conn);

?>

