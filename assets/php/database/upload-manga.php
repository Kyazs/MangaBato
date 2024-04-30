<?php
session_start();
// ? DATABASE FOR THE UPLOADED MANGA
$servername = "localhost"; // Change this to your server name if different
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password if you have set one
$database = "mangabato"; // Change this to your database name



//! connect to UPLOAD MANGA DATABASE
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection failed : ' . $conn->connect_error);
} else {

    if (isset($_POST['submit'])) {
        
        //? Variables from the form
        $title = $_POST['title'];
        $genre = $_POST['genre'];
        $typeOfManga = $_POST['type'];
        $synopsis = $_POST['synopsis'];
        $chapterNumber = $_POST['chapter'];

        //! Variables for the upladed Manga Cover
        $coverName = $_FILES['mangaCover']['name'];
        //? to store the temporary name of the cover image
        $coverTempName = $_FILES['mangaCover']['tmp_name'];
        //? to rename the cover image using uniqid + coverName
        $coverNewName = uniqid() . "-" . $coverName;
        //? to store the cover image in the img folder
        $coverPath = "img/" . $coverNewName;

        if (move_uploaded_file($coverTempName, $coverPath)) {

            $chaptName = $_FILES['chapterfile']['name'];
            $chaptTempName = $_FILES['chapterfile']['tmp_name'];
            $chaptNewName = uniqid() . "-" . $chaptName;
            $chaptPath = "chapterFile/" . $chaptNewName;

            if (move_uploaded_file($chaptTempName, $chaptPath)) {
                $stmt = $conn->prepare("INSERT INTO upload_manga(title, mangaCover, genre, typeOfManga, synopsis, chapterNumber, chapterFile) VALUES (?,?,?,?,?,?,?)");
                $stmt->bind_param("sssssis", $title, $coverNewName, $genre, $typeOfManga, $synopsis, $chapterNumber, $chaptNewName);
                $stmt->execute();
                // Check for successful insertion
                if ($stmt->affected_rows > 0) {
                    //? message to show that the manga has been uploaded when redirected
                    $_SESSION['uploadSuccess'] = true;
                } else {
                    echo "Error inserting manga: " . $stmt->error;
                }
                $stmt->close();
            }
        } else {
            echo "Error uploading chapter File.";
        }
    } else {
        echo "Errpr Uploading Cover File.";
    }
    $conn->close();
    //todo AFTER EXECUTING THE DATABASE, REDIRECT TO PUBLISH-MANGA.PHP
    header("Location: ../../publisher/publish-manga.php");
    exit();
}
?>
