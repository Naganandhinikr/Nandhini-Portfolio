<?php
if(isset($_POST['submit']));

{
$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['message'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";
}
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO  port_datas (name,email,subject,message)
VALUES ('".$name."','".$email."','".$sub."','".$msg."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>