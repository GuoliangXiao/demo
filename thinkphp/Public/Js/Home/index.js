//alert('x');
//alert(editTableAction);

jQuery(document).ready(function($) {
	$(".slippry-ppt").slippry();
	$(".slippry-two").particleground();
	setCalendar();	
});
function setCalendar(){
	var cal=new SimpleCalendar(".my-date");
	cal.updateSize("20em","19em");
}

