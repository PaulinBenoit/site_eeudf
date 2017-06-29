$(document).ready(function(){
    $('.scrollspy').scrollSpy();
});

var nav = document.querySelector("#nav_panel");
alert(nav);
function scrolled(){
	var windowHeight = document.body.clientHeight;
  var currentScroll = document.body.scrollTop || document.documentElement.scrollTop;
	nav.class = (currentScroll >= windowHeight - nav.offsetHeight) ? "fixed" : "";
}

addEventListener("scroll", scrolled, false);
