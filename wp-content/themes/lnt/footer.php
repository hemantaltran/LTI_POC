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
         <div id="sticky-contact">
            <a href="#">Contact us</a>
        </div>
        <div style="display:none;" id="sticky-contact-form">
      <div class="sticky-contact-form-wrapp">
	     <h1 class="title text-center">Contact us</h1>
         <span class="sticky-contact-form-close-btn"><img src="https://www.lntinfotech.com/wp-content/uploads/2019/07/close-button.png" /></span>
         <div role="form" class="wpcf7" id="wpcf7-f1678-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="#">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">First Name <i>*</i></span>
                            <input type="text" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Last Name<i>*</i></span>
                            <input type="text" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Email<i>*</i></span>
                            <input type="text" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Contact Number</span>
                            <input type="text">
                        </div>

                        <div class="input-box">
                            <span class="details">Your Company Name <i>*</i></span>
                            <input type="text" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Country</span>
                            <select name="country" class="select-box" aria-invalid="false">
                                <option value=""></option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Canada">Canada</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Norway">Norway</option>
                                <option value="Australia">Australia</option>
                                <option value="Japan">Japan</option>
                                <option value="India">India</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Abu Dhabi">Abu Dhabi</option>
                                <option value="Austria">Austria</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Finland">Finland</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Spain">Spain</option>
                                <option value="Poland">Poland</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Mexico">Mexico</option>
                                <option value="China">China</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <span class="details">Your Industry <i>*</i></span>
                            <select name="country" class="select-box" aria-invalid="false">
                                <option value=""></option>
                                <option value="Banking &amp; Finance">Banking &amp; Finance</option>
                                <option value="Insurance">Insurance</option>
                                <option value="Oil &amp; Gas">Oil &amp; Gas</option>
                                <option value="Utilities">Utilities</option>
                                <option value="CPG">CPG</option>
                                <option value="Retail">Retail</option>
                                <option value="Logistics">Logistics</option>
                                <option value="Healthcare">Healthcare</option>
                                <option value="Media &amp; Entertainment">Media &amp; Entertainment</option>
                                <option value="Process Manufacturing">Process Manufacturing</option>
                                <option value="Automotive &amp; Aerospace">Automotive &amp; Aerospace</option>
                                <option value="Industrial Manufacturing">Industrial Manufacturing</option>
                                <option value="Engineering &amp; Construction">Engineering &amp; Construction
                                </option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">Service/Technologies Interested in <i>*</i></span>
                            <select name="country" class="select-box" aria-invalid="false">
                            <option value=""></option>
                            <option value="Automation">Automation</option>
                            <option value="Cloud">Cloud</option>
                            <option value="Consulting">Consulting</option>
                            <option value="GDPR">GDPR</option>
                            <option value="Mosaic">Mosaic</option>
                            <option value="Infrastructure Management Services(IMS)">Infrastructure
                                Management Services(IMS)</option>
                            <option value="Assurance Services">Assurance Services</option>
                            <option value="Cyber Defense Resiliency Service">Cyber Defense Resiliency
                                Service</option>
                            <option value="Application Management">Application Management</option>
                            <option value="Data &amp; Analytics">Data &amp; Analytics</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">Reffered by</span>
                            <input type="text" required>
                        </div>

                        <div class="input-box-two">
                            <span class="details">Let us know how we can help you today</span>
                            <input type="text">
                        </div>
                        <div class="input-name">
                            <input type="checkbox" id="cb1" class="check-button">
                            <label for="cb1" class="check">I agree to receive communication from LTI.<br>
                            <p>Refer<a> LTI privacy policy</a> to know more about how we maintain privacy about your data.</p></label>
                        </div>
                        <div class="input-name">
                            <input class="button" type="submit" value="Submit">
                        </div>
                    </div>
                </form>
<noscript>
			<div class="wpcf7-response-output wpcf7-spam-blocked">Your browser does not support JavaScript!. Please enable javascript in your browser in order to get form work properly.</div>
	</noscript><script type='text/javascript'>

						if(contactform === undefined){
							var contactform = [];
						}
						var innerVal = [1678,'mail_sent_ok','Thank you for your message. It has been sent.'];
						contactform.push(innerVal);
						var innerVal = [1678,'mail_sent_ng','There was an error trying to send your message. Please try again later.'];
						contactform.push(innerVal);
						var innerVal = [1678,'validation_error','One or more fields have an error. Please check and try again.'];
						contactform.push(innerVal);
						var innerVal = [1678,'spam','There was an error trying to send your message. Please try again later.'];
						contactform.push(innerVal);
						var innerVal = [1678,'accept_terms','You must accept the terms and conditions before sending your message.'];
						contactform.push(innerVal);
						var innerVal = [1678,'invalid_required','The field is required.'];
						contactform.push(innerVal);
						var innerVal = [1678,'invalid_too_long','The field is too long.'];
						contactform.push(innerVal);
						var innerVal = [1678,'invalid_too_short','The field is too short.'];
						contactform.push(innerVal);
						var innerVal = [1678,'invalid_date','The date format is incorrect.'];
						contactform.push(innerVal);
						var innerVal = [1678,'date_too_early','The date is before the earliest one allowed.'];
						contactform.push(innerVal);
						var innerVal = [1678,'date_too_late','The date is after the latest one allowed.'];
						contactform.push(innerVal);
						var innerVal = [1678,'upload_failed','There was an unknown error uploading the file.'];
						contactform.push(innerVal);
						var innerVal = [1678,'upload_file_type_invalid','You are not allowed to upload files of this type.'];
						contactform.push(innerVal);
						var innerVal = [1678,'upload_file_too_large','The file is too big.'];
						contactform.push(innerVal);
						var innerVal = [1678,'upload_failed_php_error','There was an error uploading the file.'];
						contactform.push(innerVal);
						var innerVal = [1678,'invalid_number','The number format is invalid.'];
						contactform.push(innerVal);
						var innerVal = [1678,'number_too_small','The number is smaller than the minimum allowed.'];
						contactform.push(innerVal);
						var innerVal = [1678,'number_too_large','The number is larger than the maximum allowed.'];
						contactform.push(innerVal);
						var innerVal = [1678,'quiz_answer_not_correct','The answer to the quiz is incorrect.'];
						contactform.push(innerVal);
						var innerVal = [1678,'invalid_email','The e-mail address entered is invalid.'];
						contactform.push(innerVal);
						var innerVal = [1678,'invalid_url','The URL is invalid.'];
						contactform.push(innerVal);
						var innerVal = [1678,'invalid_tel','The telephone number is invalid.'];
						contactform.push(innerVal);
						var innerVal = [1678,'gdpr',''];
						contactform.push(innerVal);
						</script><div class="wpcf7-response-output" aria-hidden="true"></div></form></div>      </div>
   </div>
<!-- Sticky Contact Us End -->
	
	
<?php wp_footer(); ?>
</body>
 </html>