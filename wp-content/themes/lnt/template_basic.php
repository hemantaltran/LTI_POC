<?php
/*
Template Name: Basic page
 <?php echo do_shortcode('[smartslider3 slider="1"]');?>
*/
get_header(); ?>
<div >
     <?php
            while(have_posts()){
                 the_post();
                 the_content();
            }?>
</div> 

<?php
get_footer();
?>