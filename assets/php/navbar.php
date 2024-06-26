<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGABATO</title>
    
    <base href="../../">
    <link rel="stylesheet" href="/css/navbar.css"> <!-- change the path to css/navbar.css -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/lib/mediaquery.css">
    <link rel="icon" href="/img/logo_mangabato.png" type="image/-icon">
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
                <li><a class="logo" href="#home">
                        <img src="img/logo_mangabato.png" alt="logo">MANGABATO</a></li>
                <li><a href="/assets/profile.php">Profile</a></li>
                <li><a href="assets/publisher/publish.php">Publish</a></li>
                <li><a href="assets/aboutus.php">About us</a></li>
            </ul>
        </div>
        <div class="nav_link">
            <ul>
                <li class="logo"><a href="#home">
                        <img src="img/logo_mangabato.png" alt="logo" width="50px">MANGABATO</a>
                </li>
                <li><a href="assets/login.php">
                        <button class="full-rounded">
                            <span>Login</span>
                            <div class="border full-rounded"></div>
                        </button>
                    </a>
                </li>
                <li class="sideburger">
                    <a href="/assets/profile.php"><i class='bx bx-user-circle' ></i> Profile</a>
                </li>
                <li class="sideburger">
                    <a href="/assets/publisher/publish.php"><i class='bx bx-book-open' ></i> Publish</a>
                </li>
                <li id="hamburger" onclick=showSidebar()><a href="#">
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