jQuery("#sticky-contact").on("click",function(){
	jQuery("#sticky-contact-form").slideDown();
	//dynamically add for homepage speed issue
	
	jQuery("html.responsive").css("overflow", "hidden"); 
	return false;
	});
	jQuery("#sticky-contact-form .sticky-contact-form-close-btn").on("click",function(){
	jQuery("#sticky-contact-form").slideUp();
	jQuery("html.responsive").css("overflow", "scroll");
	return false;
	});