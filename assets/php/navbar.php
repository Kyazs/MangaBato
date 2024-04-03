<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGABATO</title>
    
    <link rel="stylesheet" href="../../css/navbar.css"> <!-- change the path to css/navbar.css -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../lib/mediaquery.css">
    <link rel="icon" href="../../img/logo_mangabato.png" type="image/-icon">
</head>

<body>
    <nav class="responsive-nav">
        <div class="sidebar">
            <ul>
                <li onclick=closeSidebar()>
                    <button class="close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"
                            fill="red">
                            <path
                                d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                        </svg></button>
                </li>
                <li><a class="logo" href="../../index.html">
                        <img src="../../img/logo_mangabato.png" alt="logo">MANGABATO</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Publish</a></li>
                <li><a class="logout" href="../../index.html">Logout</a></li>
                <li><a href="#">About us</a></li>
            </ul>
        </div>
        <div class="nav_link">
            <ul>
                <li class="logo"><a href="../../index.html">
                        <img src="../../img/logo_mangabato.png" alt="logo" width="50px">MANGABATO</a></li>
                <li><a href="../login.php">
                        <button class="full-rounded">
                            <span>Login</span>
                            <div class="border full-rounded"></div>
                        </button>
                    </a></li>
                <li onclick=showSidebar()><a href="#">
                        <button class="full-rounded">
                            <span class="menu"><svg xmlns="http://www.w3.org/2000/svg" height="20"
                                    viewBox="0 -960 960 960" width="20" fill="black">
                                    <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                                </svg></span>
                            <div class="border full-rounded"></div>
                        </button></a>
                </li>
            </ul>
        </div>

    </nav>

</body>

 <script src="../../js/navbar.js"></script> <!-- change the path to js/navbar.js -->
</html>