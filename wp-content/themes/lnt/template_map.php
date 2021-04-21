<?php
/*
Template Name: Map Page
*/
get_header();
?>
<main id="primary" class="site-main">

<div >
             <a href="http://localhost/LTI_POC/">
            <img style="width:100%;" src="<?php echo get_template_directory_uri();?>/images/Lti-img3.jpg" alt="http://localhost/LTI_POC/">
</a>
        </div>
<!-- <?php
while ( have_posts() ) :
    the_post();?> -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>.entry-header -->

	<!-- <?php lnt_post_thumbnail(); ?> -->

	<div class="entry-content">
		<div class="global">
            <h2>Global Footprint</h2>
            <form action="#" method="post" id="country">
            <div class="select">
            <select class="select-box"  id="slct1" name="countryList" onclick="showHide(this)" onchange="populate(this.id,'slct2')">
                <option value="NA">North America</option>
                <option value="AP">Asia Pacific</option>
                <option value="ME">Middle East</option>
                <option value="EU">Europe</option>
                <option value="AF">Africa</option>
                <option value="CA">Central America</option>
              </select>

              <select id="slct2" name="slct2" class="select-box">
                <option value="united state">United States</option>
                <option value="canada">Canada</option>
                <option value="mexico">Mexico</option>
                </select>
                 </div>
                 
            <div class="show-hide">
                <div class="container-box-item">
                    <div class="column">
                        <p>2035 Lincoln Highway, <br> Suite 3000/1/3006/2007/2170, <br> Edison <br>
                        T: +1 7322486111 <br> F:+1 7322486199 </p>
                        <a class="view_map" href="#" data-lat="28.4268116" data-lng="77.0298436">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>4100 W Alameda Ave, <br> Burbank, CA 91505</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>Suite 704, The Hartford Trust building, <br> &50 Main Street, <br> Hartford Ct <br>
                        T: +1 8607246000 <br> F:+1 8605609418</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p> 10002 Princess Palm Ave, <br> Tampa, FL 33619 <br> F: +1 8136446229</p>
                        <a href="#">View on Map</a>
                    </div>
            
                    <div class="column">
                        <p>15132, Park of Commerce Blvd, <br> Suite 200B, <br> Jupiter, FL 33478 <br>
                        T: +1 5616933282</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>1051 Perimeter Drive, <br> Suite #470, <br> Schaumburg, IL 60173 <br>
                        T: +1 847 230 1058 <br> F: +1 847 517 9138</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>East Lake Towers Corporate Center <br> located at 4425 N Port Washington Road, <br>
                        Suite 406,
                    Glendale WI 53212</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>205 East Fifth Street, <br> 15th floor, <br> Cincinnati, OH 45202 <br>
                        T: +1 513 878 2702/03/04 <br> F: +1 513 562 1505</p>
                        <a href="#">View on Map</a>
                    </div>
                
                    <div class="column">
                        <p>4975 Preston Park Blvd, <br> Suite 320, <br> Plano, TX 75093 <br>
                            T:+1 732 248 6111 <br> F: +1 732 248 6199</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>10370 Richmond Ave, <br> Suite 1310, <br> Houston, TX 77042 <br>
                        T: +1 713 587 5800 <br> F: +1 713 334 4516</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>Larsen Toubro Infotech LLC <br>(Subsidiary) <br> 1220, N. Market St, Suite 806, <br>
                        Wilmington,DE 19801, <br> Country of New Castle, USA</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>RULETRONICS SYSTEMS INC <br> (step-down Subsidiary) <br> 271 US Highway 46, <br>Suite C104,Fairfield,<br>
                        NJ 07004</p>
                        <a href="#">View on Map</a>
                    </div>
                    <div class="column">
                        <p>Lymbyc Solutions Inc. <br> (step-down Subsidiary)<br> 1452, Hughes Road, <br>
                        Suite #200, Grapevine, <br> Texas- 76051,USA</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>6210 Stoneridge Mall Road, <br> Suite 240, <br> Pleasanton, CA 94588 <br> 
                        T: 925-568-2210</p>
                        <a href="#">View on Map</a>
                    </div>
                    </div>
              </div>


              <div class="show-hide" id="NA">
                <div class="container-box-item">
                    <div class="column">
                        <p>2035 Lincoln Highway, <br> Suite 3000/1/3006/2007/2170, <br> Edison <br>
                        T: +1 7322486111 <br> F:+1 7322486199 </p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>4100 W Alameda Ave, <br> Burbank, CA 91505</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>Suite 704, The Hartford Trust building, <br> &50 Main Street, <br> Hartford Ct <br>
                        T: +1 8607246000 <br> F:+1 8605609418</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p> 10002 Princess Palm Ave, <br> Tampa, FL 33619 <br> F: +1 8136446229</p>
                        <a href="#">View on Map</a>
                    </div>
            
                    <div class="column">
                        <p>15132, Park of Commerce Blvd, <br> Suite 200B, <br> Jupiter, FL 33478 <br>
                        T: +1 5616933282</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>1051 Perimeter Drive, <br> Suite #470, <br> Schaumburg, IL 60173 <br>
                        T: +1 847 230 1058 <br> F: +1 847 517 9138</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>East Lake Towers Corporate Center <br> located at 4425 N Port Washington Road, <br>
                        Suite 406,
                    Glendale WI 53212</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>205 East Fifth Street, <br> 15th floor, <br> Cincinnati, OH 45202 <br>
                        T: +1 513 878 2702/03/04 <br> F: +1 513 562 1505</p>
                        <a href="#">View on Map</a>
                    </div>
                
                    <div class="column">
                        <p>4975 Preston Park Blvd, <br> Suite 320, <br> Plano, TX 75093 <br>
                            T:+1 732 248 6111 <br> F: +1 732 248 6199</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>10370 Richmond Ave, <br> Suite 1310, <br> Houston, TX 77042 <br>
                        T: +1 713 587 5800 <br> F: +1 713 334 4516</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>Larsen Toubro Infotech LLC <br>(Subsidiary) <br> 1220, N. Market St, Suite 806, <br>
                        Wilmington,DE 19801, <br> Country of New Castle, USA</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>RULETRONICS SYSTEMS INC <br> (step-down Subsidiary) <br> 271 US Highway 46, <br>Suite C104,Fairfield,<br>
                        NJ 07004</p>
                        <a href="#">View on Map</a>
                    </div>
                    <div class="column">
                        <p>Lymbyc Solutions Inc. <br> (step-down Subsidiary)<br> 1452, Hughes Road, <br>
                        Suite #200, Grapevine, <br> Texas- 76051,USA</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>6210 Stoneridge Mall Road, <br> Suite 240, <br> Pleasanton, CA 94588 <br> 
                        T: 925-568-2210</p>
                        <a href="#">View on Map</a>
                    </div>
                    </div>
              </div>

              <div class="show-hide" id="AP">
                <div class="container-box-item">
                    <div class="column">
                        <p>L&T House, N M Marg, <br> Ballard Estate, <br> Mumbai 400 001, India <br>
                        T: 022-22618181 <br> F:022-22685858 </p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>L&T Technology Center, <br> Gate No 5, Saki Vihar Road,<br>
                            Powai, Mumbai 400072 <br>T: +91 22 6776 6776 <br>F: +91 22 6776 6004</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>No- EL200, TTC Electronic Zone, <br> Shil-Mahape Road,<br> Navi Mumbai - 400 710 <br>
                        F: +91 22 2761 2580</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p> Mind Space SEZ (Serene Properties), <br> Bldg No. 1,3 (2nd Floor); <br> Bldg No. 5 &amp; 6 (1st floor), <br>
                            Thane Belapur Road, Airoli, <br> Navi Mumbai 400 708 <br>T: + 91 22 6119 4545</p>
                        <a href="#">View on Map</a>
                    </div>
                    <div class="column">
                        <p>15132, Park of Commerce Blvd, <br> Suite 200B, <br> Jupiter, FL 33478 <br>
                        T: +1 5616933282</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>Godrej Eternia-A, <br>4, Mumbai-Pune Road, <br> Shivaji Nagar, <br> Pune 411 005<br>
                        T: + 91 20 6641 6262<br>F: + 91 20 6609 3325</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>Larsen &amp; Toubro Infotech Ltd.<br>2nd, 3rd, 4th &amp; 5th floor, IT-6 building,<br>
                        Qubix Business Park Private Limited<br>Plot No 2, Blue Ridge Township,<br>
                       Hinjewadi, Pune 411057, India <br> T: +91 20 6657 1212<br>F: +91 20 6657 1​​​213​​​</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>EPIP 2nd Phase KIADB Industrial Area,<br>LTI, Plot No. 25 - 31,<br>
                            Whitefield,Bengaluru 560066 <br>T: +91 80 6624 2424<br>F: +91 80 2841 3555</p>
                        <a href="#">View on Map</a>
                    </div>
                
                    <div class="column">
                        <p>Gopalan SEZ, Plot NO:152, <br>Epip Industrial Area, <br> K.R.Puram Hobli,
                         <br> Whitefiled, Bangalore-560 066<br></p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>M/s. Larsen &amp; Toubro Infotech Limited., <br>3rd floor (South Wing), Gardenia (2D) block, Embassy Tech Village SEZ, <br>
                            Devarabeesanahalli, <br> Outer Ring Road, <br>Bangalore - 560 103</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>Larsen &amp; Toubro Infotech Ltd. <br>1st Floor, 32 Shivaji Marg, </p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>Office No. 6, Tower II, 5th, <br>STELLAR IT PARK C-25, Sector 62,<br>
                            Noida, Gautam Buddha Nagar, <br>Uttar Pradesh, 201307 </p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>10th Floor, Sy.No. 107-P, <br>Laxmi Infobhan, Tower-1, <br>
                            SEZ Building, ORR Service Road, <br>Gandipet Mandal, Ranga Reddy Dist, <br>
                            Kokapet Village, Hyderabad, <br>Telangana - 500075<br>T: +91 4067940200</p>
                        <a href="#">View on Map</a>
                    </div>

                    <div class="column">
                        <p>Larsen &amp; Toubro Infotech Ltd.<br>
                            Block 4 &amp; 10, DLF IT Park (SEZ Campus), 1/124, Shivaji Gardens,<br>
                            Mount Poonamallee Road, Manapakkam, Chennai-600 089<br>T: +91 4​​4 6606 2000</p>
                        <a href="#">View on Map</a>
                    </div>
                    
                    <div class="column">
                        <p>Larsen &amp; Toubro Infotech Ltd.<br>
                            M/s. Divija Commercial Properties<br>
                            THE SKYVIEW-Building No. 20, 14th &amp; 15th Floor(Partly) - SEZ Developer<br>
                            in Survey No. 83/1 of Raidurgam Village, Serlingampally Mandal, Rangareddy<br>
                            Dist. Hyderabad 500081, Telangana</p>
                        <a href="#">View on Map</a>
                    </div>
                   
                    </div>
              </div>
              <div class="show-hide" id="ME">
                <div class="container-box-item">
                    <div class="column">
                        <p>Office 206, <br>Dubai Islamic Bank Building,<br>Dubai Internet City,<br>
                            PO Box 502807 Dubai<br>T: +971 4 4508525<br>F: +971 4 4508526​</p>
                        <a href="#">View on Map</a>
                    </div>
    
                    <div class="column">
                        <p>LTI Middle East FZ-LLC<br>(Step-down Subsidiary)<br>Premises No.: SD 2-05, <br>
                            Ground floor, Building 16, Dubai,<br> United Arab Emirates</p>
                        <a href="#">View on Map</a>
                    </div>
                    </div>
              </div>
              <div class="show-hide" id="EU">
                <div class="container-box-item">
                    <div class="column">
                        <p>The Concourse Northern Ireland, <br> Science Park Queen's Road,<br>
                            Queen's Island​, Belfast, <br>N.Ireland BT3 9DT <br>T: +44 2890 40 9941</p>
                        <a href="#">View on Map</a>
                    </div>

                    <div class="column">
                        <p>Larsen &amp; Toubro Infotech Ltd, <br> 10th Floor (North), <br> Bury House, 6 Bevis Marks,<br>
                        London EC3A 7BA<br>T: +44(0) 207 266 7777<br>F: +44 (0) 207 286 0503</p>
                        <a href="#">View on Map</a>
                    </div>

                    <div class="column">
                        <p>Syncordis Limited<br>(Step-down Subsidiary)<br>
                            C/O Rayner Essex Llp Tavistock House South,<br> Tavistock Square, London,<br>
                            United Kingdom, WC1H 9LG</p>
                        <a href="#">View on Map</a>
                    </div>

                    <div class="column">
                        <p>RULETRONICS LIMITED<br>(Step-down Subsidiary)<br>43 Farnsworth Court,<br>
                            West Parkside,<br> London SE10 0QG</p>
                        <a href="#">View on Map</a>
                    </div>

                    <div class="column">
                    <p>Larsen &amp; Toubro Infotech UK Limited<br>(Step-down Subsidiary)<br>
                        Larsen &amp; Toubro Infotech Ltd,<br> 10th Floor (North),<br>
                        Bury Court, 6 Bevis Marks,<br>London EC3A 7BA</p>
                        <a href="#">View on Map</a>
                    </div>
                    </div>
              </div>
              <div class="show-hide" id="AF">
                <div class="container-box-item">
                    <div class="column">
                        <p>Larsen &amp; Toubro Infotech Ltd​.<br>Crystal Building 1, 10th Floor,<br>
                            Almohades Avenue,<br>Casablanca 20000, Morocco</p>
                        <a href="#">View on Map</a>
                    </div>
                    </div>
              </div>
              <div class="show-hide" id="CA">
                <div class="container-box-item">
                    <div class="column">
                        <p>CONDOMINIO PARQUE EMPRESARIAL FORUM I,<br> TORRE G, PISO 2, Pozos,<br>
                            Santa Ana, San Jose,<br> Costa Rica</p>
                        <a href="#">View on Map</a>
                    </div>
                    </div>
              </div>
         </div>

         <script>
            function showHide(elem) {
            //hide the divs
            for(var i=0; i < divsO.length; i++) {
            divsO[i].style.display = 'none';
             }
            //unhide the selected div
            document.getElementById(elem.value).style.display = 'block';
            }
            
            window.onload=function() {
             //get the divs to show/hide
            divsO = document.getElementById("country").getElementsByClassName('show-hide');
            };

            function populate(s1,s2){
                var s1 = document.getElementById(s1);
                var s2 = document.getElementById(s2);
                s2.innerHTML = "";
                if(s1.value == "NA"){
                    var optionArray = ["unitedState | United States", "canada|Canada", "mexico|Mexico"];
                }else if(s1.value == "AP"){
                    var optionArray = ["india | India", "australia|Australia", "singapore|Singapore","china | China", "japan | Japan", "philippines|Philippines","hongkong | Hongkong", "tailand | Tailand"];
                }else if(s1.value == "ME"){
                    var optionArray = ["dubai | Dubai", "kuwait|Kuwait", "saudi arabia|Saudi Arabia","qatar | Qatar", "adu dhabi | Adu Dhabi"];
                }else if(s1.value == "EU"){
                    var optionArray = ["england | England", "germany|Germany", "luxembourg| Luxembourg","netherlands | Netherlands", "swizerland | Swizerland", "france | France", "spain | Spain",
                    "poland | Poland", "denmark | Denmark", "finland | Finland", "ireland | Ireland","norway | Norway","sweden | Sweden","belgium | Belgium"];
                }else if(s1.value == "AF"){
                    var optionArray = ["morocco | Morocco", "south africa | South Africa"];
                }else if(s1.value == "CA"){
                    var optionArray = ["costa rica | Costa Rica"];
                }
                for(var option in optionArray){
                    var pair = optionArray[option].split("|");
                    var newOption = document.createElement("option");
                    newOption.value = pair[0];
                    newOption.innerHTML = pair[1];
                    s2.options.add(newOption);
                }
            }

            </script>
      </form>
         <div id="map" style="WIDTH: 100%;height: 600px;"></div>
        <?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lnt' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
        
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'lnt' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

<?php
endwhile; // End of the loop.
?>

</main>   
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5sUvan3JFfy3lNy2DYEUmoJoMyrdBclI&callback=initMap&libraries=&v=weekly"
      async
    ></script>
<?php
get_footer();
?>