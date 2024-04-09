<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGABATO</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <!-- link for the boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/maincontent.css">
    <link rel="stylesheet" href="lib/mediaquery.css">
    <link rel="stylesheet" href="../css/privacypolicy.css">
    <link rel="stylesheet" href="../css/trending.css">
    <link rel="icon" href="img/logo_mangabato.png" type="image/-icon">

</head>

<body>
    <nav>
        <?php include('php/navbar.php'); ?>
    </nav>

    <main>
        <div class="container-privacy">
            <div class="trending-container-privacy">
                <?php include('php/trending.php'); ?>
                <div class="privacy-content">
                    <header>
                        <!-- A LOCATION HEADER 🆘🆘-->
                        <a href="../index.html"> > Home</a>
                        <a href="../assets/privacypolicy.php"> > Privacy Policy</a>
                    </header>
                    <article>
                        <h2>Privacy Policy</h2>
                        <div class="contents">
                            <h4>Privacy Policy</h4>
                            <ul>
                                <li>
                                    <p>The following web pages outline mangabato.xyz collection and use of personal information from its users. mangabato.xyz
                                        values the privacy of our members and users. mangabato.xyz will never share any personal information of anybody who logs on to mangabato.xyz with anyone.
                                        This includes your e-mail address, name, and location. Upon logging on to mangabato.xyz,
                                        your IP address and hostname are logged for statistical and security reasons.</p>

                                </li>
                            </ul>
                        </div>
                        <div class="contents">
                            <h4>Security</h4>
                            <ul>
                                <li>
                                    <p>mangabato.xyz will make a reasonable effort to protect all personal information
                                        such as passwords and use technology such as encryption, access control procedures, firewalls, and physical securities.
                                        We recommend you use a unique password with both letters and numbers to protect your account on mangabato.xyz.
                                        If others, including family, friends, or other household members access and use the comment or message board through your login credentials,
                                        you are responsible for the actions of yourself and your individual account. Only in extreme cases will your account be fully terminated.
                                    </p>

                                </li>
                            </ul>
                        </div>
                        <div class="contents">
                            <h4>Cookies</h4>
                            <ul>
                                <li>
                                    <p>mangabato.xyz uses cookies (a very small text file placed on your system when you
                                        log on to mangabato.xyz, and most other websites) to serve as an identification card and is uniquely yours.
                                        It can only be read by the server that gives this cookie to you. Cookies give us information that
                                        you returned to mangabato.xyz’s specific pages and help us track your preferences and your behavior.
                                        The basic function of cookies is to help our server remember who you are.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="contents">
                            <h4>Disclosing Information</h4>
                            <ul>
                                <li>
                                    <p>
                                        When required by applicable law, mangabato.xyz may store and disclose personal information for the members of the website.
                                        This means that we may make a disclosure that is necessary for the legal and regulatory requirements to protect the rights,
                                        safety, and property of mangabato.xyz, users of the mangabato.xyz website, and the public.
                                    </p>
                                </li>
                            </ul>
                            <div class="contents">
                                <h4>Third Parties</h4>
                                <ul>
                                    <li>
                                        <p>
                                            Third-party websites may collect information from mangabato.xyz users.
                                            This information includes your IP Address, hostname, and information about your system to help us
                                            serve you better. They are functioned for statistical reasons, and will not be used for any other reasons.
                                            If you would like to know more about this practice and to know your options about not having this
                                            information used by these companies, you can see http://www.networkadvertising.org/managing/opt_out.asp.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="contents">
                                <h4>Website Policies Changes</h4>
                                <ul>
                                    <li>
                                        <p>
                                            mangabato.xyz reserves the right to change this, and any other policy located on our website at any time without
                                            notifying our users. If you have any comments, questions,
                                            or concerns regarding this policy, or any other policy you may send them to us at policy[at]mangabato.xyz.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="contents">
                                <h4>Common ID Cookies</h4>
                                <ul>
                                    <li>
                                        <p>
                                            This site uses cookies and similar tracking technologies such as the Common ID cookie to provide its services. Cookies are
                                            important devices for measuring advertising effectiveness and ensuring a robust online advertising industry. The Common ID cookie stores
                                            a unique user id in the first-party domain and is accessible to our ad partners. This simple ID can be utilized to improve user matching, especially
                                            for delivering ads to iOS and macOS browsers. Users can opt-out of the Common ID tracking cookie by clicking here.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                    </article>
                </div>
            </div>
            <div class="privacy-ranking"></div>
        </div>

    </main>

    <footer>
        <?php include('php/footer.php'); ?>
    </footer>

</body>

</html>