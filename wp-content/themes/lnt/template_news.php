<?php
/*
Template Name: News Page
*/
get_header();
?>
 </div>
            <figure>
                <a href="http://localhost/LTI_POC/"><img style="width:100%" src="<?php echo get_template_directory_uri();?>/images/Lti-img3.jpg" alt="http://localhost/LTI_POC/"></a>
            </figure>
        

            <div style="width:100%;">
                <div style="width:70%; float: left">
                <div class="paragraph">
             <?php
             while(have_posts()){
                 the_post();
                 the_content();
             }?>
             
         </div>
                    <!-- <div class="paragraph">
                        <h2>News & Events</h2>
                        </br>
                        </br>
                        <h3>LTI recognized as a Top Employer 2021 in the UK</h3>
                        </br>
                            <p>
                                REFRESHED NEWS
                                LTI in the UK has been recognized with Top Employer 2021 certification,
                                by the Top <br> Employers Institute, the global authority recognizing excellence in people practices.
                            </p>

                            <p>
                                The Top Employers Institute is an independent company that certifies organizations 
                                based <br>on the participation and results of their HR Best Practices Survey.
                            </p>
                            <p>
                                LTI has met all the standards set in this survey that covers 6 HR domains consisting
                                of <br> 20 topics such as – People Strategy, Work Environment, Talent Acquisition, 
                                Learning,<br> Well-being and Diversity & Inclusion, and more.
                            </p>
                            <p>
                                “We’re glad that Top Employers Institute has recognized LTI in the UK. 
                                This recognition <br>is a testament to the culture that inculcates learning and collaboration.
                                Our employees are <br> at the heart of our progressive HR policies that truly inculcate
                                a vibrant and <br> ever-engaging workplace,” remarked <b>Arusha Gupta, Head HR – Europe, LTI.</b>
                            </p>
                            </br>
                            </br>
                    </div> -->
                   
                </div>
                <div class="column" style="width:30%; float: right;">
                
                </div>
            </div>
            </br>
            </br>
            <div class="social-media">
                        <p>
                        <a href=""></a>
                        <a href=""></a>
                        <a href=""><i class="fa fa-linkedin"></i></a></p>
                    </div></div>
        <!-- <div class="wrapper">
            <h2>Subscribe to our NewsLetter</h2>
            <div class="form-conteniar">
                <form>
                    <div class="input-name">
                        <i class="fa fa-user lock"></i>
                        <input type="text" placeholder="First Name" class="name">
                        <span>
                            <i class="fa fa-user lock"></i>
                            <input type="text" placeholder="Last Name" class="name">
                        </span>
                    </div>
                    <div class="input-name">
                        <i class="fa fa-envelope email"></i>
                        <input type="email" placeholder="Email" required class="text-name">
                    </div>
                    <div class="input-name">
                        <i class="fa fa-lock lock"></i>
                        <input type="password" placeholder="Password" class="text-name">
                    </div>
                    <div class="input-name">
                        <i class="fa fa-lock lock"></i>
                        <input type="password" placeholder="Re-type Password" class="text-name">
                    </div>
                    <div class="input-name">
                        <input type="radio" name="radiogroup1" id="ravi" class="radio-button">
                        <label for="ravi" class="gender">Male</label>
                        <input type="radio" name="radiogroup1" id="ravi1" class="radio-button">
                        <label for="ravi1" class="gender">Female</label>
                    </div>
                    <div class="input-name">
                        <input type="checkbox" id="cb1" class="check-button">
                        <label for="cb1" class="check">I agree to receive communication from LTI.
                            Refer LTI privacy policy to know more about how we maintain privacy about your data.</label>
                    </div>
                    <div class="input-name">
                        <input class="button" type="submit" value="Submit">
                    </div>
                </form>
            </div>
         </div> -->