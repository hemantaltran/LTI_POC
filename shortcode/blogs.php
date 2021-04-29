<div id="Blogcol"> 
<?php echo "abcdefg"; ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, autem! Quidem sint delectus ut natus et eos aperiam reprehenderit fugiat iure eaque suscipit, vero officia cupiditate maxime reiciendis obcaecati mollitia.</p>   
</div>

<div class="combineblog">

<div class="blogs"> 
    <?php
        $request = wp_remote_get('https://drive.google.com/uc?export=download&id=1vaRQ1Ose0fTZYrkhXy5hVY1ZZPZwtJeH');

        if( is_wp_error( $request ) ) {
            return false; // Bail early
        }

        $body = wp_remote_retrieve_body( $request );
        $data1 = json_decode( $body );        
            
            
    ?>
    <div class="blog-row">
        <?php 

            $count=count($data1->card);
        for($i=0; $i<$count-1; $i++) {
            
        ?>
        
        <div class="blog-column" >
            <div class="blog-card">
                <div class="blog-header">
                    <a href=""><?php echo $data1->card[$i]->blogheader;?></a>
                </div>
                <div class="date-author">
                    <time class="slide-meta-time updated"><?php echo $data1->card[$i]->date;?></time><br>
                    <span class="author-name">By: <?php echo $data1->card[$i]->author;?> <span>
                    <span class="designation">, <?php echo $data1->card[$i]->designation;?></span></span></span>
                </div>
                <div class="card-content">                
                    <p>
                    <?php echo $data1->card[$i]->cardcontent;?>
                    </p>
                </div>
            </div>
            
        </div> 
        <?php 
            }
        ?>
        
    </div>
</div>

<div class="contentexp">
        <button type="button" class="collapsible">View by Services</button>
            <ul class="services-list">
                <li><a href="#">All Services</a></li>
                                    <li onclick="onserviceclick()"><a id="service1">Analytics &amp;Information Management</a></li>
                                    <li><a href="#">Anti-Money Laundering</a></li>
                                    <li><a href="#">ArtificialIntelligence</a></li>
                                    <li><a href="#">Assurance Services</a></li>
                                    <li><a href="#">Blockchain</a></li>
                                    <li><a href="#">Cloud Native Practice&amp; DevOps</a></li>
                                    <li><a href="#">Cloud, Security &amp;Infrastructure Services</a></li>
                                    <li><a href="#">Design Driven Delivery</a></li>
                                    <li><a href="#">Digital Consulting</a></li>
                                    <li><a href="#">GDPR</a></li>
                                    <li><a href="#">Internet of Things</a></li>
                                    <li><a href="#">Mosaic AI</a></li>
                                    <li><a href="#">Mosaic Automation</a></li>
                                    <li><a href="#">Mosaic Decisions</a></li>
                                    <li><a href="#">Mosaic Experience</a></li>
                                    <li><a href="#">Mosaic Things</a></li>
                                    <li><a href="#">OCM</a></li>
                                    <li><a href="#">Oracle</a></li>
                                    <li><a href="#">Salesforce</a></li>
                                    <li><a href="#">SAP</a></li>
                                </ul>

        <button type="button" class="collapsible">View by Industries</button>
                <ul class="industries-list">
                                    <li><a href="#">All Industries</a></li>
                                    <li><a href="#">Automotive &amp; Aerospace</a></li>
                                    <li><a href="#">Banking &amp; Financial Services</a></li>
                                    <li><a href="#">CPG</a></li>
                                    <li><a href="#">Engineering &amp; Construction</a></li>
                                    <li><a href="#">Healthcare</a></li>
                                    <li><a href="#">Hi Tech</a></li>
                                    <li><a href="#">Industrial Manufacturing</a></li>
                                    <li><a href="#">Insurance</a></li>
                                    <li><a href="#">Life Sciences</a></li>
                                    <li><a href="#">Logistics</a></li>
                                    <li><a href="#">Manufacturing</a></li>
                                    <li><a href="#">Media &amp; Entertainment</a></li>
                                    <li><a href="#">Oil &amp;Gas</a></li>
                                    <li><a href="#">Process Manufacturing</a></li>
                                    <li><a href="#">Retail</a></li>
                                    <li><a href="#">Utilities</a></li>
                                </ul>
                            </div>
</div>