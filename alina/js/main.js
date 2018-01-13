function clearItems(sibls) {
    sibls.each(function (i, el) {
        $(el).removeClass('active')
    });
}

function showValue(e) {
    var html = $(e.target).html();
    alert(html)
}

function menuClick() {
    $('.menu').find('li').click(function (e) {
        var sibls = $(this).siblings('li');
        clearItems(sibls);
        $(this).addClass('active');
        setTimeout(function () {
            showValue(e);
        },200);

    })
}


$(window).on('load',function () {
    menuClick();
});


