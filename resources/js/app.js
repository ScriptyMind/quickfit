require('./bootstrap');

function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
      'total': t,
      'days': days,
      'hours': hours,
      'minutes': minutes,
      'seconds': seconds
    };
  }

  function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = document.querySelectorAll('.days');
    var hoursSpan = document.querySelectorAll('.hours');
    var minutesSpan = document.querySelectorAll('.minutes');
    var secondsSpan = document.querySelectorAll('.seconds');

    function updateClock() {
      var t = getTimeRemaining(endtime);

      daysSpan.forEach(element => element.innerHTML = t.days);
      hoursSpan.forEach(element => element.innerHTML = ('0' + t.hours).slice(-2));
      minutesSpan.forEach(element => element.innerHTML = ('0' + t.minutes).slice(-2));
      secondsSpan.forEach(element => element.innerHTML = ('0' + t.seconds).slice(-2));

      if (t.total <= 0) {
        clearInterval(timeinterval);
      }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
  }
  var deadline = new Date(Date.parse(new Date()) + 14 * 24 * 60 * 60 * 1000);
  initializeClock('clockdiv', deadline);
