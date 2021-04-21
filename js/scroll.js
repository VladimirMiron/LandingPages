window.onscroll = function() {
    var nav = document.getElementById('nav');
    if ( window.pageYOffset > 100 ) {
        nav.classList.add("navbar1");
    } else {
        nav.classList.remove("navbar1");
    }
}