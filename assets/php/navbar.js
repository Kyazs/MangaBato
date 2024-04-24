function navbar() {
    return `
    <nav class="responsive-nav">
    <div class="sidebar">
        <ul>
            <li onclick=closeSidebar()>
                <button class="close">
                    <svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"
                        fill="red">
                        <path
                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                    </svg></button>
            </li>
            <li><a class="logo" href="#home">
                    <img src="img/logo_mangabato.png" alt="logo">MANGABATO</a></li>
            <li><a href="/assets/profile.php">Profile</a></li>
            <li><a href="assets/publisher/publish.php">Publish</a></li>
            <li><a href="assets/aboutus.php">About us</a></li>
        </ul>
    </div>
    <div class="nav_link">
        <ul>
            <li class="logo"><a href="/index.html">
                    <img src="/img/logo_mangabato.png" alt="logo" width="50px">MANGABATO</a>
            </li>
            <li><a href="/assets/login.php">
                    <button class="full-rounded">
                        <span>Login</span>
                        <div class="border full-rounded"></div>
                    </button>
                </a>
            </li>
            <li class="sideburger">
                <a href="/assets/profile.php"><i class='bx bx-user-circle' ></i> Profile</a>
            </li>
            <li class="sideburger">
                <a href="/assets/publisher/publish.php"><i class='bx bx-book-open' ></i> Publish</a>
            </li>
            <li id="hamburger" onclick=showSidebar()><a href="#">
                    <button class="full-rounded">
                        <span class="menu"><svg xmlns="http://www.w3.org/2000/svg" height="20"
                                viewBox="0 -960 960 960" width="20" fill="black">
                                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                            </svg></span>
                        <div class="border full-rounded"></div>
                    </button></a>
            </li>
        </ul>
    </div>

</nav>

</body>
     `;
}

function footer() {
    return `
    <footer>
        <div class="footer-container">
            <!-- ! ICONS FROM BOXICONS -->
            <div class="icons">
                <a href="https://www.facebook.com">
                    <i class='bx bxl-facebook-circle'></i></a>
                <a href="https://www.discord.com">
                    <i class='bx bxl-discord-alt'></i></a>
                <a href="https://www.reddit.com">
                    <i class='bx bxl-reddit'></i></a>
                <a href="https://github.com/Kyazs/MangaBato">
                    <i class='bx bxl-github'></i></a>
            </div>
            <ul>
                <li><a href="../../../index.html">Home</a></li>
                <li><a href="../../privacypolicy.php">Privacy Policy</a></li>
                <li><a href="../../terms.php">Terms of Service</a></li>
                <li><a href="../../aboutus.php">About us</a></li>
            </ul>
            <p>© 2024 - Present MangaBato</p>
        </div>
    </footer>
    `;
}

export default navbar;
export {footer};
