$(document).ready(function(){

$("#container").fadeIn(500);

/*var hasClass = element.content.contains("rainbow");*/

function colorChange() {
  $("#noColor").toggleClass("paused");
  $("#noColor").css("color, white");
}



$("#noColor").click(colorChange);


});


var widget = SC.Widget(document.getElementById('dino'));
$('.content').click(function() {
  widget.toggle();
});
