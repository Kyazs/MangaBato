function showSidebar() {
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}

function closeSidebar() {
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}

// ! a function to add ellipsis to the text when it overflows  by using clamp.js library
window.onload = function () {
    // ! ellipsis will be added when it overflow in line 2
    var element = document.getElementById('getClap2');
    $clamp(getClap2, { clamp: 2 });;
    // ! ellipsis will be added when it overflow in line 1
    var element = document.getElementById('getClap1');
    $clamp(getClap1, { clamp: 1 });;
}