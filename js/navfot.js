// todo SCRIPT TO CONNECT NAVBAR AND FOOTER
import navbar from '/assets/php/navbar.js';
import {
    footer
} from '/assets/php/navbar.js';

const navbarhtml = navbar();
document.getElementById('navbar').innerHTML = navbarhtml;

const footerhtml = footer();
document.getElementById('footer').innerHTML = footerhtml;