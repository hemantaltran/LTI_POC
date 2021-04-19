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

let map;

function initMap(lat=null, lng=null) {
	if (lat && lng){
		map.setCenter({lat:parseFloat(lat), lng:parseFloat(lng)}); 
		map.setZoom(16);
		jQuery('html, body').animate({
        scrollTop: jQuery("#map").offset().top
    }, 2000);
	} else {
	map = new google.maps.Map(document.getElementById("map"), {
		center: { lat: -34.397, lng: 150.644 },
		zoom: 8,
  });
	}
}

jQuery(document).ready(function(){
	jQuery('body').on('click', '.view_map',function(e){
		e.preventDefault();
		let lat = jQuery(this).attr('data-lat');
		let lng = jQuery(this).attr('data-lng');
		initMap(lat, lng);
	})
})
