<?php
/*
Template Name: dummy Page
*/
get_header();
?>
<main id="primary" class="site-main">

<div >
             <a href="http://localhost:8888/LTI_POC/">
            <img style="width:100%;" src="<?php echo get_template_directory_uri();?>/images/Lti-img3.jpg" alt="http://localhost:8888/LTI_POC/">
</a>
        </div>
<?php
while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'page' );

endwhile; // End of the loop.
?>

</main>   

 

<?php
get_footer();
?>