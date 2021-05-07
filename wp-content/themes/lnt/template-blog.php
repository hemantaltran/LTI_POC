<?php
/*
Template Name: Blog Page
 <?php echo do_shortcode('[smartslider3 slider="1"]');?>
*/
get_header(); ?>
    <h1 class="Blogstitle"> Blogs </h1>
    <div class="combineblog">    
        <div class="row" id="blogs">
            <div class="col-md-8 col-sm-8 col-xs-12 custom_border_top" id="blogs">
                <div class="row blog_grid_wrap">
                    <?php 
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $all_posts = new WP_Query(array('post_type' => 'post','paged' => $paged,'posts_per_page' =>3));
                    while ( $all_posts ->have_posts() ) : $all_posts ->the_post(); ?>
                        <div class="col-md-4 col-sm-6 col-xs-12" id="blogtitle">
                            <a href="<?php echo get_the_permalink();?>">
                                <p><?php echo get_the_title(); ?></p>
                            </a>
                            <div class="blog-content"><?php echo get_the_excerpt(); ?></div>
                        </div>
                    <?php 
                    endwhile;
                    $total_pages = $all_posts->max_num_pages;
                    echo "<div class='alert_pagination' id='pagination'>";
                    if ($total_pages > 1){
                        $current_page = max(1, get_query_var('paged'));
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => 'page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_text'    => __('«Prev'),
                            'next_text'    => __('Next»'),
                        ));
                    }
                    echo "</div>";
                    wp_reset_postdata();
                    ?>
                </div>            
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 blog_sidebar contentexp">
            <div class="parent_cat_wrap">
                <?php
                    echo "<button class='collapsible'>View by Services</button><br/>";
                    echo '<ul class="services-list">';
                        $args = array('orderby'=> 'name','order'=> 'ASC','public'=> true,'parent'=>'10');
                        $categories = get_categories( $args );
                        foreach ($categories as $category) {
                            //echo '<a href="' . get_category_link( $category ) . '">' . $category->name . '</a><br ?>
                            <li class="blog_sidebar_category" 
                            data-id="<?php echo $category->cat_ID; ?>">
                            <?php echo $category->name; ?></li>
                        <?php                
                        }
                    echo '</ul>';
                ?>
            </div>
            <div class="parent_cat_wrap">
                <?php
                    echo "<button class='collapsible'>View by Industries</button><br/>";
                    echo '<ul class="industries-list">';
                        $args = array('orderby'=> 'name','order'=> 'ASC','public'=> true,'parent'=>'11');
                        $categories = get_categories( $args );
                        foreach ($categories as $category) {
                            //echo '<a href="' . get_category_link( $category ) . '">' . $category->name . '</a><br ?>
                            <li class="blog_sidebar_category" 
                            data-id="<?php echo $category->cat_ID; ?>">
                            <?php echo $category->name; ?></li>
                        <?php                
                        }
                    echo '</ul>';
                ?>
            </div>
        </div>
    </div>

    <?php
    get_footer();
    ?>
