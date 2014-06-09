//Scroll to top
$(function () {    
    changeContent(_page);
    
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });

    $('#toTop').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
    });
});

function changeContent(_page) {
    $(".container").load(_page);
    $('html,body').scrollTop(0);
    return false;
}

//Drag forbid
document.ondragstart = function (e) {
    return false;
};