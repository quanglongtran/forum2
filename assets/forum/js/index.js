$(document).ready(function() {
    $('a[href="#"]').on('click', function(e) {
        e.preventDefault();
    })

    $('.nav__menu .nav__menu-item').on('click', function() {
        $('.nav .nav__menu .nav__menu-item').removeClass('active');
        $(this).addClass('active')
    })

    $('')
})