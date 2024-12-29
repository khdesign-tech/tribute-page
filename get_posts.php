<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple_blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve posts from the database
$sql = "SELECT * FROM posts ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='post'>";
        echo "<strong>" . $row["user_name"] . ":</strong> " . $row["content"];
        echo "</div>";
    }
} else {
    echo "No posts yet.";
}

$conn->close();
?>
