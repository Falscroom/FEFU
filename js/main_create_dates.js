$(document).ready(function() {
    moment.locale('ru', {
        monthsShort : [
            "Янв", "Фев", "Мар", "Апр", "Май", "Июн",
            "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"
        ],
        weekdaysShort : [
            "Вск","Пон", "Втр", "Срд", "Чтв", "Пят", "Суб"],
        week : {
            dow : 1, // Monday is the first day of the week.
            doy : 4  // The week that contains Jan 4th is the first week of the year.
        }
        });
    moment.locale('ru');

    var currentDate = moment();
    var firstDayOfMonth = moment([currentDate.year(),currentDate.month()]);
    firstDayOfMonth.subtract(firstDayOfMonth.weekday(),'d');
    var days =  $('.calendar_day');
    days.each(function(i,e) {
            $(e).find('.day').text(firstDayOfMonth.date());
            $(e).find('.week').text(firstDayOfMonth.format('ddd'));
            $(e).find('.month').text(firstDayOfMonth.format('MMM'));

            if(firstDayOfMonth.format('ll') == currentDate.format('ll')){
                $(e).css({'backgroundColor':'#ffffff'});
            }
            if(firstDayOfMonth.month() != currentDate.month()) {
                $(e).css({'backgroundColor':'#B0B1B1'});
            }
            firstDayOfMonth.add(1,'d');
    });
});