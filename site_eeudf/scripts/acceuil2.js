var nav;
var nav_top = 0;

$(document).ready(function(){
    $('.scrollspy').scrollSpy();
});

$(document).ready(function(){
  nav = document.querySelector("#nav_panel");
  addEventListener("scroll", scrolled, false);
  $("#nav_panel").css("width", $("#header").css("width"));
  scrolled();
});

function scrolled(){
	var windowHeight = document.body.clientHeight;
  var currentScroll = document.body.scrollTop || document.documentElement.scrollTop;
  if (document.body.scrollTop >= 350) {
    nav_top = $("#nav_panel").css("top");
    $("#nav_panel").css("position","fixed");
    $("#nav_panel").css("top","0px");
  } else {
    $("#nav_panel").css("position","");
    if(nav_top != 0){
      $("#nav_panel").css("top") = nav_top;
    }
  }
}
