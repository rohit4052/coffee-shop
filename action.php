<?php

$a = $_POST['name'];

$b = $_POST['message'];

$servername="localhost";
$username="root";
$password="";
$dbname="coffee";
$conn = new mysqli($servername,$username,$password,$dbname);

$sql = "insert into data (name,message) values ('$a','$b')";

$run=mysqli_query($conn,$sql);

$conn->close();

header("refresh:0;url=contact.html");

?>
