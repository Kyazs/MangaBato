<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGABATO</title>

    <base href="../">

    <!-- link for the star icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <!-- link for the boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="lib/mediaquery.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="icon" href="img/logo_mangabato.png" type="image/-icon">
</head>

<body>
    <div class="container">
        <nav id="navbar"></nav>
        <main>
            <div class="profile-container">
                <div class="header">
                    <button onclick=gohome()><i class='bx bx-arrow-back'></i></button>
                </div>
                <div class="contents">
                    <div class="background"></div>
                    <div class="profile"><img src="/img/idkman/anya.jpg" alt=""></div>
                    <div class="username">
                        <h3>Kyazs</h3>
                    </div>
                    <div class="email">
                        <h4>johncasper.bit@gmail.com</h4>
                    </div>
                    <div class="description">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure sit delectus magnam reiciendis quod dolorum qui accusantium vel atque mollitia doloremque eos, officia provident quas laborum. Porro, nam asperiores. Quis?
                            Voluptates aspernatur facere maxime at corrupti amet alias accusamus voluptatum dolorum ratione. Cupiditate culpa reprehenderit voluptate omnis nemo, aliquam inventore quae corrupti tempore est excepturi rem id, accusantium impedit tenetur!</p>
                    </div>
                </div>
                <div class="edit">
                    <button onclick=edits()><i class='bx bxs-edit'></i></button>
                </div>
            </div>
            <div class="edit-profile">
                <div class="header">
                    <button onclick=goback()><i class='bx bx-arrow-back'></i></button>
                </div>
                <div class="profile"></div>
                <div class="form">
                    <form action="">
                        <div class="input">
                            <label for="username">Username: </label><br>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="input">
                            <label for="email">Email: </label><br>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="input">
                            <label for="password">Password: </label><br>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="input">
                            <label for="confirm-password">Confirm Password: </label><br>
                            <input type="password" id="confirm-password" name="confirm-password" required>
                        </div>
                        <div class="input">
                            <label for="description">Description: </label><br>
                            <textarea name="description" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="button">
                            <input class="btn" onclick=alerts() type="submit" value="Save">
                        </div>
                    </form>
                </div>
        </main>
        <footer id="footer"></footer>
    </div>
    <script src="js/navbar.js"></script>
    <script src="/js/navfot.js" type="module">

    </script>
    <script>

        function gohome() {
            window.location.href = '/index.html';
        }

        function goback() {
            const profile = document.querySelector('.profile-container');
            profile.style.display = 'block';
            const edits = document.querySelector('.edit-profile');
            edits.style.display = 'none';
        }

        function edits() {
            const profile = document.querySelector('.profile-container');
            profile.style.display = 'none';
            const edits = document.querySelector('.edit-profile');
            edits.style.display = 'flex';
        }

        function alerts() {

            let confirmation = confirm("Save Changes?")

            if (confirmation == true) {
                alert("Changes Saved");
                const profile = document.querySelector('.profile-container');
                profile.style.display = 'block';
                const edits = document.querySelector('.edit-profile');
                edits.style.display = 'none';
            }
            else {
                alert("Cancelled")
            }

        }
    </script>
</body>

</html>