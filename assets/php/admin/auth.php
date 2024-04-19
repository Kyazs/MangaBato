<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //RETRIEVE FORM DATA
    $user = $_POST['username'];
    $pass = $_POST['password'];

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
        $query = "SELECT * FROM admin WHERE  username = '$user' AND password = '$pass'";

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            //redirect to admin page
            header("Location: ../../admin.php");
        } else {
            exit("Invalid username or password");
        }
    }
}
?>
