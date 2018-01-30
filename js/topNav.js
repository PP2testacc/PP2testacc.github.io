/* 

SCRIPT FOR HANDLING THE DROPDOWNS ON THE NAVIGATION
 
    - Toggles open/close dropdowns (on button and document click accordingly)
    - Rotates carets according to dropdown state
    - Toggles mobile menu icon
    
*/

$(document).ready(function () {

    $('.top-nav .dropdown-btn').click(function (e) {

        e.stopPropagation();

        if ($(this).hasClass("open")) {
            $(this).removeClass('open');
        } else {
            $(this).siblings().removeClass('open');
            $(this).addClass('open');
        }


        if ($(this).children(".dropdown").hasClass('open')) {

            $(this).children(".dropdown").removeClass('open');
            $(this).find(".caret").removeClass('open');
            $(this).children(".dropdown").slideUp("fast");

        } else if ($(this).siblings().children(".dropdown").hasClass('open')) {

            $(this).siblings().children(".dropdown").removeClass('open');
            $(this).siblings().find(".caret").removeClass("open");
            $(this).siblings().children(".dropdown").slideUp("fast");

            $(this).children(".dropdown").addClass('open');
            $(this).find(".caret").addClass('open');
            $(this).children(".dropdown").slideDown("fast");

        } else {

            $(this).children(".dropdown").addClass('open');
            $(this).find(".caret").addClass('open');
            $(this).children(".dropdown").slideDown("fast");

        }

    });

    $(document).click(function (e) {
        $('.top-nav .dropdown').slideUp("fast");
        $(".dropdown").removeClass('open');
        $(".caret").removeClass('open');
        $('.top-nav .dropdown-btn').removeClass("open");
    });

    $(".mobile-menu-container").on("click", function () {
        $(".top-nav ul").toggleClass("open");
        $(this).children(".mobile-menu-icon").toggleClass("open");
    });

});
