window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("menu").style.padding = "5px 10px";
    document.getElementById("logo").style.fontSize = "25px";

    var x = document.querySelectorAll('#nav');
    for (var i = 0; i < x.length; i++) {
        var currentEl = x[i];
        currentEl.style.padding = '5px 5px';
    }

    var x = document.querySelectorAll('#login');
    for (var i = 0; i < x.length; i++) {
        var currentEl = x[i];
        currentEl.style.padding = '5px 5px';
    }

  } else {
    document.getElementById("menu").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "35px";
    var x = document.querySelectorAll('#nav');
    for (var i = 0; i < x.length; i++) {
        var currentEl = x[i];
        currentEl.style.padding = '12px 12px';
    }
    var x = document.querySelectorAll('#login');
    for (var i = 0; i < x.length; i++) {
        var currentEl = x[i];
        currentEl.style.padding = '12px 12px';
    }

  }
}
