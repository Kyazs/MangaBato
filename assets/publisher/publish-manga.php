<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGABATO</title>
    <!-- jquery -->
    <?php include('../../lib/jquery.php'); ?>
    <link rel="stylesheet" href="publish-manga.css">
</head>

<body>
    <nav> <?php include('../php/navbar.php'); ?></nav>

    <main>
        <nav>
            <ul>
                <li><a href="../../index.html">
                        < Home</a>
                </li>
                <li><a href="../../publish.php">
                        < Publish</a>
                </li>
                <li><a href="../../publisher/publish-manga.php">
                        < Publish Manga</a>
                </li>
            </ul>
        </nav>

        <form action="../php/database/upload-manga.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="title">
                    <label for="title">Title: </label>
                    <input type="text" name="title" id="title" required>
                    <input type="file" name="mangaCover" id="mangaCover" accept="image/*" required>
                    <label class="coverfile" for="mangaCover">
                        <img id="preview" src="" alt="Upload Manga Cover">
                    </label>
                </div>

                <div class="genre">
                    <!-- genre of manga -->
                    <label for="genre">Genres:</label>
                    <select name="genre" id="genre" required>
                        <option value="" disabled selected>select a genre</option>
                        <option value="action">Action</option>
                        <option value="adventure">Adventure</option>
                        <option value="comedy">Comedy</option>
                        <option value="drama">Drama</option>
                        <option value="fantasy">Fantasy</option>
                        <option value="horror">Horror</option>
                        <option value="mystery">Mystery</option>
                        <option value="psychological">Psychological</option>
                        <option value="romance">Romance</option>
                        <option value="sci-fi">Sci-fi</option>
                        <option value="slice of life">Slice of Life</option>
                        <option value="supernatural">Supernatural</option>
                        <option value="thriller">Thriller</option>
                        <option value="harem">harem</option>
                        <option value="historical">Historical</option>
                        <option value="isekai">Isekai</option>
                        <option value="martial arts">Martial Arts</option>
                        <option value="mecha">Mecha</option>
                        <option value="school life">School Life</option>
                        <option value="shoujo">Shoujo</option>
                        <option value="shounen">Shounen</option>
                        <option value="sports">Sports</option>
                    </select>
                    <label for="type">Type: </label>
                    <!-- type of manga -->
                    <select name="type" id="type">
                        <option value="" disabled selected>select a type</option>
                        <option value="manga">Manga</option>
                        <option value="manhwa">Manhwa</option>
                        <option value="manhua">Manhua</option>
                    </select>
                </div>

                <div class="synopsis">
                    <label for="synopsis">Synopsis:</label><br>
                    <textarea name="synopsis" id="synopsis" cols="30" rows="10" required></textarea>
                </div>

                <div class="chapter">
                    <label for="chapter">Chapter:</label>
                    <input type="number" name="chapter" id="chapter" required><br>
                    <label>Chapter File:</label>
                    <label id="chapupload" for="chapterfile">Upload a file</label>
                    <input type="file" name="chapterfile" id="chapterfile" accept="application/zip" required>
                </div>
                <div class="agreement">
                    <input type="checkbox" name="terms" id="terms" required>
                    <label for="terms">I agree to the MangaBato’s <a href="../privacypolicy.php" target="_blank">Privacy Policy</a> and <a href="../terms.php" target="_blank">Terms & Conditions</a></label>
                </div>
                <br>
                <div class="submitcontainer">
                    <input class="submit" id="submitinput" type="submit" name="submit" value="Upload">
                </div>
            </div>
        </form>
    </main>

    <footer><?php include('../php/footer.php'); ?></footer>

    <script>

        <?php
        // Check if upload success session variable is set
        
        if (isset($_SESSION['uploadSuccess'])) {
            session_start();
            // Echo JavaScript code to show alert
            echo 'alert("Upload successful!");';
            // Unset the session variable to avoid showing the alert on page refresh
            unset($_SESSION['uploadSuccess']);
        }
        ?>

        $(document).ready(function() {
            //! to view the image before uploading
            $('#mangaCover').change(function(e) {
                var file = e.target.files[0];
                var imageUrl = URL.createObjectURL(file);
                $('#preview').attr('src', imageUrl);
            });
            // !to view the file name
            $('#chapterfile').on('change', function() {
                var fileName = $(this).val().split('\\').pop();
                $('label[for="chapterfile"]').text(fileName);
            });
        });
    </script>

</body>

</html>