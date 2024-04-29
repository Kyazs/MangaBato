<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGABATO</title>


    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="../../../css/navbar.css"> <!-- change the path to css/navbar.css -->
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/maincontent.css">
    <link rel="stylesheet" href="../../../css/footer.css">
    <link rel="stylesheet" href="../../../lib/mediaquery.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../css/footer.css">
    <link rel="icon" href="../../../img/logo_mangabato.png" type="image/-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> <!-- link for the chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

</head>

<body>
    <div class="container">
        <nav id="navbar"></nav>
        <main>
            <div class="aside">
                <div class="aside-container">
                    <div class="profile">
                        <div class="circle"> <img src="../../../img/idkman/riped.jpg" alt=""></div>
                        <h3>ADMIN</h3>
                    </div>
                    <div class="contents">
                        <ul>
                            <li onclick=dashboard()><a id="dash" href="#">Dashboard</a></li>
                            <li onclick=users()><a id="us" href="#">Users</a></li>
                            <li onclick=manga()><a id="man" href="#">Manga</a></li>
                            <li onclick=pending()><a id="pen" href="#">Pending</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="article">
                <div class="dashboard-container">
                    <div class="total">
                        <div class="card">
                            <h3>TOTAL USERS:</h3>
                            <p>123</p>
                        </div>
                        <div class="card">
                            <h3>TOTAL MANGA</h3>
                            <p>123</p>
                        </div>
                        <div class="card">
                            <h3>PENDING MANGA</h3>
                            <p>123</p>
                        </div>
                    </div>
                    <div class="graph">
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                    </div>
                </div>
                <div class="users-container">
                    <div class="table">
                        <table>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th># post</th>
                                <th style="color: darkred;">Suspend</th>
                                <th style="color: darkred;">Remove</th>
                            </tr>
                            <tr>
                                <td>12399</td>
                                <td>Kyazs</td>
                                <td>johncasper.bit@gmail.com</td>
                                <td>*********</td>
                                <td>Administrator</td>
                                <td>12</td>
                                <td>
                                    <span id="suspend" class="material-symbols-outlined" onclick="suspend()">
                                        block
                                    </span>
                                </td>
                                <td><span id="delete" class="material-symbols-outlined" onclick="remove()">
                                        delete_forever
                                    </span></td>
                            </tr>
                            <tr>
                                <td>12399</td>
                                <td>idk man</td>
                                <td>johncasper.bit@gmail.com</td>
                                <td>*********</td>
                                <td>Administrator</td>
                                <td>12</td>
                                <td>
                                    <span id="suspend" class="material-symbols-outlined" onclick="suspend()">
                                        block
                                    </span>
                                </td>
                                <td><span id="delete" class="material-symbols-outlined" onclick="remove()">
                                        delete_forever
                                    </span></td>
                            </tr>
                            <tr>
                                <td>12399</td>

                                <td>dhin123</td>
                                <td>johncasper.bit@gmail.com</td>
                                <td>*********</td>
                                <td>Administrator</td>
                                <td>12</td>
                                <td>
                                    <span id="suspend" class="material-symbols-outlined" onclick="suspend()">
                                        block
                                    </span>
                                </td>
                                <td><span id="delete" class="material-symbols-outlined" onclick="remove()">
                                        delete_forever
                                    </span></td>
                            </tr>
                            <tr>
                                <td>12399</td>

                                <td>les412</td>
                                <td>johncasper.bit@gmail.com</td>
                                <td>*********</td>
                                <td>Administrator</td>
                                <td>12</td>
                                <td>
                                    <span id="suspend" class="material-symbols-outlined" onclick="suspend()">
                                        block
                                    </span>
                                </td>
                                <td><span id="delete" class="material-symbols-outlined" onclick="remove()">
                                        delete_forever
                                    </span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="manga-container">
                    <div class="manga-table">
                        <table>
                            <tr>
                                <th>Manga ID</th>
                                <th>Cover</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Genre</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th style="color: darkred;">Remove</th>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td><img src="../../../img/books/berserk.jpg" alt=""></td>
                                <td><a href="../../mangapage/mangapage.php">Berserk</a></td>
                                <td>Miura Kentaro</td>
                                <td>
                                    <details>
                                        <summary>Genres</summary>
                                        <p>Action - Adventure - Fantasy - Horror - Mature - Seinen - Supernatural - Tragedy</p>
                                    </details>
                                </td>
                                <td>Ongoing</td>
                                <td>Manga</td>
                                <td><span id="deleteto" class="material-symbols-outlined" onclick="remove()">
                                        delete_forever
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td><img src="../../../img/books/gate.jpg" alt=""></td>
                                <td><a href="../../mangapage/mangapage-gate.php">Gate - Jietai Kare No Chi Nite, Kaku Tatakeri</a></td>
                                <td>Yanai Takumi - Sao Satoru</td>
                                <td>
                                    <details>
                                        <summary>Genres</summary>
                                        <p>Action - Adventure - Comedy - Drama - Fantasy - Mature - Romance - Seinen</p>
                                    </details>
                                </td>
                                <td>Ongoing</td>
                                <td>Manga</td>
                                <td><span id="deleteto" class="material-symbols-outlined" onclick="remove()">
                                        delete_forever
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td><img src="../../../img/books/domestic-na-kanojo.jpg" alt=""></td>
                                <td><a href="../../mangapage/mangapage-domestic-.php">Domestic Na Kanojo</a></td>
                                <td>Sasuga Kei</td>
                                <td>
                                    <details>
                                        <summary>Genres</summary>
                                        <p>Drama - Harem - Mature - Romance - School life - Shounen</p>
                                    </details>
                                </td>
                                <td>Ongoing</td>
                                <td>Manga</td>
                                <td><span id="deleteto" class="material-symbols-outlined" onclick="remove()">
                                        delete_forever
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td><img src="../../../img/books/komisan.jpg" alt=""></td>
                                <td><a href="../../mangapage/mangapage-komisan.php">Komi-san wa Komyushou Desu</a></td>
                                <td>Oda Tomohito</td>
                                <td>
                                    <details>
                                        <summary>Genres</summary>
                                        <p>Comedy - Romance - School life - Shounen</p>
                                    </details>
                                </td>
                                <td>Ongoing</td>
                                <td>Manga</td>
                                <td><span id="deleteto" class="material-symbols-outlined" onclick="remove()">
                                        delete_forever
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td><img src="../../../img/books/kingdom.jpg" alt=""></td>
                                <td><a href="../../mangapage/mangapage-kingdom.php">Kingdom</a></td>
                                <td>Oda Tomohito</td>
                                <td>
                                    <details>
                                        <summary>Genres</summary>
                                        <p>Comedy - Romance - School life - Shounen</p>
                                    </details>
                                </td>
                                <td>Ongoing</td>
                                <td>Manga</td>
                                <td><span id="deleteto" class="material-symbols-outlined" onclick="remove()">
                                        delete_forever
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td><img src="../../../img/books/berserk.jpg" alt=""></td>
                                <td><a href="../../mangapage/mangapage.php">Berserk</a></td>
                                <td>Miura Kentaro</td>
                                <td>
                                    <details>
                                        <summary>Genres</summary>
                                        <p>Action - Adventure - Fantasy - Horror - Mature - Seinen - Supernatural - Tragedy</p>
                                    </details>
                                </td>
                                <td>Ongoing</td>
                                <td>Manga</td>
                                <td><span id="deleteto" class="material-symbols-outlined" onclick="remove()">
                                        delete_forever
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="pending-container">
                    <div class="pending-table">
                        <table>
                            <tr>
                                <th>Manga ID</th>
                                <th>Cover</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Genre</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Pending</th>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td><img src="../../../img/books/berserk.jpg" alt=""></td>
                                <td><a href="../../mangapage/mangapage.php">Berserk</a></td>
                                <td>Miura Kentaro</td>
                                <td>
                                    <details>
                                        <summary>Genres</summary>
                                        <p>Action - Adventure - Fantasy - Horror - Mature - Seinen - Supernatural - Tragedy</p>
                                    </details>
                                </td>
                                <td>Ongoing</td>
                                <td>Manga</td>
                                <td><button onclick=alerts()><i class='bx bxs-check-square'></i></button></td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td><img src="../../../img/books/gate.jpg" alt=""></td>
                                <td><a href="../../mangapage/mangapage-gate.php">Gate - Jietai Kare No Chi Nite, Kaku Tatakeri</a></td>
                                <td>Yanai Takumi - Sao Satoru</td>
                                <td>
                                    <details>
                                        <summary>Genres</summary>
                                        <p>Action - Adventure - Comedy - Drama - Fantasy - Mature - Romance - Seinen</p>
                                    </details>
                                </td>
                                <td>Ongoing</td>
                                <td>Manga</td>
                                <td><button onclick=alerts()><i class='bx bxs-check-square'></i></button></td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td><img src="../../../img/books/domestic-na-kanojo.jpg" alt=""></td>
                                <td><a href="../../mangapage/mangapage-domestic-.php">Domestic Na Kanojo</a></td>
                                <td>Sasuga Kei</td>
                                <td>
                                    <details>
                                        <summary>Genres</summary>
                                        <p>Drama - Harem - Mature - Romance - School life - Shounen</p>
                                    </details>
                                </td>
                                <td>Ongoing</td>
                                <td>Manga</td>
                                <td><button onclick=alerts()><i class='bx bxs-check-square'></i></button></td>

                            </tr>
                            <tr>
                                <td>123</td>
                                <td><img src="../../../img/books/komisan.jpg" alt=""></td>
                                <td><a href="../../mangapage/mangapage-komisan.php">Komi-san wa Komyushou Desu</a></td>
                                <td>Oda Tomohito</td>
                                <td>
                                    <details>
                                        <summary>Genres</summary>
                                        <p>Comedy - Romance - School life - Shounen</p>
                                    </details>
                                </td>
                                <td>Ongoing</td>
                                <td>Manga</td>
                                <td><button onclick=alerts()><i class='bx bxs-check-square'></i></button></td>

                            </tr>
                            <tr>
                                <td>123</td>
                                <td><img src="../../../img/books/kingdom.jpg" alt=""></td>
                                <td><a href="../../mangapage/mangapage-kingdom.php">Kingdom</a></td>
                                <td>Oda Tomohito</td>
                                <td>
                                    <details>
                                        <summary>Genres</summary>
                                        <p>Comedy - Romance - School life - Shounen</p>
                                    </details>
                                </td>
                                <td>Ongoing</td>
                                <td>Manga</td>
                                <td><button onclick=alerts()><i class='bx bxs-check-square'></i></button></td>

                            </tr>
                            <tr>
                                <td>123</td>
                                <td><img src="../../../img/books/berserk.jpg" alt=""></td>
                                <td><a href="../../mangapage/mangapage.php">Berserk</a></td>
                                <td>Miura Kentaro</td>
                                <td>
                                    <details>
                                        <summary>Genres</summary>
                                        <p>Action - Adventure - Fantasy - Horror - Mature - Seinen - Supernatural - Tragedy</p>
                                    </details>
                                </td>
                                <td>Ongoing</td>
                                <td>Manga</td>
                                <td><button onclick=alerts()><i class='bx bxs-check-square'></i></button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </main>
        <footer id="footer"></footer>

    </div>

    <script src="../../../js/navbar.js"></script>
    <script type="module">
        //todo SCRIPT TO CONNECT NAVBAR AND FOOTER
        import navbar from '../navbar.js';
        import {
            footer
        } from '../navbar.js';

        const navbarhtml = navbar();
        document.getElementById('navbar').innerHTML = navbarhtml;

        const footerhtml = footer();
        document.getElementById('footer').innerHTML = footerhtml;
    </script>

    <script>
        function alerts() {
            var response = confirm('Do you want to approve this manga?')
            if (response == true) {
                alert('Manga has been approved')
            } else {
                alert('Manga has been rejected')
            }
        }

        function suspend() {
            var respond = confirm('Do you want to suspend this user?')
            if (respond == true) {
                alert('User Has been suspended')
            } else {
                alert('Action cancelled')
            }
        }

        function remove() {
            var respond = confirm('Do you want to Remove this user?')
            if (respond == true) {
                alert('User Has been Removed')
            } else {
                alert('Action cancelled')
            }
        }


        //todo SCRIPT TO SHOW DASHBOARD, USERS, MANGA, PENDING
        function dashboard() {
            const dashboard = document.querySelector('.dashboard-container')
            dashboard.style.display = 'block'
            //! to hide the users
            const users = document.querySelector('.users-container')
            users.style.display = 'none'
            //! to hide the manga
            const manga = document.querySelector('.manga-container')
            manga.style.display = 'none'
            //! to hide the pending
            const pending = document.querySelector('.pending-container')
            pending.style.display = 'none'

            //? color of the aside header
            const computedStyle = getComputedStyle(document.documentElement);
            const idkColor = computedStyle.getPropertyValue('--idk-color');

            const dash = document.getElementById('dash')
            dash.style.color = idkColor;
            const us = document.getElementById('us')
            us.style.color = 'white'
            const man = document.getElementById('man')
            man.style.color = 'white'
            const pen = document.getElementById('pen')
            pen.style.color = 'white'
        }

        function users() {
            //! to hide the dashboard
            const dashboard = document.querySelector('.dashboard-container')
            dashboard.style.display = 'none'
            //! to hide the manga
            const manga = document.querySelector('.manga-container')
            manga.style.display = 'none'
            //! to hide the pending
            const pending = document.querySelector('.pending-container')
            pending.style.display = 'none'

            const users = document.querySelector('.users-container')
            users.style.display = 'block'

            //? color of the aside header
            const computedStyle = getComputedStyle(document.documentElement);
            const idkColor = computedStyle.getPropertyValue('--idk-color');

            const dash = document.getElementById('dash')
            dash.style.color = 'white'
            const us = document.getElementById('us')
            us.style.color = idkColor;
            const man = document.getElementById('man')
            man.style.color = 'white'
            const pen = document.getElementById('pen')
            pen.style.color = 'white'

        }

        function manga() {
            //! to hide the dashboard
            const dashboard = document.querySelector('.dashboard-container')
            dashboard.style.display = 'none'
            //! to hide the users
            const users = document.querySelector('.users-container')
            users.style.display = 'none'
            //! to hide the pending
            const pending = document.querySelector('.pending-container')
            pending.style.display = 'none'

            const manga = document.querySelector('.manga-container')
            manga.style.display = 'block'

            const computedStyle = getComputedStyle(document.documentElement);
            const idkColor = computedStyle.getPropertyValue('--idk-color');

            const dash = document.getElementById('dash')
            dash.style.color = 'white'
            const us = document.getElementById('us')
            us.style.color = 'white'
            const man = document.getElementById('man')
            man.style.color = idkColor;
            const pen = document.getElementById('pen')
            pen.style.color = 'white'
        }

        function pending() {
            //! to hide the dashboard
            const dashboard = document.querySelector('.dashboard-container')
            dashboard.style.display = 'none'
            //! to hide the users
            const users = document.querySelector('.users-container')
            users.style.display = 'none'
            //! to hide the manga
            const manga = document.querySelector('.manga-container')
            manga.style.display = 'none'

            const pending = document.querySelector('.pending-container')
            pending.style.display = 'block'

            const computedStyle = getComputedStyle(document.documentElement);
            const idkColor = computedStyle.getPropertyValue('--idk-color');

            const dash = document.getElementById('dash')
            dash.style.color = 'white';
            const us = document.getElementById('us')
            us.style.color = 'white'
            const man = document.getElementById('man')
            man.style.color = 'white'
            const pen = document.getElementById('pen')
            pen.style.color = idkColor;
        }

        //todo SCRIPT FOR CHART
        var xValues = ["Total Users", "Total Manga", "Pending Manga", ""];
        var yValues = [55, 49, 44, 0];
        var barColors = ["red", "green", "blue", "transparent"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "MangaBato"
                }
            }
        });
    </script>

</body>

</html>