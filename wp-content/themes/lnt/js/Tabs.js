jQuery("#tabhead1").on("click",function(){

    jQuery("#tabhead1").removeClass("active");
 jQuery("#tabhead2").removeClass("active");
 jQuery("#tabhead3").removeClass("active");
 jQuery("#tabhead4").removeClass("active");
    jQuery(this).addClass("active");
    
    var name = jQuery(this).text();
    jQuery("h2").text(name);

        console.log(true)
        jQuery("#tab-timeline1").css("display", "none");
        jQuery("#tab-timeline2").css("display", "block");

return false;
});


jQuery("#tabhead2").on("click",function(){
    jQuery("#tabhead1").removeClass("active");
 jQuery("#tabhead2").removeClass("active");
 jQuery("#tabhead3").removeClass("active");
 jQuery("#tabhead4").removeClass("active");
    jQuery(this).addClass("active");
    
    var name = jQuery(this).text();
    jQuery("h2").text(name);

 jQuery("#tab-timeline2").css("display", "none");
        jQuery("#tab-timeline1").css("display", "block");

return false;
});

jQuery("#tabhead3").on("click",function(){
    jQuery("#tabhead1").removeClass("active");
 jQuery("#tabhead2").removeClass("active");
 jQuery("#tabhead3").removeClass("active");
 jQuery("#tabhead4").removeClass("active");
    jQuery(this).addClass("active");
    
    var name = jQuery(this).text();
    jQuery("h2").text(name);

jQuery("#tab-timeline1").css("display", "none");
        jQuery("#tab-timeline2").css("display", "block");

return false;
});


jQuery("#tabhead4").on("click",function(){
    jQuery("#tabhead1").removeClass("active");
 jQuery("#tabhead2").removeClass("active");
 jQuery("#tabhead3").removeClass("active");
 jQuery("#tabhead4").removeClass("active");
    jQuery(this).addClass("active");
    
    var name = jQuery(this).text();
    jQuery("h2").text(name);

jQuery("#tab-timeline2").css("display", "none");
        jQuery("#tab-timeline1").css("display", "block");

return false;
});



