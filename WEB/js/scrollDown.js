window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("menu").style.padding = "5px 10px";
    document.getElementById("menu").style.height = "40px";


    document.getElementById("logo").style.width = "50px";
    document.getElementById("logo").style.padding = "5px 0px";


    var x = document.querySelectorAll('#nav');
    for (var i = 0; i < x.length; i++) {
        var currentEl = x[i];
        currentEl.style.margin = "-15px 2px";
        currentEl.style.padding = '5px 5px';
        currentEl.style.fontSize= '12px';
        currentEl.style.height= '18px';

    }
    var x = document.querySelectorAll('#login');
    for (var i = 0; i < x.length; i++) {
        var currentEl = x[i];
        currentEl.style.margin = "-15px 2px";
        currentEl.style.padding = '5px 5px';
        currentEl.style.fontSize= '12px';
        currentEl.style.height= '18px';
    }

  } else {
    document.getElementById("menu").style.padding = "30px 10px";
    document.getElementById("menu").style.height = "110px";


    document.getElementById("logo").style.width = "160px";
    document.getElementById("logo").style.padding = "0px 0px";


    var x = document.querySelectorAll('#nav');
    for (var i = 0; i < x.length; i++) {
        var currentEl = x[i];
        currentEl.style.margin = "0px 1px";
        currentEl.style.padding = '12px 12px';
        currentEl.style.fontSize= '18px';
        currentEl.style.height= '25px';

    }
    var x = document.querySelectorAll('#login');
    for (var i = 0; i < x.length; i++) {
        var currentEl = x[i];
        currentEl.style.margin = "0px 1px";
        currentEl.style.padding = '12px 12px';
        currentEl.style.fontSize= '18px';
        currentEl.style.height= '25px';

    }

  }

}
