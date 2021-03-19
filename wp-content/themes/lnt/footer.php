<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lnt
 */

?>

<footer>
             <div class="footer-content">
                 <ul class="socials">
                    <img class="img_icon2" src="<?php echo get_template_directory_uri()?>/images/icon2.jpg" alt="">
                    <div class="separator">
                        <ul>
                            <li>|</li>
                        </ul>
                    </div>
                    <li><p>A larsen &amp; Turbo <br>Group company</p></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                 </ul>
             </div>
             <div class="footer-bottom">
                 <p>© 2021 Larsen &amp; Toubro Infotech Limited</p>
             </div>
         </footer>
<?php wp_footer(); ?>
</body>
 </html>