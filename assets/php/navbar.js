function navbar() {
    return `
        <nav nav class="responsive-nav" >
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
                <li><a href="#">Profile</a></li>
                <li><a href="../publisher/publish.php">Publish</a></li>
                <li><a class="logout" href="../../index.html">Logout</a></li>
                <li><a href="../aboutus.php">About us</a></li>
            </ul>
        </div >
        <div class="nav_link">
            <ul>
                <li class="logo"><a href="../../index.html">
                    <img src="../../../img/logo_mangabato.png" alt="logo" width="50px">MANGABATO</a></li>
                <li><a href="../login.php">
                    <button class="full-rounded">
                        <span>Login</span>
                        <div class="border full-rounded"></div>
                    </button>
                </a></li>
                <li onclick=showSidebar()><a href="#">
                    <button class="full-rounded">
                        <span class="menu"><svg xmlns="http://www.w3.org/2000/svg" height="20"
                            viewBox="0 -960 960 960" width="20" fill="black">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg></span>
                        <div class="border full-rounded"></div>
                    </button></a>
            </li>
        </ul>
        </div >

    </nav >
     `;
}

export default navbar;