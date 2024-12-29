<?php
var_dump($_POST);
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $post_content = $_POST['post_content'];

    // Insert post into the database
    $sql = "INSERT INTO posts (user_name, content) VALUES ('$user_name', '$post_content')";
    if ($conn->query($sql) === TRUE) {
        // Success
        echo "Post added successfully";
    } else {
        // Error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
