window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 45 || document.documentElement.scrollTop > 45) {
    //MINIMIZAR
    document.getElementById("menu").style.padding = "5px 10px";
    document.getElementById("menu").style.height = "40px";

    document.getElementById("logo").style.width = "50px";
    document.getElementById("logo").style.padding = "5px 0px";

    document.getElementById("desplegable").style.margin = "-15px 2px";
    document.getElementById("desplegable").style.padding = '5px 5px';
    document.getElementById("desplegable").style.height= '18px';

    document.getElementById("dropbtn").style.fontSize= '12px';
    document.getElementById("dropbtn").style.padding = '7px';

    document.getElementById("myDropdown").style.maxWidth = '74px';
    document.getElementById("myDropdown").style.top = '92%';

    document.getElementById("cuerpo").style.marginTop = '18%';

    document.getElementById("formLogin").style.right = '204px';

    var x = document.querySelectorAll('#enlace');
    for (var i = 0; i < x.length; i++) {
        var currentEl = x[i];
        currentEl.style.fontSize= '12px';
        currentEl.style.height= '10px';
        currentEl.style.paddingTop= '0px';

    }
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
    //MAXIMIZAR
    document.getElementById("menu").style.padding = "30px 10px";
    document.getElementById("menu").style.height = "110px";

    document.getElementById("logo").style.width = "160px";
    document.getElementById("logo").style.padding = "0px 0px";

    document.getElementById("desplegable").style.margin = "0px 1px";
    document.getElementById("desplegable").style.padding = '12px 12px';
    document.getElementById("desplegable").style.height= '25px';

    document.getElementById("dropbtn").style.fontSize= '18px';
    document.getElementById("dropbtn").style.padding= '3px';

    document.getElementById("myDropdown").style.maxWidth = '100px';
    document.getElementById("myDropdown").style.top = '63%';

    document.getElementById("cuerpo").style.marginTop = '15%';

    document.getElementById("formLogin").style.right = '183px';

    var x = document.querySelectorAll('#enlace');
    for (var i = 0; i < x.length; i++) {
        var currentEl = x[i];
        currentEl.style.margin = "0px 2px";
        currentEl.style.padding = '12px 12px';
        currentEl.style.fontSize= '18px';
        currentEl.style.height= '18px';
    }
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
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
  document.getElementById("desplegable").style.backgroundColor = "#ff543d";

}
