$(document).ready(function () {

    var base = '';
    if(typeof vars !== 'undefined' && vars.template !== null){
        base = vars.template
    }
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
                 $('.slider-bot-container').html(data);
                console.log($(data).children('.product'));
                jQuery('.slider-bot').owlCarousel(
                     {
                         // loop: $(this).children().length > 1,
                        // loop:true,
                         nav:true,
                         items:1,
                         autoplay: false,
                         navText : ["<img src='"+base+"img/icons/slider-bot-prev.png'>","<img src='"+base+"img/icons/slider-bot-next.png'>"]
                     }
                 );
            }
        });

        return false;
    })

});