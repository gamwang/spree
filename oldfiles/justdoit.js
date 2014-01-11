
function loginCheck(form) {
if (form.id.value=="jonbai23") { 
if (form.pass.value=="269307") {              
location="google.com" 
} else {
alert("Invalid Password")
}
} else {  alert("Invalid UserID")
}
}

$(document).ready(function () {

	$(".aboutButton").on("click", function(){
		$(".about").slideToggle();
		
	});
	$("input[name='infoSubmit']").on("click",function() {
		var firstName = $("input[name='firstName']");
		var lastName = $("input[name='lastName']");
		var email = $("input[type='email']");
	    alert("Thank you for your information!");
	    
	});

	
    


});

