<?php
define('WP_USE_THEMES', false);  
require_once('../../../wp-load.php');

$cat_id = $_POST['cat_id'];

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$cat_posts = new WP_Query(array('post_type' => 'post','paged' => $paged,'posts_per_page' => 3,'cat' => $cat_id,));
  while ( $cat_posts ->have_posts() ) : $cat_posts ->the_post(); ?>
    <div class="col-md-4 col-sm-6 col-xs-12" id="blogtitle">
        <a href="<?php echo get_the_permalink();?>">
            <p><?php echo get_the_title(); ?></p>
        </a>
        <div class="blog-content"><?php echo get_the_excerpt(); ?></div>
    </div>
<?php 
endwhile; 
   $total_pages = $cat_posts->max_num_pages;
   
  // $base = '/blog/';
  // $orig_req_uri = $_SERVER['REQUEST_URI'];
  // $_SERVER['REQUEST_URI'] = $base;
  // echo get_pagenum_link( $paged - 1 );
  //echo $_SERVER['REQUEST_URI'] = $orig_req_uri;

    echo "<div class='alert_pagination' id='pagination'>";
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
        echo paginate_links(array(
            'base' => get_pagenum_link($paged - 1) . '%_%',
            'format' => 'page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('«Prev'),
            'next_text'    => __('Next»'),
        ));
    }
    echo "</div>";
?>