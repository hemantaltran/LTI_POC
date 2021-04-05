<?php
/*
Template Name: Home Page
*/
get_header();
?>
    
    <?php echo do_shortcode('[smartslider3 slider="1"]');?>

    <div class="chevron_wrapper">
        <div class="chevron_container">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </div>
    </div>
     <div class="content-list">
        <div class="content-box">
        <div class="content-img-size">
            <img class="content-img" src="<?php echo get_template_directory_uri();?>/images/client-speak.jpg">
        </div>
        </div>

         <div class="content-box">
    <br>
<div class="content-title">Client Speak</div>
<p><a href="#">Otis is committed to building a more agile, 
digital organization, and LTI is a key strategic partner in our ERP transformation journey.</a></p>
<div class="content-text"><b>Marcus Galafassi</b></div>
<p>VP and CIO-Otis Elevator Co</p>
<div class="content-button">
<a href="#" target="_top"><button class="button-shape">
View All</button></a>
</div>
    </div>
         <div class="content-box2">
             <br>
            <div class="content-title">Blog</div>
<p><a href="#">COVID-19 Impact Series : Healthcare <br> Transformation leveraging <br> IT innovation</a></p>
<div class="content-text"><b>Vijay SR</b></div>
<p>AVP-Leader for Insurance Consulting and Transformation,CST</p>
<div class="content-button">
<a href="#" target="_top"><button class="button-shape">
View All</button></a>
</div>

        </div>
        <div class="content-box3">
            <br>
<div class="content-title"> Case Study</div>
<p><a href="#">Speedy Microsoft <br> Dynamic 365 <br> Implementation</a></p>
<p>LTI implemented Microsoft Dynamics 365 in a record time-the fastest in Asia Pacific
     region - for a next-generation digital enterprise.</p>
<a href="#">Know more</a> 



        </div>
     </div>
     
     <div style="margin-left:20px; margin-right:20px">
     <?php
             while(have_posts()){
                 the_post();
                 the_content();
             }?>
    </div>
    
<?php
get_footer();
?>