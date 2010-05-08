$(document).ready(function(){
	// in contact.html
	$("#main-contact-form").submit(function(){
		// 'this' refers to the current submitted form
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "contact.php",
			data: str,
			success: function(msg){
				$("#note").ajaxComplete(function(event, request, settings){
					if(msg == 'OK'){ // Message Sent? Show the 'Thank You' message and hide the form
						result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
						$("#fields").hide();
					} else {
						result = msg;
					}
					$(this).html(result);
				});
			}
		});
		return false;
	});
	
	// Drawer contact
	$("#drawer-form>form").submit(function(){
		// 'this' refers to the current submitted form
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "contact.php",
			data: str,
			success: function(msg){
				if(msg.indexOf("notification_ok") > 0){ // Message Sent? Show the 'Thank You' message and hide the form
				    $("#drawer-form>form").html('<div class="drawer_notification_ok">Your message has been sent. Thank you!</div>');
				} else {
				    alert(msg.replace("<br />", "\n").replace("<br />", "\n").replace("<div class=\"notification_error\">", "").replace("</div>", ""));
				}
			}
		});
		return false;
	});
});