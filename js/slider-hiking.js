// for hiking part
$('.left').click(function() {
    var currentSlide = $('.slide.active');
    var prevSlide = currentSlide.prev();

    currentSlide.removeClass('active');
    prevSlide.addClass('active');

    if (prevSlide.length == 0) {
        $('.slide').last().addClass('active');
    }
});

// for via ferrata part
$('.left1').click(function() {
    var currentSlide = $('.slide1.active1');
    var prevSlide = currentSlide.prev();

    currentSlide.removeClass('active1');
    prevSlide.addClass('active1');

    if (prevSlide.length == 0) {
        $('.slide1').last().addClass('active1');
    }
});

// for skiing part
$('.left2').click(function() {
    var currentSlide = $('.slide2.active2');
    var prevSlide = currentSlide.prev();

    currentSlide.removeClass('active2');
    prevSlide.addClass('active2');

    if (prevSlide.length == 0) {
        $('.slide2').last().addClass('active2');
    }
});

// for kayaking part
$('.left3').click(function() {
    var currentSlide = $('.slide3.active3');
    var prevSlide = currentSlide.prev();

    currentSlide.removeClass('active3');
    prevSlide.addClass('active3');

    if (prevSlide.length == 0) {
        $('.slide3').last().addClass('active3');
    }
});

// for paragliding part
$('.left4').click(function() {
    var currentSlide = $('.slide4.active4');
    var prevSlide = currentSlide.prev();

    currentSlide.removeClass('active4');
    prevSlide.addClass('active4');

    if (prevSlide.length == 0) {
        $('.slide4').last().addClass('active4');
    }
});




console.warn('warning at the sliders');
const myError = new Error('minor error when using the sliders, the 3 photos go: 1, 3, 2. Nevermind, fixed at frontend HTML!');
console.log(myError.message);