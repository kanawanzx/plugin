jQuery(document).ready(function ($) {
    $('#countdown5').each(function (i, obj) {
        var date_time_end = $(this).data('date-end');
        var  date_time_now = $(this).data('date-now');
        console.log(date_time_now);
        console.log(date_time_end);
        $(this).ClassyCountdown({
            theme: "flat-colors",
            end: date_time_end,
            now:date_time_now
        });

    });
});