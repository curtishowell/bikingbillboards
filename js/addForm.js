//Adds the form to the page when the "Email Us" Link is clicked
var form_visible = false;
$(document).ready(function(){
	
	$("#emailButton").bind("click", function(event){
		$("#emailButton").unbind("click");
		toggleForm();
	});
	if(window.location.href.split("contact.php")[1] === "#thankyou"){
		
		setTimeout(function(){
			noty({
				type: 'warning',
				text: "Thanks for reaching out! We'll get back to you soon.",
				buttons: [{
					addClass: 'successButton', text: "Ok", onClick: function($noty) {

				        // this = button element
				        // $noty = $noty element

				        $noty.close();
				        
			      	}
		    	}]
			})
		}, 600);

	}
	
});
function toggleForm(){
	var $form = $("#main_content_center");
	if(!form_visible){
			
			
		$("#main_content_right").animate({width: "370px"},700, "swing", function(){
			
			$form.fadeIn(200);
			$form.css('display', 'block');
			$("#emailButton").addClass("formOpen");	
			slowDown();
		});
		
	}else{
		
		$("#emailButton").removeClass("formOpen");
		$form.fadeOut(200,function(){
			$form.css('display', 'none');
			
			$("#main_content_right").animate({width: "640px"},700, "swing", slowDown);
		});

		
		
	}
	form_visible = !form_visible;

}
function slowDown(){
	$("#emailButton").bind("click", function(event){
		$("#emailButton").unbind("click");
		toggleForm();
	});
}