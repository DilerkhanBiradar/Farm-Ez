<?php
$usrename = "root";
$servername = "localhost";
$password = "";
$database = "consumer";

$cname = $_GET["cname"];
$cpwd = $_GET["cpwd"];
$cemail = $_GET["cemail"];

$conn = new mysqli($servername, $usrename, $password, $database);
if ($conn->connect_error) {
    echo "error: " . $conn->connect_error;
}

$sql = "INSERT INTO consumer_details (name,password,email) VALUES ('" . $cname . "','" . $cpwd. "','" . $cemail . "')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
