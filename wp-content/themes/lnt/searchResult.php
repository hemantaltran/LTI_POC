<?php
define('WP_USE_THEMES', false);  
require_once('../../../wp-load.php');

$searchQuery = $_POST['searchQuery'];

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_type = array('post','page');
$search_posts = new WP_Query(array('post_type' => $post_type,'posts_per_page'=>'4','s' => $searchQuery));
  ?>
   <div id="info-one">
        <div id='test-cs'>
            <p id='header'>Here is what we found</p>
            <?php 
            while ( $search_posts ->have_posts() ) : $search_posts ->the_post(); ?>
                <a href="<?php echo get_the_permalink();?>">
                    <p><?php echo get_the_title(); ?></p>
                </a>
            <?php endwhile; ?>
        </div>
    </div>
  <?php 
   $total_pages = $search_posts->max_num_pages;

   echo "<nav>
            <ul class='pagination justify-content-center fixed-bottom mb-5'>
                <li class='page-item active'>
                ";
    // echo "<div class='alert_pagination'>";
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
    echo "</li>
    </ul></div>";
?>

