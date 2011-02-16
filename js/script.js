window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    
    if (window.innerWidth > 1156) {
        
      if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("navbar").style.height = "110px";

        document.getElementsByClassName("logo-img")[0].style.zoom = "0.8";
        document.getElementsByClassName("logo-img")[0].style.margin = "-57px 0px 0px 0px";
        x = document.getElementsByClassName("aitem");
        for (var i = x.length - 1; i >= 0; i--) {
        	x[i].style.padding = "44px 15px 45px 15px";
        }
        document.getElementsByClassName("btn-doneren")[0].style.margin = "26% 0px 0px 0px";
        x = document.getElementsByClassName("btn-doneren");

        x = document.getElementsByClassName("dropdown-menu");
        for (var i = x.length - 1; i >= 0; i--) {
            x[i].style.top = "110px";
        }

      } else {
        document.getElementById("navbar").style.height = "140px";
        document.getElementsByClassName("logo-img")[0].style.zoom = "1";
        document.getElementsByClassName("logo-img")[0].style.margin = "-42px 0px 0px 0px";
        x = document.getElementsByClassName("aitem");
        for (var i = x.length - 1; i >= 0; i--) {
        	x[i].style.padding = "58px 15px 61px 15px";
        }
        document.getElementsByClassName("btn-doneren")[0].style.margin = "38% 0px 0px 0px";

        x = document.getElementsByClassName("dropdown-menu");
        for (var i = x.length - 1; i >= 0; i--) {
            x[i].style.top = "140px";
        }
      }
    } else {
        document.getElementsByClassName("btn-doneren")[0].style.margin = "0px";
    }
}