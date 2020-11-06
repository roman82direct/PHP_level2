$(document).ready(function() {

var overlay = $('#overlay');
var open_modal = $('.open_modal');
var close = $('.modal_close, #overlay');
var modal = $('.modal_div, .modal_div_log, .modal_div_sign');

open_modal.click( function(event){
event.preventDefault();
var div = $(this).attr('href');
overlay.fadeIn(300,
function(){
$(div)
.css('display', 'block')
.animate({opacity: 1, top: '50%'}, 100);
});
});

close.click( function(){
modal.animate({opacity: 0, top: '45%'}, 100,
function(){
$(this).css('display', 'none');
overlay.fadeOut(300);
});
});
});



