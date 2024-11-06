<?php
$usrename = "root";
$servername = "localhost";
$password = "";
$database = "farmer";

$fname = $_GET["fname"];
$fpwd = $_GET["fpwd"];
$femail = $_GET["femail"];

$conn = new mysqli($servername, $usrename, $password, $database);
if ($conn->connect_error) {
    echo "error: " . $conn->connect_error;
}

$sql = "INSERT INTO farmer_details (name,password,email) VALUES ('" . $fname . "','" . $fpwd. "','" . $femail . "')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
