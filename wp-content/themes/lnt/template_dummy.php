<?php
/*
Template Name: dummy Page
*/
get_header();
?>
<div style = "background: #ff0000">
             <a href="http://localhost/LTI_POC/">
            <img style="width:100%;" src="<?php echo get_template_directory_uri();?>/images/Lti-img3.jpg" alt="http://localhost/LTI_POC/">
</a>
        </div>
<?php
while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'page' );

endwhile; // End of the loop.
?>

   
<?php
get_footer();
?>