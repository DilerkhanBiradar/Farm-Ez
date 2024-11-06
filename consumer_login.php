<?php
$username = "root";
$servername = "localhost";
$password = "your_mysql_password";
$database = "consumer";

$email = $_POST["email"];
$password = $_POST["pwd"];

$conn = new mysqli($servername, $username, $password, $database);

GRANT SELECT, INSERT, UPDATE, DELETE ON consumer.* TO 'root'@'localhost' IDENTIFIED BY 'your_mysql_password';
FLUSH PRIVILEGES;



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM consumer_details WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, login successful
    echo "Login successful. Redirecting to index.html...";
    // You can add a redirect header here if needed
} else {
    // User not found or incorrect credentials
    echo "Login failed. Please check your email and password.";
}

$conn->close();
?>
