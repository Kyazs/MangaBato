<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGABATO</title>
    <!-- link for the star icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <!-- link for the boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/maincontent.css">
    <link rel="stylesheet" href="lib/mediaquery.css">
    <link rel="icon" href="img/logo_mangabato.png" type="image/-icon">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div class="container">
        <nav id="navbar"></nav>
        <main>
            <div class="form_container">
                <div class="login_container">
                    <form action="/logon.html" method="post" enctype="multipart/form-data">
                        <p>LOGIN</p>
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" placeholder="Input username" required>
                        <label for="username">Password:</label>
                        <input type="password" name="password" id="password" placeholder="Input password" required>
                        <label id="signup"> Dont have an account? <i onclick="create()">Sign up</i></label>
                        <button>Login</button>
                    </form>
                </div>
                <div class="signup_container">
                    <form id="create" action="" method="POST">
                        <p>SIGN UP</p>
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" placeholder="input username" required>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="input email" required>
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" placeholder="input passsword" required>
                        <label for="profile">Upload Profile picture:</label>
                        <input type="file" accept="image/*" name="profile" id="profile" required>
                        <label for="biography">Description</label>
                        <textarea name="biography" id="biography" cols="30" rows="10" style="resize: none;"></textarea>
                        <input onclick="alerts()" type="submit" value="Create Account" id="submit">
                        <label id="signup">Have an account? <i onclick="login()"> Login</i></label>
                    </form>
                </div>
            </div>
        </main>
        <footer id="footer"></footer>
    </div>

    <script src="/js/navbar.js"></script>
    <script src="/js/navfot.js" type="module"></script>
    <script>
        //todo SCRIPT FOR CHANGING BETWEEN LOGIN AND SIGN UP
        function alerts() {
            alert("Account created! Now you can login.");
        }

        function create() {
            const login = document.querySelector('.login_container')
            login.style.display = 'none'
            const signup = document.querySelector('.signup_container')
            signup.style.display = 'block'
        }
        function login() {
            const login = document.querySelector('.login_container')
            login.style.display = 'block'
            const signup = document.querySelector('.signup_container')
            signup.style.display = 'none'
        }
    </script>
</body>

</html>