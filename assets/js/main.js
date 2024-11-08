$(".slides").slick({
    arrows: false,
    dots: true,
    infinite: true,
    speed: 500,
})
$(".informations").slick({
    dots: true,
    infinite: true
})
$(".gallery_images").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '10em',
    dots: true,
    responsive: [
        {
            breakpoint: 1310,
            settings: {
                slidesToShow: 2,
                centerMode: true,
                centerPadding: '10em',
                dots: true
            }
        },
        {
            breakpoint: 980,
            settings: {
                slidesToShow: 1,
                centerMode: true,
                centerPadding: '10em',
                dots: true
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 1,
                centerMode: false,
                dots: true
            }
        },
    ]
});
$(".gallery_images_one_column").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true
});

$("#mob-primary-menu .menu-item-has-children > a").each(function() {
    $(this).append('<i class="fa fa-chevron-up" aria-hidden="true"></i>')
    $(this).append('<i class="fa fa-chevron-down" aria-hidden="true"></i>')
})
$("#mob-primary-menu .menu-item-has-children i").each(function() {
    $(this).click(function(e) {
        e.preventDefault()
        $(this).closest(".menu-item-has-children").find(".sub-menu").toggle()
        $(this).closest(".menu-item-has-children").find("i").toggle()
    })
})
$(".left-slide").click(function() {
    $(".slick-prev").click()
})
$(".right-slide").click(function() {
    $(".slick-next").click()
})
$(".gallery_img .secondary_btn").each(function() {
    $(this).click(function() {
        let img_url = $(this).attr("modal")
        //$(".modal_body").css("background-image", "url(" + img_url + ")");
        $(".modal_body").html("<img alt='' src='" + img_url + "' />");
        $(".modal").css("opacity", 1);
        $(".modal").css("visibility", "visible")
    })
})

$(".gallery_img .finish_detail").each(function() {
    $(this).click(function() {
        let img_url = $(this).attr("modal")
        //$(".modal_body").css("background-image", "url(" + img_url + ")");
        $(".modal_body").html("<img alt='' src='" + img_url + "' />");
        $(".modal").css("opacity", 1);
        $(".modal").css("visibility", "visible")
    })
})


$(".fa-close").click(function() {
    $(".modal").css("opacity", 0);
    $(".modal").css("visibility", "hidden")
})
$(".mobile_nav_icon").click(function() {
    $(this).hide()
    $(".mobile_nav_close").show()
    $("#mobile-site-navigation #mob-primary-menu").css("opacity", 1)
    $("#mobile-site-navigation #mob-primary-menu").css("visibility", "visible")
})
$(".mobile_nav_close").click(function() {
    $(this).hide()
    $(".mobile_nav_icon").show()
    $("#mobile-site-navigation #mob-primary-menu").css("opacity", 0)
    $("#mobile-site-navigation #mob-primary-menu").css("visibility", "hidden")
})