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
    <link rel="stylesheet" href="../lib/mediaquery.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/mangapage.css">
    <link rel="stylesheet" href="../css/trending.css">
    <link rel="icon" href="../img/logo_mangabato.png" type="image/-icon">

</head>

<body>
    <header>
        <?php include('php/navbar.php'); ?>
    </header>
    <main>
        <div class="container">
            <!-- ! for the manga title and synopsis -->
            <section class="book">
                <div class="bgc-img"></div>
                <div class="cover">
                    <a href="../img/books/berserk.jpg">
                        <img src="../img/books/berserk.jpg" alt="cover"></a>
                    <div class="title">
                        <h1 id="getClap2">Tensei Shittara Slime Datta Ken </h1>
                        <h2 id="getClap1">That time i gor reincarnated as a slime asdkasjdkasd ajsdaksd</h2>
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
                            <p>Adventure, Fantasy, Isekai, action, romance</p>
                        </div>
                        <div class="author">
                            <h3>Author:</h3>
                            <p>John Casper</p>
                        </div>

                    </div>
                    <div class="synopsis">
                        <h2>Synopsis:</h2>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex, ea. Vel dolore, soluta doloremque ea commodi quam quis alias necessitatibus blanditiis. Consequatur repellendus autem quasi aperiam nulla assumenda reprehenderit similique.
                            Aperiam, quisquam id fugit porro, iste sequi natus optio ipsam temporibus similique neque laudantium, cum enim atque. Fugiat error tenetur quaerat reiciendis et amet laudantium. Ab eos soluta exercitationem cumque?
                            Reiciendis veniam libero sint, placeat qui beatae totam aperiam temporibus, exercitationem consectetur rem. Veniam ut repellat, minus ad autem nesciunt maiores eos placeat, repudiandae tempora voluptatem hic non cum nemo. </p>
                    </div>
                </div>
            </section>

            <!-- ! Chapters-->
            <section class="chapter">
                <header class="header">
                    <h3>Chapters: </h3>
                    <h2 id="getClap2">Tensei shitara slime datta ken</h2>
                </header>
                <article class="article">
                    <div class="chapter">
                        <a href="#"><h3>chapter 5</h3></a>
                    </div>
                    <div class="chapter">
                        <a href="#"><h3>chapter 4</h3></a>
                    </div>
                    <div class="chapter">
                        <a href="#"><h3>chapter 3</h3></a>
                    </div>
                    <div class="chapter">
                        <a href="#"><h3>chapter 2</h3></a>
                    </div>
                    <div class="chapter">
                        <a href="#"><h3>chapter 1</h3></a>
                    </div>
                </article>
            </section>

            <!-- ! TRENDING MANGA -->
            <article class="trending">
                <?php include('php/trending.php'); ?>
            </article>
        </div>
    </main>
    <footer>
        <?php include('php/footer.php'); ?>
    </footer>
    <script src="../lib/clamp.js"></script>
</body>

</html>