jQuery(function () {
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                $('#scrollUp').css('right', '10px');
            } else {
                $('#scrollUp').removeAttr('style');
            }
        });
    });
    $("#scrollUp").click(function () {
        $("html, body").animate({scrollTop: 0}, 1500);
    });
});
