<?php
/*
Template Name: Basic Page 
 <?php echo do_shortcode('[smartslider3 slider="1"]');?>
*/
get_header();
?>
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