<?php
$conn = mysqli_connect("localhost", "root", "", "web_gis_evi");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
