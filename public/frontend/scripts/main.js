$(document).ready(function () {
    console.log("document is ready");


    $(".card-testimonial").hover(
        function () {
            $(this).addClass('shadow-lg').css('cursor', 'pointer');
        },
        function () {
            $(this).removeClass('shadow-lg');
        }
    );
});
