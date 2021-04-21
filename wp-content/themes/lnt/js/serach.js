


jQuery("#searchlayoutbtn").on("click",function(){
	prompt("", "");
	const pg1Data = {"test":"<div id='info-one'>"
                    +"<div id='test-cs'>"
                    + "<p id='header'>Here is what we found</p>"
                    + "<p>Test Data & Environment Management</p>"
                    + "<p>LTI positioned as a Leader in NelsonHall's Software Testing</p>"
                    + "<p>LTI positioned as a 'Leader' for Digital Focus in NelsonHall NEAT for Digital Testing</p>"
                    +"</div>"

                    +"<nav>"
                    +"<ul class='pagination justify-content-center fixed-bottom mb-5'>"
                        +"<li class='page-item active'><a href='' class='page-link rounded-circle m-1'>1</a></li>"
                        +"<li class='page-item'><a href='' class='page-link rounded-circle m-1'>2</a></li>"
                        +"<li class='page-item'><a href='' class='page-link rounded-circle m-1'>3</a></li>"
                        +"<li class='page-item'><a href='' class='page-link rounded-circle m-1'>4</a></li>"
    
                        +"<li class='page-item' title='Next'>"
                            +"<a href='' class='page-link rounded-circle m-1'>"
                                +"<i class='fas fa-chevron-right text-primary'></i>"
                            +"</a>"
                            +"</li>"
                        +"</ul>"
                        +"</nav>"
                    +"</div>",

                                "test1":"<div id='info-one'>"
                    +"<div id='test-cs'>"
                    + "<p id='header'>Here is what we found</p>"
                    + "<p>Test Data & Environment Management</p>"
                    + "<p>LTI positioned as a Leader in NelsonHall's Software Testing</p>"
                    + "<p>LTI positioned as a 'Leader' for Digital Focus in NelsonHall NEAT for Digital Testing</p>"
                    + "<p>Read More</p>"
                    +"</div>"

                    +"<nav>"
                    +"<ul class='pagination justify-content-center fixed-bottom mb-5'>"
                        +"<li class='page-item active'><a href='' class='page-link rounded-circle m-1'>1</a></li>"
                        +"<li class='page-item'><a href='' class='page-link rounded-circle m-1'>2</a></li>"
                        +"<li class='page-item'><a href='' class='page-link rounded-circle m-1'>3</a></li>"
                        +"<li class='page-item'><a href='' class='page-link rounded-circle m-1'>4</a></li>"
                        +"<li class='page-item' title='Next'>"
                            +"<a href='' class='page-link rounded-circle m-1'>"
                                +"<i class='fas fa-chevron-right text-primary'></i>"
                            +"</a>"
                            +"</li>"
                        +"</ul>"
                        +"</nav>"
                    +"</div>",


                                "test2":"<div id='info-one'>"
                    +"<div id='test-cs'>"
                    + "<p id='header'>Here is what we found</p>"
                    + "<p>Test Data & Environment Management</p>"
                    + "<p>LTI positioned as a Leader in NelsonHall's Software Testing</p>"
                    + "<p>LTI positioned as a 'Leader' for Digital Focus in NelsonHall NEAT for Digital Testing</p>"
                    +"</div>"

                    +"<nav>"
                    +"<ul class='pagination justify-content-center fixed-bottom mb-5'>"
                        +"<li class='page-item active'><a href='' class='page-link rounded-circle m-1'>1</a></li>"
                        +"<li class='page-item'><a href='' class='page-link rounded-circle m-1'>2</a></li>"
                        +"<li class='page-item'><a href='' class='page-link rounded-circle m-1'>3</a></li>"
                        +"<li class='page-item'><a href='' class='page-link rounded-circle m-1'>4</a></li>"
                        +"<li class='page-item' title='Next'>"
                            +"<a href='' class='page-link rounded-circle m-1'>"
                                +"<i class='fas fa-chevron-right text-primary'></i>"
                            +"</a>"
                            +"</li>"
                        +"</ul>"
                        +"</nav>"
                        
                    +"</div>"
                };

	console.log(Object.keys(pg1Data));
	var value = jQuery("#input-search-box").value
	if(value !==null && Object.keys(pg1Data).includes(value)){
		jQuery("page-cont").innerHTML=pg1Data[value];
	} 

	// jQuery("#sticky-contact-form").slideDown();
	// //dynamically add for homepage speed issue
	
	// jQuery("html.responsive").css("overflow", "hidden"); 
	return false;
});

