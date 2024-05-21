<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arikel";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(!$connect){
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM cloverartikel";
$result = $connect -> query($query);
?>