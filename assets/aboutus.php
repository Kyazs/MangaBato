<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGABATO</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/aboutus.css">
    <link rel="icon" href="../img/logo_mangabato.png" type="image/-icon">
</head>

<body>
    <nav>
        <?php include('php/navbar.php'); ?>
    </nav>
    <main>
        <div class="aboutus-container">
            <section class="head">
                <div class="idk">
                    <h1>Dive into the World of Manga</h1>
                    <h2>Publish, Read, and Experience!</h2>
                </div>
            </section>
            <article class="content">
                <div class="aboutus">
                    <h1>About Us</h1>
                    <p>MangaBato is a website that provides a platform for manga readers and publishers. We aim to provide a
                        user-friendly interface for readers to enjoy their favorite manga. We also provide a platform for
                        publishers to publish their manga and reach a wider audience. Our goal is to create a community of
                        manga enthusiasts and provide a platform for them to connect and share their love for manga.</p>
                </div>
                <div class="creator">
                    <h1>Meet the Creators</h1>
                    <div class="creator-content">
                        <div class="box">
                            <h1>John Casper</h1>
                            <div class="imgs">
                                <img src="../img/idkman/riped.jpg" alt="casper">
                            </div>
                        </div>
                        <div class="box">
                            <h1>Ahadhin Tati</h1>
                            <div class="imgs">
                                <img src="../img/idkman/tati.jpg" alt="tati">
                            </div>
                        </div>
                    </div>
                    <div class="word">
                        <h1>Word From Creators</h1>
                        <div class="imgs">
                            <img src="../img/idkman/cooked.jpg" alt="word">
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <footer>
        <?php include('php/footer.php'); ?>
    </footer>
</body>

</html>