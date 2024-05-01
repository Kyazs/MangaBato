<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "mangabato";

//CREATE CONNECTION
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    if (isset($_POST['submit'])) {

        //RETRIEVE FORM DATA
        $user = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $biography = $_POST['biography'];

        $profilename = $_FILES['profile']['name'];
        //? to store the temporary name of the profile image
        $profileTempName = $_FILES['profile']['tmp_name'];
        //? to rename the profile image using uniqid + profilename
        $profileNewName = uniqid() . "-" . $profilename;
        //? to store the profile image in the img folder
        $profilePath = "../../../img/user_profile/" . $profileNewName;

        if (move_uploaded_file($profileTempName, $profilePath)) {

            $stmt = $conn->prepare("SELECT * FROM user WHERE username =? OR email =?");
            $stmt->bind_param("ss", $user, $email);
            $stmt->execute();
            $results = $stmt->get_result();

            if ($results->num_rows > 0) {
                $_SESSION['duplicate'] = true;
                header("Location: /assets/login.php");
                exit();
            }
            $stmt = $conn->prepare("INSERT INTO user(username, email, password, profile_picture, biography) VALUES (?,?,?,?,?)");
            $stmt->bind_param("sssss", $user, $email, $pass, $profilePath, $biography);
            $stmt->execute();
            // Check for successful insertion
            if ($stmt->affected_rows > 0) {
                //? message to show that the manga has been uploaded when redirected
                $_SESSION['created'] = true;
            } else {
                $_SESSION['unsucessfull'] = true;
            }
            $stmt->close();
        } else {
            $_SESSION['unsucessfull'] = true;
        }
    } else {
        $_SESSION['unsuccesfull'] = true;
    }
    $conn->close();
    header("Location: /assets/login.php");
    exit();
}
