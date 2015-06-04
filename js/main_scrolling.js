$(document).ready(function() {
    var day = $('.calendar_day:first');
    var height = day.height() / 100 * 80 + 3; // 5 тут примерно
    var width = day.width() / 2 - 40;

    function updateScroll(height) {
        $('.list_events').each(function (i, e) {
            if (this.scrollHeight > height) {
                $(this).prev().css({
                    'opacity': '1'
                });
            }
        });
    }

    updateScroll(height);
    $(window).resize(function() {
        var day = $('.calendar_day:first');
        var height = day.height() / 100 * 80 + 3;
        updateScroll(height); // TODO убирать при расжимании
    });
});