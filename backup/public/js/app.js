$('.header_navbar-toggle').click(function(e) {
    e.preventDefault();
    $('.header_navbar').toggleClass('is-open');
    $('.header_navbar-toggle').toggleClass('is-open');
})