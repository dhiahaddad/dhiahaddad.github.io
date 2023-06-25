<!-- statistics.php -->
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

// Get the number of men and women
$sql = "SELECT sex, COUNT(*) AS count FROM subscribers GROUP BY sex";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Sex: " . $row["sex"] . ", Count: " . $row["count"] . "<br>";
    }
} else {
    echo "No subscribers found";
}

$conn->close();
?>
