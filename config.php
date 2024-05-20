<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arikel";

//1st func
function ambilJudulDariId($conn, $id) {
  $sql = "SELECT Judul FROM cloverartikel WHERE id=" . $id;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    return $row["Judul"];
  } else {
    return "0 results";
  }
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$judul1 = ambilJudulDariId($conn, 1);
$judul2 = ambilJudulDariId($conn, 2);
$judul3 = ambilJudulDariId($conn, 3);


//2nd func
function ambilDeskripsiDariId($conn, $id) {
    $sql = "SELECT Deskripsi FROM cloverartikel WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["Deskripsi"];
    } else {
      return "0 results";
    }
  }
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Call functions with different IDs
  $desk1 = ambilDeskripsiDariId($conn, 1);
  $desk2 = ambilDeskripsiDariId($conn, 2);
  $desk3 = ambilDeskripsiDariId($conn, 3);

//3rd func
function ambilURLDariId($conn, $id) {
    $sql = "SELECT Url FROM cloverartikel WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["Url"];
    } else {
      return "0 results";
    }
  }
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Call functions with different IDs
  $link1 = ambilURLDariId($conn, 1);
  $link2 = ambilURLDariId($conn, 2);
  $link3 = ambilURLDariId($conn, 3);

$conn->close();
?>