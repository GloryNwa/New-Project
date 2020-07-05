$('#jcountdown1').countdown('2019/06/15 00:00:00', function(event) {
    var $this = $(this).html(event.strftime(''
        + '<div class="timer"><div>%-D</div> <div class="day">days</div></div> '
        + '<div class="timer"><div>%H</div> <div class="hr">hours</div></div> '
        + '<div class="timer"><div>%M</div> <div class="min">min</div> </div>'
        + '<div class="timer"><div>%S</div> <div class="sec">sec</div></div>'));
});

$('#jcountdown2').countdown('2019/04/15 00:00:00', function(event) {
    var $this = $(this).html(event.strftime(''
        + '<div class="timer"><div>%-D</div> <div class="day">days</div></div> '
        + '<div class="timer"><div>%H</div> <div class="hr">hours</div></div> '
        + '<div class="timer"><div>%M</div> <div class="min">min</div> </div>'
        + '<div class="timer"><div>%S</div> <div class="sec">sec</div></div>'));
});

$('#jcountdown3').countdown('2019/02/15 00:00:00', function(event) {
    var $this = $(this).html(event.strftime(''
        + '<div class="timer"><div>%-D</div> <div class="day">days</div></div> '
        + '<div class="timer"><div>%H</div> <div class="hr">hours</div></div> '
        + '<div class="timer"><div>%M</div> <div class="min">min</div> </div>'
        + '<div class="timer"><div>%S</div> <div class="sec">sec</div></div>'));
});