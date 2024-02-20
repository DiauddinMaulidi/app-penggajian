
let nav = document.querySelector('.nav');
let navA = document.querySelectorAll('.navbar a');

window.addEventListener('scroll', function () {

    if ( scrollY > 90 ) {
        nav.style.background = 'white';
        nav.style.boxShadow = '0 .1px 10px';
        navA.forEach(function(ulli) {
            ulli.style.color = 'aqua';
        })
    } else {
        nav.style.backgroundColor = 'rgba(0, 0, 0, .0)';
        nav.style.boxShadow = '';
        navA.forEach(function(ulli) {
            ulli.style.color = 'white';
        })
    }
})


