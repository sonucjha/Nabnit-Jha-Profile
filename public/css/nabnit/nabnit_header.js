// Toggle mobile menu
$(document).ready(function () {
    $('.mobile__nav__toggler').click(function () {
        $('.mobile__menu').toggleClass('open');
        $('.menu__backdrop').toggleClass('active');
    });

    $('.close__btn, .menu__backdrop').click(function () {
        $('.mobile__menu').removeClass('open');
        $('.menu__backdrop').removeClass('active');
    });
});
