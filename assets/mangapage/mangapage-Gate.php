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
                <div style="background-image: url(../../img/books/gate.jpg);" class="bgc-img"></div>
                <div class="cover">
                    <a href="../../img/books/gate.jpg">
                        <img src="../../img/books/gate.jpg" alt="cover"></a>
                    <div class="title">
                        <h1 id="getClap2">Gate - Jietai Kare No Chi Nite, Kaku Tatakeri</h1>
                        <h2 id="getClap1">Gate - Thus the JSDF Fought There (English);</h2>
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
                            <p>: Action - Adventure - Comedy - Drama - Fantasy - Mature - Romance - Seinen</p>
                        </div>
                        <div class="author">
                            <h3>Author:</h3>
                            <p>Yanai Takumi - Sao Satoru</p>
                        </div>

                    </div>
                    <div class="synopsis">
                        <h2>Synopsis:</h2>
                        <p id="getClapSynopsis">A gate appears in Tokyo's Ginza district sometime in the 21st century. From the gate pours out monsters,
                            knights from middle-age Europe, and other fantasy-like beings, and they kill many of the citizens of Tokyo. This event is known as the Ginza Incident. The government sends a small group of soldiers from the Japanese Self-Defense Forces to the alternate world beyond the gate. Led by otaku soldier Yōji, they find that the villages in the world are being attacked by a dragon.
                            An elf girl who is a survivor from the dragon's rampage joins the group in their travels across the dangerous new world. </p>
                    </div>
                </div>
            </section>

            <!-- ! Chapters-->
            <section class="chapter">
                <header class="header">
                    <h3>Chapters: </h3>
                    <h2 id="getClap2">Tensei shitara slime datta ken</h2>
                    <button id="btns" onclick="toggleOrder()"><i class='bx bxs-down-arrow'></i></button>
                </header>
                <article class="article">
                    <div class="chapter">
                        <a href="/assets/chapters/chapter-gate.html">
                            <h3>chapter 5</h3>
                        </a>
                    </div>
                    <div class="chapter">
                        <a href="/assets/chapters/chapter-gate.html">
                            <h3>chapter 4</h3>
                        </a>
                    </div>
                    <div class="chapter">
                        <a href="/assets/chapters/chapter-gate.html">
                            <h3>chapter 3</h3>
                        </a>
                    </div>
                    <div class="chapter">
                        <a href="/assets/chapters/chapter-gate.html">
                            <h3>chapter 2</h3>
                        </a>
                    </div>
                    <div class="chapter">
                        <a href="/assets/chapters/chapter-gate.html">
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
    <script src="/js/sort.js"></script>

</body>

</html>