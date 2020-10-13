$('section.slider .slider-container').slick({
    dots: true,
    arrows: false,
    infinite: true,
    centerMode: false,
    speed: 1000,
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnHover: false,
    responsive: [{
        breakpoint: 768,
        settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 1,
        }
    }]
})

$('section.depoimentos .box-depoimentos').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 1000,
    autoplay: true,
    centerMode: false
})