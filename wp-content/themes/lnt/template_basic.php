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

    <div class="row">
        <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $all_posts = new WP_Query(array('post_type' => 'post','paged' => $paged,'posts_per_page' => -1));
        while ( $all_posts ->have_posts() ) : $all_posts ->the_post(); ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <a href="<?php echo get_the_permalink();?>">
             <p>
                 <?php 
                    echo get_the_title();
                 ?>
             </p>
             </a>
             <div>
                 <?php 
                 echo get_the_excerpt(); 
                 ?>
             </div>
             
        </div>

        <?php 
        endwhile;
        ?>

    </div>

    
    

<?php
get_footer();
?>