<?php
/*
Template Name: Home Page 
 <?php echo do_shortcode('[smartslider3 slider="1"]');?>
*/
get_header();
echo do_shortcode('[contact-form-7 id="361" title="Contact form"]');
?>
<div class="slider">
    <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">

        <?php $slider = new WP_Query(["post_type"=>"sliders",  'orderby' => 'menu_order', 
         'order' => 'ASC', ]);
        if ($slider -> have_posts()){
            $i = 0;
            while ($slider -> have_posts()){
                $slider -> the_post();

              ?>

        <div class="slide <?php if ($i == 0){ echo 'first'; }?>"> 
            <?php if (get_field('video_url')){?>  <img class="auto-play-video" src="<?php
                echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" data-bs-toggle="modal"
                data-bs-target="#exampleModal">

                 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">LNT Infotech</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                <div class="modal-body">

                <iframe width="480" height="315" src="https://www.youtube.com/embed/CKMH2WxcxDU?rel=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                 </div>
                </div>
                </div>
            <?php } else the_post_thumbnail(); ?> 
        </div>

         <?php 
                $i++;
                 }
        }
        ?>

        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
</div>

<script type="text/javascript">
    var counter = 1;
    setInterval(function () {
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if (counter > 4) {
            counter = 1;
        }

    }, 5000);
</script>
    <!-- Modal -->
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <div class="chevron_wrapper">
        <div class="chevron_container">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </div>
    </div>


<div class="row home_features_row">
    <div class="col-md-3 col-sm-6 col-xs-12 home_features_wrap">
        <div class="home_features">
            <div class="content-img-size">
                <img class="content-img" src="<?php echo get_template_directory_uri();?>/images/client-speak.jpg">
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12 home_features_wrap">
        <div class="home_features">
            <div class="content-title">Client Speak</div>
            <?php wp_reset_postdata();
            $testimonial_id = get_field('choose_testimonial');
            ?>
            <p>
                <a href="<?php echo get_the_permalink($testimonial_id); ?>"><?php echo get_the_title($testimonial_id); ?></a>
            </p>
            <div class="content-text"><b><?php echo get_field('testimonial_by',$testimonial_id); ?></b></div>
            <p><?php echo get_field('t_designation',$testimonial_id); ?></p>
            <div class="content-button">
                <a href=" " target="_top"><button id="btn">View All</button></a>
            </div>
        </div>        
    </div>
 
    <div class="col-md-3 col-sm-6 col-xs-12 home_features_wrap">
        <div class="home_features">
            <div class="content-title">Blog</div>
                <div class="blog-slide">
                    <?php $blog_id = get_field('choose_blog'); 
                        foreach ($blog_id as $value) { ?>
                            <div class="single_blog">
                                <p><a href="<?php echo get_the_permalink($value); ?>"><?php echo get_the_title($value); ?></a></p>
                                <div class="content-text"><b><?php echo get_field('testimonial_by',$value); ?></b></div>
                                <p><?php echo get_field('t_designation',$value); ?></p>
                            </div>
                        <?php
                        }
                    ?>
                </div>        
                <div class="content-button">
                    <a href="<?php echo get_site_url(); ?>/blog" target="_top"><button id="btn">View All</button></a>
                </div>
        </div>
    </div>
 
    <div class="col-md-3 col-sm-6 col-xs-12 home_features_wrap">
        <div class="home_features">
            <div class="content-title"> Case Study</div>
            <div class="blog-slide">
                    <?php $caseStudy_id = get_field('choose_casestudy'); 
                        foreach ($caseStudy_id as $value) { ?>
                            <div class="single_blog">
                                <p><a href="<?php echo get_the_permalink($value); ?>"><?php echo get_the_title($value); ?></a></p>
                                <div class="content-text"><?php echo get_the_excerpt($value); ?></div>
                            </div>
                        <?php
                        }
                    ?>
                </div>   
            <a href="#">Know more</a>
        </div>         
    </div>
</div>
     
    <div style="margin-left:20px; margin-right:20px">
     <?php
             while(have_posts()){
                 the_post();
                 the_content();
             }?>
    </div>
    <div class="accordian">
    <ul >
            <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Agile-Co-create-Innovation-thumbnail.jpg);"></li>
            <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Agile-Development-thumbnail.jpg);"></li>
            <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Agile-Remote-Agile-thumbnail.jpg);"></li>
            <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Agile-Transformative-thumbnail.jpg);"></li>
            
        </ul>

    </div>
<?php
get_footer();
?>
<script>
    $(document).ready(function(){
        $('.blog-slide').slick({
            slidesToShow: 1, 
            slidesToScroll: 1, 
            autoplay: true, 
            autoplaySpeed: 3000,
            arrows: false,
            dots: true,
        });
    });
</script>

