$(document).ready(function () {
    $('.navbar').removeClass('default-color');

    $('#preview-carousel').owlCarousel({
        items: 1,
        loop: true,
        autoHeight: true,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'flipInX'
    });

    $('#partners-carousel').owlCarousel({
        items: 4,
        margin: 20,
        loop: true,
        center: true,
        autoWidth: true,
        slideBy: 'page',
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 3000
    });
});
