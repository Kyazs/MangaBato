<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //RETRIEVE FORM DATA
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $admin = '1';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mangabato";

    //CREATE CONNECTION

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {

        // validate login authentication
        $query = "SELECT * FROM user WHERE  username = '$user' AND password = '$pass' AND is_admin = '$admin'";

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            //redirect to admin page
            header("Location: ./dashboard.php");
        } else {
            $errorMessage = 'Invalid username or password.';
            $_SESSION['error_message'] = $errorMessage; // Set error message in session
        }
    }

    header("Location: /admin.php");
    exit();
}
