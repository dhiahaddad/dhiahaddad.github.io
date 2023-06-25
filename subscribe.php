<!-- subscribe.php -->
<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "subscription_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$age = $_POST['age'];

// Insert data into the database
$sql = "INSERT INTO subscribers (name, email, sex, age) VALUES ('$name', '$email', '$sex', '$age')";

if ($conn->query($sql) === TRUE) {
    echo "Subscription successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
