var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}


// jQuery("#service1").on("click",function(){
// 	prompt("","");
//     return false;
// });

function onserviceclick(){
    prompt("","");
    document.getElementById("Blogcol").innerHTML='';
    
}

$=jQuery;
$('.blog_sidebar_category').click(function(){
    var cat_id = $(this).attr('data-id');
    $.ajax({
        type: "POST", 
        url: TemplateDirectoryUrl+"/posts.php", 
        data: "cat_id="+cat_id,
        success: function(result){ 
          $(".blog_grid_wrap").html(result);
        }
      }); 
});


// jQuery('.alert_pagination a').live('click', function(e){
//   e.preventDefault();
//   var link = jQuery(this).attr('href');
//   jQuery('#test').html('Loading...');
//   jQuery('#test').load(link+'.blog_grid_wrap');
  
//   });