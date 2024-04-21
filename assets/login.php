<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGABATO</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../lib/mediaquery.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" href="../img/logo_mangabato.png" type="image/-icon">

</head>
<body>
    <!-- server side scripting for lessen the data redundancy -->
    <?php include('php/navbar.php'); ?>
    <main>
        <div class="container">
            <div class="wrapper">
                <div class="card-switch">
                    <label class="switch">
                        <input type="checkbox" class="toggle">
                        <span class="slider"></span>
                        <span class="card-side"></span>
                        <div class="flip-card__inner">
                            <div class="flip-card__front">
                                <div class="title">Log in</div>
                                <form class="flip-card__form" action="../logon.html">
                                    <input class="flip-card__input" name="email" placeholder="Email" type="email" required>
                                    <input class="flip-card__input" name="password" placeholder="Password" type="password" required>
                                    <button class="flip-card__btn">Let`s go!</button>
                                </form>
                            </div>
                            <div class="flip-card__back">
                                <div class="title">Sign up</div>
                                <form class="flip-card__form" action="../logon.html">
                                    <input class="flip-card__input" placeholder="Name" type="name" required>
                                    <input class="flip-card__input" name="email" placeholder="Email" type="email" required>
                                    <input class="flip-card__input" name="password" placeholder="Password" type="password" required>
                                    <button class="flip-card__btn">Confirm!</button>
                                </form>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </main>
    <?php include('php/footer.php'); ?>
</body>

</html>