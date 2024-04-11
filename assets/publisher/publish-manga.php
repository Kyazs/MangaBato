<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGABATO</title>

    <link rel="stylesheet" href="publish-manga.css">
</head>
<body>
    <nav> <?php include ('../php/navbar.php'); ?></nav>

    <main>
        <form action="../php/database/upload-manga.php" method="post">
            <label for="title">TITLE: </label>
            <input type="text" name="title" id="title" required>
            <br>
            <input type="submit">

        </form>
    </main>

    <footer><?include ('../php/footer.php'); ?></footer>
</body>
</html>