<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGABATO</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/mangapage.css">
    <link rel="stylesheet" href="../../css/trending.css">
    <link rel="stylesheet" href="../mediaquery/mangapage-query.css">
    <link rel="icon" href="../../img/logo_mangabato.png" type="image/-icon">

</head>

<body>
    <header>
        <?php include('../php/navbar.php'); ?>
    </header>
    <main>
        <div class="container">
            <!-- ! for the manga title and synopsis -->
            <section class="book">
                <div style="background-image: url(../../img/books/domestic-na-kanojo.jpg);" class="bgc-img"></div>
                <div class="cover">
                    <a href="../../img/books/domestic-na-kanojo.jpg">
                        <img src="../../img/books/domestic-na-kanojo.jpg" alt="cover"></a>
                    <div class="title">
                        <h1 id="getClap2">Domestic Na Kanojo</h1>
                        <h2 id="getClap1">
                            Domestic Girlfriend (english);
                            ドメスティックな彼女 (Japanese);</h2>
                    </div>
                </div>
                <div class="main">
                    <div class="aside">
                        <div class="star-rating">
                            <span class="material-symbols-outlined">grade</span>
                            <span class="material-symbols-outlined">grade</span>
                            <span class="material-symbols-outlined">grade</span>
                            <span class="material-symbols-outlined">grade</span>
                            <span class="material-symbols-outlined">star_half</span>
                        </div>
                        <div class="status">
                            <h3>Status:</h3>
                            <p>Ongoing</p>
                        </div>
                        <div class="type">
                            <h3>Type:</h3>
                            <p>Manga</p>
                        </div>
                        <div class="genre">
                            <h3>Genre:</h3>
                            <p>Drama - Harem - Mature - Romance - School life - Shounen</p>
                        </div>
                        <div class="author">
                            <h3>Author:</h3>
                            <p>Sasuga Kei</p>
                        </div>

                    </div>
                    <div class="synopsis">
                        <h2>Synopsis:</h2>
                        <p id="getClapSynopsis"> Tonight, Natsuo loses his virginity. His partner? Her name is Rui and he just met her
                             today after school. She's the one that brought up this whole situation, stating that she wanted to simply gain the knowledge about sex. 
                             She does not want to start a relationship, nor does she care about Natsuo. Afterwards, Natsuo feels guilty for losing his virginity 
                             to a girl he doesn't even particularly like. Mostly, it makes him feel like he betrayed his crush to his high school teacher: 
                             Hina. A quirky love triangle story unfolds as Natsuo,
                             Rui, and Hina all end up becoming part of the same family!</p>
                    </div>
                </div>
            </section>

            <!-- ! Chapters-->
            <section class="chapter">
                <header class="header">
                    <h3>Chapters: </h3>
                    <h2 id="getClap2">Domestic na Kanojo</h2>
                </header>
                <article class="article">
                    <div class="chapter">
                        <a href="#">
                            <h3>chapter 5</h3>
                        </a>
                    </div>
                    <div class="chapter">
                        <a href="#">
                            <h3>chapter 4</h3>
                        </a>
                    </div>
                    <div class="chapter">
                        <a href="#">
                            <h3>chapter 3</h3>
                        </a>
                    </div>
                    <div class="chapter">
                        <a href="#">
                            <h3>chapter 2</h3>
                        </a>
                    </div>
                    <div class="chapter">
                        <a href="#">
                            <h3>chapter 1</h3>
                        </a>
                    </div>
                </article>
            </section>

            <!-- ! TRENDING MANGA -->
            <article class="trending">
                <?php include('../php/trending.php'); ?>
            </article>
        </div>
    </main>
    <footer>
        <?php include('../php/footer.php'); ?>
    </footer>
    <script src="../../lib/clamp.js"></script>
</body>

</html>