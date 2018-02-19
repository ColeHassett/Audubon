//This is a javascript snippet to make the nav switch into the mobile form and function properly
$("#nav").addClass("js");
$("#nav").addClass("js").before('<div id="menu">&#9776;</div>');
$("#menu").click(
  function(){
    $("#nav").toggle();
    document.getElementById("map").href="https://www.google.com/maps/d/u/0/embed?mid=1Di5RisxbIrM-iqZVSLZFXLnSPcs"
    document.getElementById("calendar").href="https://calendar.google.com/calendar/embed?src=oop5b02hrbaqt86qp4nsof9rjg%40group.calendar.google.com&amp;ctz=America/New_York"
  }
);
$(window).resize(
  function(){
    if (window.innerWidth > 1200) {
      $("#nav").removeAttr("style");
    }
  }
);
if (window.innerWidth <= 1200) {
  $('.container').click(
    function(){
      $("#nav").hide();
    }
  );
}
$("#menu").click(
  function(e){
    e.stopPropagation();
  }
);
