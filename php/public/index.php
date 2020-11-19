<?php
/**
 * Test
 */
$servername = getenv('DB_HOST');
$username = "root";
$password = "test";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT col1, col2 FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "col1: " . $row["col1"]. " - col2: " . $row["col2"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();