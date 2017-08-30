$(".fa-caret-down").on("click", function() {
	$(".modal-test").toggle(3000);
});

function testAlert() {
	alert("Hello");
}

// $(".fa-caret-up").mouseover(function() {
// 	$(".fa-caret-up").css("");
// })
//

$('.fa-caret-up').click(function(){
	$('#slideout').toggleClass('on');
});

$('.fa-caret-down').click(function(){
	$('#slideout').toggleClass('on');
});