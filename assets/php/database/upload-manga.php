<?php
// ? DATABASE FOR THE UPLOADED MANGA
$servername = "localhost"; // Change this to your server name if different
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password if you have set one
$database = "mangabato"; // Change this to your database name

$title = $_POST['title'];
// connect to UPLOAD MANGA DATABASE
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO upload_manga(title) VALUES (?)");
    $stmt->bind_param("s", $title);
    $stmt->execute();
    echo "Manga uploaded successfully...";
    $stmt->close();
    $conn->close();
}
