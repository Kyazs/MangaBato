//? to set the reversed to true 5-1. as a reference so i can use it to toggle the order of the chapters
let reversed = false;
function toggleOrder() {
    const article = document.querySelector('.article');
    const chapters = Array.from(article.getElementsByClassName('chapter'));

    //!! get the button and the icon
    const change = document.getElementById('btns')
    const icon = change.querySelector('i');

    if (reversed) {

        //! if reversed is true it will set the order of the chapters to 5-1
        chapters.forEach((chapter, index) => chapter.style.order = '');
        // change the icon
        icon.classList.remove('bxs-up-arrow');
        icon.classList.add('bxs-down-arrow');
    } else {

        //! if reversed is false it will set the order of the chapters to 1-5
        chapters.reverse().forEach((chapter, index) => chapter.style.order = index + 1);
        icon.classList.remove('bxs-down-arrow');
        icon.classList.add('bxs-up-arrow');
    }
    // set the reversed to true
    reversed = !reversed
}