$(document).ready(function () {

    $(document).on('click', '#new-arrivals', function () {
        $.ajax({
            url: vars.url,
            type: "POST",
            data: {
                action: 'getsectionposts',
                sec_id: 14,
            },
            success: function (data) {
                $('.slider-bot').html(data);
            }
        });
        return false;
    })

    $(document).on('click', '#best-selling', function () {
        $.ajax({
            url: vars.url,
            type: "POST",
            data: {
                action: 'getsectionposts',
                sec_id: 16,
            },
            success: function (data) {
                $('.slider-bot').html(data);
            }
        });
        return false;
    })

    $(document).on('click', '#sales-specials', function () {
        $.ajax({
            url: vars.url,
            type: "POST",
            data: {
                action: 'getsectionposts',
                sec_id: 18,
            },
            success: function (data) {
                $('.slider-bot').html(data);
            }
        });
        return false;
    })

    $(document).on('click', '.catalogue_menu>li>a', function () {
        $.ajax({
            url: vars.url,
            type: "POST",
            data: {
                action: 'get_posts_by_category',
                cat_id: $(this).html(),
            },
            success: function (data) {
                // $('.slider-bot').html(data);
                $('.slider-bot').owlCarousel('destroy');
                 $('.slider-bot').html(data);
                 $('.slider-bot').owlCarousel(
                     {
                         loop:true,
                         nav:true,
                         items:1,
                         autoplay: false,
                     }
                 );
            }
        });

        return false;
    })

});