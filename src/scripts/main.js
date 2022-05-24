// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                AOS.init({
                    duration: 1500,
                });
                $(function () {

                    $(window).on('scroll', function () {
                        if ($(window).scrollTop() >= 140) {
                            $('.navigation').addClass('fixed-position');
                        } else {
                            $('.navigation').removeClass('fixed-position');
                        }
                    });

                    $('.testimonial-slider').slick({
                        arrows: false,
                        dots: true,
                        autoplay: true,
                        infinite: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    });

                    $('.videos-slider').on('init afterChange', function (e, slick) {
                        var currentSlick = $('.slick-current.slick-active', slick.$slideTrack);
                        var prevName = currentSlick.prev().data('slide-name');
                        var nextName = currentSlick.next().data('slide-name');
                        slick.$prevArrow.text(prevName);
                        slick.$nextArrow.text(nextName);
                    });

                    $('.videos-slider').slick({
                        arrows: true,
                        dots: false,
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: '500px',
                        nextArrow: $('.next-slide'),
                        prevArrow: $('.prev-slide'),
                        responsive: [{
                            breakpoint: 1200,
                            settings: {
                                centerMode: false,
                            }
                        }]
                    });

                    $('.parents-students-testimonial-slider').on('init afterChange', function (e, slick) {
                        var currentSlick = $('.slick-current.slick-active', slick.$slideTrack);
                        var prevName = currentSlick.prev().data('slide-name');
                        var nextName = currentSlick.next().data('slide-name');
                        slick.$prevArrow.text(prevName);
                        slick.$nextArrow.text(nextName);
                    });

                    $('.parents-students-testimonial-slider').slick({
                        arrows: true,
                        dots: false,
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: '500px',
                        nextArrow: $('.next-slide1'),
                        prevArrow: $('.prev-slide1'),
                        responsive: [{
                            breakpoint: 1200,
                            settings: {
                                centerMode: false,
                            }
                        }]
                    });

                    $('.teams-slider').slick({
                        arrows: true,
                        dots: true,
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        adaptiveHeight: true,
                    });

                    $('.support-img-slider').slick({
                        arrows: false,
                        dots: false,
                        infinite: true,
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        centerMode: true,
                        variableWidth: true,
                    });

                    $('.filter-options li button').on('click', function () {
                        // fetch the class of the clicked item
                        var ourClass = $(this).attr('class');
                        // reset the active class on all the buttons
                        $('.filter-options li').removeClass('active');
                        // update the active state on our clicked button
                        $(this).parent().addClass('active');

                        if (ourClass == 'all') {
                            // show all our items
                            $('.blog-posts').children('.blog-detail').show();
                        } else {
                            // hide all elements that don't share ourClass
                            $('.blog-posts').children('.blog-detail:not(.' + ourClass + ')').hide();
                            // show all elements that do share ourClass
                            $('.blog-posts').children('.blog-detail.' + ourClass).show();
                        }
                        return false;

                    });

                    $(".blog-posts .blog-detail").slice(0, 6).show();
                    $(".next-btn").on("click", function (e) {
                        e.preventDefault();
                        $(".blog-posts .blog-detail:hidden").slice(0, 3).slideDown();
                        if ($(".blog-posts .blog-detail:hidden").length == 0) {
                            $(".next-btn").text("No More Posts").addClass("disabled");
                        }
                    });

                    $('.events:nth-child(3) .order-1').addClass("order-md-2");
                    $('.events:nth-child(3) .order-2').addClass("order-md-1");
                    $('.events:nth-child(3) .content').removeClass("direction-r").addClass("direction-l");
                    $('.inner-suburb .content:nth-child(4)').removeClass("col-xl-3").addClass("col-xl-6");
                    $('.inner-inner-courses .section2 .content:last-child').removeClass("col-xl-6").addClass("col-xl-10");
                    $('.online-tutoring .section2 .content:last-child').removeClass("col-xl-6").addClass("col-xl-10");

                    //$('.card .card-header').on('click', function (e) {
                    //    e.preventDefault();
                    //    $('.active').removeClass('active');
                    //    //add the active class to the link we clicked
                    //    $(this).addClass('active');
                    //    //Load the content
                    //    //e.g.
                    //    //load the page that the link was pointing to
                    //    //$('#content').load($(this).find(a).attr('href')); 
                    //});

                    //$(document).on("click", ".collapse-menu h6", function (e) {
                    //    $(this).parents(".collapse-menu").find(".menu-collapse-wrap").slideToggle("slow"), $(this).parents(".collapse-menu").toggleClass("menushow");
                    //});

                    $(".loadmorebtn").on('click', function () {
                        $(".arealist").show();
                        $(".loadmorewrap").remove();
                        AOS.refresh();
                    });

                    $(".alphabet").on('click', function () {
                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");
                        $(".all-list").hide();
                        $(".arealist").show();
                        var chr = $(this).text();
                        $(".arealist").hide();
                        $(".char" + chr).show();
                        AOS.refresh();
                        $(".loadmorewrap").remove();
                        if ($(".arealist:visible").length)
                            $(".noresult").hide();
                        else
                            $(".noresult").show();
                    });
                    $(".allsearch").on('click', function () {
                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");
                        $(".all-list").show();
                        $(".arealist").show();
                        AOS.refresh();
                        $(".noresult").hide();
                    });
                    AOS.refresh();

                    $('.arealist ul').each(function () {
                        var max = 19
                        if ($(this).find("li").length > max) {
                            $(this)
                                .find('li:gt(19)')
                                .hide()
                                .end()
                                .append(
                                    $('<li class="show-more mt-3">Show More</li>').on('click', function () {
                                        $(this).siblings(':hidden').show().end().remove();
                                    })
                                );
                        }
                    });

                    $('.droplist > .caption').on('click', function () {
                        $(this).parent().toggleClass('open');
                    });

                    $('.droplist > .list > .item').on('click', function () {
                        $('.droplist > .list > .item').removeClass('active selected');
                        $(this).addClass('selected').parent().parent().removeClass('open').children('.caption').text($(this).text());
                    });

                });
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});

jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 1000) {
        jQuery('#back-top').fadeIn();
        jQuery("#back-top").addClass('active');
    } else {
        jQuery('#back-top').fadeOut();
        jQuery("#back-top").removeClass('active');
    }
});
jQuery('#back-top').click(function () {
    jQuery('body,html').animate({
        scrollTop: 0
    }, 1000);
    return false;
});