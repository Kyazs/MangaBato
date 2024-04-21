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
                <div style="background-image: url(../../img/books/kingdom.jpg);" class="bgc-img"></div>
                <div class="cover">
                    <a href="../../img/books/kingdom.jpg">
                        <img src="../../img/books/kingdom.jpg" alt="cover"></a>
                    <div class="title">
                        <h1 id="getClap2">Kingdom</h1>
                        <h2 id="getClap1">キングダム (Japanese); 王者天下 (Chinese); Kingdom (English);</h2>
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
                            <p>Action - Adventure - Comedy - Drama - Historical - Martial arts - Romance</p>
                        </div>
                        <div class="author">
                            <h3>Author:</h3>
                            <p>Hara Yasuhisa</p>
                        </div>

                    </div>
                    <div class="synopsis">
                        <h2>Synopsis:</h2>
                        <p id="getClapSynopsis">Millions of years have passed since the times of legends, when the worlds of man and gods 
                            were still the same. In these times it was the desires of man that moved the world. It is the era of the 500 year
                             war - The Warring States period (403-222 BC in Chinese history). Kingdom is the story of a young boy named Shin who 
                             grew into a great general and all the trials and bloodshed that lead him there.  </p>
                    </div>
                </div>
            </section>

            <!-- ! Chapters-->
            <section class="chapter">
                <header class="header">
                    <h3>Chapters: </h3>
                    <h2 id="getClap2">Kingdom</h2>
                </header>
                <article class="article">
                    <div class="chapter">
                        <a href="/assets/chapters/chapter-kingdom.html"><h3>chapter 5</h3></a>
                    </div>
                    <div class="chapter">
                        <a href="/assets/chapters/chapter-kingdom.html"><h3>chapter 4</h3></a>
                    </div>
                    <div class="chapter">
                        <a href="/assets/chapters/chapter-kingdom.html"><h3>chapter 3</h3></a>
                    </div>
                    <div class="chapter">
                        <a href="/assets/chapters/chapter-kingdom.html"><h3>chapter 2</h3></a>
                    </div>
                    <div class="chapter">
                        <a href="/assets/chapters/chapter-kingdom.html"><h3>chapter 1</h3></a>
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