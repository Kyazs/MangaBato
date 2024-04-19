<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGABATO</title>
    <link rel="stylesheet" href="css/admin.css">

</head>

<body>
    <div class="container">
        <nav> <?php include('assets/php/navbar.php');  ?></nav>
        <main>
            <div class="admin-container">
                <div class="admin">
                    <h1>Admin Login</h1>
                    <form action="assets/php/admin/auth.php" method="POST">
                        <input type="text" name="username" placeholder="Username" required>
                        <br>
                        <input type="password" name="password" placeholder="Password" required>
                        <br>
                        <input class="submit" type="submit" value="Login" src="">
                    </form>
                </div>
            </div>
        </main>
        <footer><?php include('assets/php/footer.php'); ?></footer>
    </div>
</body>

</html>