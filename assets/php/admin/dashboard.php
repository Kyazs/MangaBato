<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGABATO</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="../../../css/navbar.css"> <!-- change the path to css/navbar.css -->
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/navbar.css">
    <link rel="stylesheet" href="../../../css/footer.css">
    <link rel="stylesheet" href="../../../lib/mediaquery.css">
    <link rel="icon" href="../../../img/logo_mangabato.png" type="image/-icon">

</head>
<body>
    <nav id="navbar"></nav>
    <main>


    </main>
    <script src="../../../js/navbar.js"></script>
    <script type="module">
        import navbar from '../navbar.js';

        const navbarhtml = navbar();
        document.getElementById('navbar').innerHTML = navbarhtml;
    </script>
</body>
</html>