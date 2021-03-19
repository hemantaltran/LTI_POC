<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
    <link rel="stylesheet" href="https://www.lntinfotech.com/wp-content/cache/minify/5314a.default.include.b32427.css" media="all" />
    <script src="https://www.lntinfotech.com/wp-content/cache/minify/5314a.default.include.9cf64d.js"></script>

    <script type='application/ld+json'>
        {
            "@context": "https:\/\/schema.org",
            "@type": "Organization",
            "url": "https:\/\/www.lntinfotech.com\/",
            "sameAs": ["http:\/\/facebook.com\/LarsenToubroInfotech\/", "https:\/\/www.linkedin.com\/company\/l&t-infotech", "https:\/\/www.youtube.com\/user\/LarsenToubroInfotech", "https:\/\/twitter.com\/LTI_Global"],
            "@id": "https:\/\/www.lntinfotech.com\/#organization",
            "name": "LTI",
            "logo": "@context": "http://schema.org",
            "@type": "Organization",
            "url": "https:\/www.lntinfotech.com",
            "logo": "https: \/www.lntinfotech.com/wp-content/uploads/2017/06/LTI_Lets_solve.png"
        }
    </script>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">


    <!-- mobile setting -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Scripts/CSS and wp_head hook -->
    <title>LTI - Larsen &amp; Toubro Infotech</title>

    <style>
        .wpcf7-submit {
            display: none;
        }

        .recaptcha-btn {
            display: block;
        }

        .grecaptcha-badge {
            display: none;
        }
    </style>
    <script type="text/javascript">
        var contactform = [];
        var checkIfCalled = true;
        var renderGoogleInvisibleRecaptchaFront = function() {
            // prevent form submit from enter key
            jQuery("input[name=_wpcf7]").attr("class", "formid");
            jQuery('.wpcf7-form').on('keyup keypress', "input", function(e) {
                var keyCode = e.keyCode || e.which;
                if (keyCode === 13) {
                    e.preventDefault();
                    return false;
                }
            });

            jQuery('.wpcf7-submit').each(function(index) {

                var checkexclude = 0;
                var form = jQuery(this).closest('.wpcf7-form');
                var value = jQuery(form).find(".formid").val();
                // check form exclude from invisible recaptcha
                if (checkexclude == 0) {
                    // Hide the form orig submit button
                    form.find('.wpcf7-submit').hide();

                    // Fetch class and value of orig submit button
                    btnClasses = form.find('.wpcf7-submit').attr('class');
                    btnValue = form.find('.wpcf7-submit').attr('value');

                    // Add custom button and recaptcha holder

                    form.find('.wpcf7-submit').after('<input type="button" id="wpcf-custom-btn-' + index + '" class="' + btnClasses + '  recaptcha-btn recaptcha-btn-type-css" value="' + btnValue + '" title="' + btnValue + '" >');
                    form.append('<div class="recaptcha-holder" id="recaptcha-holder-' + index + '"></div>');
                    // Recaptcha rendenr from here
                    var holderId = grecaptcha.render('recaptcha-holder-' + index, {
                        'sitekey': '6Lcf9aoUAAAAAF-6QoSXRBs_e5MvtDkC-g2jr3eq',
                        'size': 'invisible',
                        'badge': 'inline', // possible values: bottomright, bottomleft, inline
                        'callback': function(recaptchaToken) {
                            //console.log(recaptchaToken);
                            var response = jQuery('#recaptcha-holder-' + index).find('.g-recaptcha-response').val();
                            //console.log(response);
                            //Remove old response and store new respone
                            jQuery('#recaptcha-holder-' + index).parent().find(".respose_post").remove();
                            jQuery('#recaptcha-holder-' + index).after('<input type="hidden" name="g-recaptcha-response"  value="' + response + '" class="respose_post">')
                            grecaptcha.reset(holderId);

                            if (typeof customCF7Validator !== 'undefined') {
                                if (!customCF7Validator(form)) {
                                    return;
                                }
                            }
                            // Call default Validator function
                            else if (contactFormDefaultValidator(form)) {
                                return;
                            } else {
                                // hide the custom button and show orig submit button again and submit the form
                                jQuery('#wpcf-custom-btn-' + index).hide();
                                form.find('input[type=submit]').show();
                                form.find("input[type=submit]").click();
                                form.find('input[type=submit]').hide();
                                jQuery('#wpcf-custom-btn-' + index).attr('style', '');
                            }
                        }
                    }, false);

                    // action call when click on custom button
                    jQuery('#wpcf-custom-btn-' + index).click(function(event) {
                        event.preventDefault();
                        // Call custom validator function
                        if (typeof customCF7Validator == 'function') {
                            if (!customCF7Validator(form)) {
                                return false;
                            }
                        }
                        // Call default Validator function
                        else if (contactFormDefaultValidator(form)) {
                            return false;
                        } else if (grecaptcha.getResponse(holderId) != '') {
                            grecaptcha.reset(holderId);
                        } else {
                            // execute the recaptcha challenge
                            grecaptcha.execute(holderId);
                        }
                    });
                }
            });
        }
    </script>
    <!-- This site is optimized with the Yoast SEO Premium plugin v9.2 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="LTI (Larsen &amp; Toubro Infotech), A L&amp;T Group Company. LTI is a global technology consulting and digital solutions company with operations in 30 countries. We are helping more than 250 clients succeed in a converging world by accelerating their digital transformation using our Mosaic platform." />
    <link rel="canonical" href="https://www.lntinfotech.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="LTI - Larsen &amp; Toubro Infotech" />
    <meta property="og:description" content="LTI (Larsen &amp; Toubro Infotech), A L&amp;T Group Company. LTI is a global technology consulting and digital solutions company with operations in 30 countries. We are helping more than 250 clients succeed in a converging world by accelerating their digital transformation using our Mosaic platform." />
    <meta property="og:url" content="https://www.lntinfotech.com/" />
    <meta property="og:site_name" content="LTI" />
    <meta property="og:image" content="https://www.lntinfotech.com/wp-content/uploads/2021/01/LTI-recognized-as-a-Top-Employer-2021.png" />
    <meta property="og:image:secure_url" content="https://www.lntinfotech.com/wp-content/uploads/2021/01/LTI-recognized-as-a-Top-Employer-2021.png" />
    <meta property="og:image:width" content="1500" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="LTI recognized as Top Employer 2021 in UK" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="LTI (Larsen &amp; Toubro Infotech), A L&amp;T Group Company. LTI is a global technology consulting and digital solutions company with operations in 30 countries. We are helping more than 250 clients succeed in a converging world by accelerating their digital transformation using our Mosaic platform." />
    <meta name="twitter:title" content="LTI - Larsen &amp; Toubro Infotech" />
    <meta name="twitter:site" content="@LTI_Global" />
    <meta name="twitter:image" content="https://www.lntinfotech.com/wp-content/uploads/2021/01/LTI-recognized-as-a-Top-Employer-2021.png" />
    <meta name="twitter:creator" content="@LTI_Global" />
    <script type='application/ld+json'>
        {
            "@context": "https:\/\/schema.org",
            "@type": "WebSite",
            "@id": "#website",
            "url": "https:\/\/www.lntinfotech.com\/",
            "name": "LTI",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https:\/\/www.lntinfotech.com\/?s={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <script type='application/ld+json'>
        {
            "@context": "https:\/\/schema.org",
            "@type": "Organization",
            "url": "https:\/\/www.lntinfotech.com\/",
            "sameAs": ["http:\/\/facebook.com\/LarsenToubroInfotech\/", "https:\/\/www.linkedin.com\/company\/l&amp;t-infotech", "https:\/\/www.youtube.com\/user\/LarsenToubroInfotech", "https:\/\/twitter.com\/LTI_Global"],
            "@id": "https:\/\/www.lntinfotech.com\/#organization",
            "name": "LTI",
            "logo": "https:\/\/www.lntinfotech.com\/wp-content\/uploads\/2017\/06\/LTI_Lets_solve.png"
        }
    </script>
    <meta name="msvalidate.01" content="A4AB7F5A1AB8C83D150261DFC01A24BC" />
    <meta name="google-site-verification" content="UhC-PiDtE634TLzZ-wh2wp3-L-diq5iBtUpMWyN5Wlk" />
    <!-- / Yoast SEO Premium plugin. -->

    <link rel="alternate" type="application/rss+xml" title="LTI &raquo; Feed" href="https://www.lntinfotech.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="LTI &raquo; Comments Feed" href="https://www.lntinfotech.com/comments/feed/" />
    <link rel='stylesheet' id='wp-block-library-css' href='https://www.lntinfotech.com/wp-includes/css/dist/block-library/style.min.css' type='text/css' media='all' />









    <link rel='stylesheet' id='avia-print-css' href='https://www.lntinfotech.com/wp-content/themes/enfold/css/print.css' type='text/css' media='print' />


    <link rel='stylesheet' id='avia-style-css' href='https://www.lntinfotech.com/wp-content/themes/LnTInfotech/style.css?ver=1615450077' type='text/css' media='all' />




    <link rel="https://api.w.org/" href="https://www.lntinfotech.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://www.lntinfotech.com/wp-json/wp/v2/pages/9" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.lntinfotech.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.lntinfotech.com/wp-includes/wlwmanifest.xml" />

    <link rel='shortlink' href='https://www.lntinfotech.com/' />
    <link rel="alternate" type="application/json+oembed" href="https://www.lntinfotech.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.lntinfotech.com%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://www.lntinfotech.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.lntinfotech.com%2F&#038;format=xml" />
    <style type="text/css">
        .ctl-bullets-container {
            display: table;
            position: fixed;
            right: 0;
            height: 100%;
            z-index: 1049;
            font-weight: normal;
        }
    </style>
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="alternate" type="application/rss+xml" title="LTI RSS2 Feed" href="https://www.lntinfotech.com/feed/" />
    <link rel="pingback" href="https://www.lntinfotech.com/xmlrpc.php" />

    <style type='text/css' media='screen'>
        #top #header_main>.container,
        #top #header_main>.container .main_menu ul:first-child>li>a,
        #top #header_main #menu-item-shop .cart_dropdown_link {
            height: 70px;
            line-height: 70px;
        }

        .html_top_nav_header .av-logo-container {
            height: 70px;
        }

        .html_header_top.html_header_sticky #top #wrap_all #main {
            padding-top: 100px;
        }
    </style>
    <!--[if lt IE 9]><script src="https://www.lntinfotech.com/wp-content/themes/enfold/js/html5shiv.js"></script><![endif]-->
    <link rel="icon" href="https://www.lntinfotech.com/wp-content/uploads/2017/05/LTI_favicon.gif" type="image/gif">
    <link rel="icon" href="https://www.lntinfotech.com/wp-content/uploads/2017/05/LTI_favicon.gif" sizes="32x32" />
    <link rel="icon" href="https://www.lntinfotech.com/wp-content/uploads/2017/05/LTI_favicon.gif" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://www.lntinfotech.com/wp-content/uploads/2017/05/LTI_favicon.gif" />
    <meta name="msapplication-TileImage" content="https://www.lntinfotech.com/wp-content/uploads/2017/05/LTI_favicon.gif" />


    <!--
Debugging Info for Theme support: 

Theme: Enfold
Version: 3.8
Installed: enfold
AviaFramework Version: 4.6
AviaBuilder Version: 0.9.1
- - - - - - - - - - -
ChildTheme: LnTInfotech
ChildTheme Version: 1.0.0
ChildTheme Installed: enfold

ML:128-PU:59-PLA:17
WP:5.6
Updates: disabled
-->

    <style type='text/css'>
        @font-face {
            font-family: 'entypo-fontello';
            font-weight: normal;
            font-style: normal;
            src: url('https://www.lntinfotech.com/wp-content/themes/enfold/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello.eot?v=3');
            src: url('https://www.lntinfotech.com/wp-content/themes/enfold/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello.eot?v=3#iefix') format('embedded-opentype'),
                url('https://www.lntinfotech.com/wp-content/themes/enfold/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello.woff?v=3') format('woff'),
                url('https://www.lntinfotech.com/wp-content/themes/enfold/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello.ttf?v=3') format('truetype'),
                url('https://www.lntinfotech.com/wp-content/themes/enfold/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello.svg?v=3#entypo-fontello') format('svg');
        }

        #top .avia-font-entypo-fontello,
        body .avia-font-entypo-fontello,
        html body [data-av_iconfont='entypo-fontello']:before {
            font-family: 'entypo-fontello';
        }
    </style>
    <link rel="stylesheet" href="https://www.lntinfotech.com/wp-content/themes/LnTInfotech/css/responsive.css?ver=1615450077" />
    <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1024px)" href="https://www.lntinfotech.com/wp-content/themes/LnTInfotech/css/tablet.css?ver=1615450077" />
    <link rel="stylesheet" media="screen and (min-width: 1024px) and (max-width: 1366px)" href="https://www.lntinfotech.com/wp-content/themes/LnTInfotech/css/tablet-pro.css?ver=1615450076" />
    <link rel="stylesheet" media="screen and (min-width: 1050px) and (max-width: 1680px)" href="https://www.lntinfotech.com/wp-content/themes/LnTInfotech/css/desk-1680.css?ver=1615450077" />
    <link rel="stylesheet" media="screen and (min-width: 2560px)" href="https://www.lntinfotech.com/wp-content/themes/LnTInfotech/css/4k-mackpro.css?ver=1615450077" />

   
 
	<?php wp_head(); ?>
</head>

<body data-rsssl=1 id="top" class="home page-template-default page page-id-9 page-parent stretched open_sans  page-home">
    <script defer src="https://www.lntinfotech.com/wp-content/cache/minify/5314a.default.include-body.69d52e.js"></script>

    <!-- Sticky Contact Us -->
    <div id="sticky-contact">
        <a href="#">Contact us</a>
    </div>
    <div style="display:none;" id="sticky-contact-form">
        <div class="sticky-contact-form-wrapp">
            <h1 class="title text-center">Contact us</h1>
            <span class="sticky-contact-form-close-btn"><img src="https://www.lntinfotech.com/wp-content/uploads/2019/07/close-button.png" /></span>
            <div role="form" class="wpcf7" id="wpcf7-f1678-o1" lang="en-US" dir="ltr">
                <div class="screen-reader-response">
                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                    <ul></ul>
                </div>
                <form action="/#wpcf7-f1678-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                    <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="1678" />
                        <input type="hidden" name="_wpcf7_version" value="5.3.2" />
                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1678-o1" />
                        <input type="hidden" name="_wpcf7_container_post" value="0" />
                        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                    </div>
                    <form action="">
                        <div class="row first">
                            <div class="col-md-12">
                                <div class="col-md-6 first">
                                    <div class="form-group">
                                        <label> First Name <span class="required">*</span><br />
                                            <span class="wpcf7-form-control-wrap firstName"><input type="text" name="firstName" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Last Name <span class="required">*</span><br />
                                            <span class="wpcf7-form-control-wrap lastName"><input type="text" name="lastName" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-md-6 first">
                                    <div class="form-group">
                                        <label> Email Address <span class="required">*</span><br />
                                            <span class="wpcf7-form-control-wrap emailAddress"><input type="email" name="emailAddress" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </label>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Contact Number<br />
                                            <span class="wpcf7-form-control-wrap tel-48"><input type="tel" name="tel-48" value="" size="40" maxlength="15" minlength="4" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" /></span> </label>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-md-6 first">
                                    <div class="form-group">
                                        <label> Your Company's Name <span class="required">*</span><br />
                                            <span class="wpcf7-form-control-wrap company"><input type="text" name="company" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Country<br />
                                            <span class="wpcf7-form-control-wrap country"><select name="country" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
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
                                                </select></span> </label>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-md-6 first">
                                    <div class="form-group">
                                        <label> Your Industry <span class="required">*</span><br />
                                            <span class="wpcf7-form-control-wrap industry"><select name="industry" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                    <option value=""></option>
                                                    <option value="Banking &amp; Finance">Banking &amp; Finance</option>
                                                    <option value="Insurance">Insurance</option>
                                                    <option value="Oil &amp; Gas">Oil &amp; Gas</option>
                                                    <option value="Utilities">Utilities</option>
                                                    <option value="CPG">CPG</option>
                                                    <option value="Retail">Retail</option>
                                                    <option value="Logistics">Logistics</option>
                                                    <option value="Hi Tech">Hi Tech</option>
                                                    <option value="Life Sciences">Life Sciences</option>
                                                    <option value="Healthcare">Healthcare</option>
                                                    <option value="Media &amp; Entertainment">Media &amp; Entertainment</option>
                                                    <option value="Process Manufacturing">Process Manufacturing</option>
                                                    <option value="Automotive &amp; Aerospace">Automotive &amp; Aerospace</option>
                                                    <option value="Industrial Manufacturing">Industrial Manufacturing</option>
                                                    <option value="Engineering &amp; Construction">Engineering &amp; Construction</option>
                                                </select></span></label>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Services/Technologies interested in <span class="required">*</span><br />
                                            <span class="wpcf7-form-control-wrap service"><select name="service" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                    <option value=""></option>
                                                    <option value="Automation">Automation</option>
                                                    <option value="Cloud">Cloud</option>
                                                    <option value="Consulting">Consulting</option>
                                                    <option value="GDPR">GDPR</option>
                                                    <option value="Mosaic">Mosaic</option>
                                                    <option value="Infrastructure Management Services(IMS)">Infrastructure Management Services(IMS)</option>
                                                    <option value="Assurance Services">Assurance Services</option>
                                                    <option value="Cyber Defense Resiliency Service">Cyber Defense Resiliency Service</option>
                                                    <option value="Application Management">Application Management</option>
                                                    <option value="Data &amp; Analytics">Data &amp; Analytics</option>
                                                </select></span> </label>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-md-6 first">
                                    <div class="form-group">
                                        <label> Referred by<br />
                                            <span class="wpcf7-form-control-wrap referredby"><select name="referredby" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                                                    <option value=""></option>
                                                    <option value="Search Engine">Search Engine</option>
                                                    <option value="Sales Person">Sales Person</option>
                                                    <option value="Trade Show / Conferences">Trade Show / Conferences</option>
                                                    <option value="Referred by Peer">Referred by Peer</option>
                                                    <option value="Referred by Industry Analyst">Referred by Industry Analyst</option>
                                                    <option value="Corporate Connect">Corporate Connect</option>
                                                    <option value="Others">Others</option>
                                                </select></span></label>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group referredname" id="refered">
                                        <label> Referred Name<br />
                                            <span class="wpcf7-form-control-wrap ReferDescription"><input type="text" name="ReferDescription" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </label>
                                    </div>
                                    </p>
                                </div>
                                </p>
                            </div>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-12 message">
                                <label>Let us know how we can help you today<br />
                                    <span class="wpcf7-form-control-wrap leadDescription1"><textarea name="leadDescription1" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label>
                            </div>
                            </p>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p class="privacycheck"><span class="wpcf7-form-control-wrap subscribed"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required"><span class="wpcf7-list-item first last"><input type="checkbox" name="subscribed[]" value="" /><span class="wpcf7-list-item-label"></span></span></span></span> I agree to receive communication from LTI.<br />Refer <a href="/general-privacy-policy/" rel="nofollow">LTI privacy policy</a> to know more about how we maintain privacy about your data.<input type="hidden" value="" name="idmkmdigid"></p>
                                <p class="text-center"><input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit" id="submit" /></p>
                                </p>
                            </div>
                            </p>
                        </div>
                    </form>
                    <noscript>
                        <div class="wpcf7-response-output wpcf7-spam-blocked">Your browser does not support JavaScript!. Please enable javascript in your browser in order to get form work properly.</div>
                    </noscript>
                    <script type='text/javascript'>
                        if (contactform === undefined) {
                            var contactform = [];
                        }
                        var innerVal = [1678, 'mail_sent_ok', 'Thank you for your message. It has been sent.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'mail_sent_ng', 'There was an error trying to send your message. Please try again later.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'validation_error', 'One or more fields have an error. Please check and try again.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'spam', 'There was an error trying to send your message. Please try again later.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'accept_terms', 'You must accept the terms and conditions before sending your message.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'invalid_required', 'The field is required.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'invalid_too_long', 'The field is too long.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'invalid_too_short', 'The field is too short.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'invalid_date', 'The date format is incorrect.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'date_too_early', 'The date is before the earliest one allowed.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'date_too_late', 'The date is after the latest one allowed.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'upload_failed', 'There was an unknown error uploading the file.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'upload_file_type_invalid', 'You are not allowed to upload files of this type.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'upload_file_too_large', 'The file is too big.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'upload_failed_php_error', 'There was an error uploading the file.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'invalid_number', 'The number format is invalid.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'number_too_small', 'The number is smaller than the minimum allowed.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'number_too_large', 'The number is larger than the maximum allowed.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'quiz_answer_not_correct', 'The answer to the quiz is incorrect.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'invalid_email', 'The e-mail address entered is invalid.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'invalid_url', 'The URL is invalid.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'invalid_tel', 'The telephone number is invalid.'];
                        contactform.push(innerVal);
                        var innerVal = [1678, 'gdpr', ''];
                        contactform.push(innerVal);
                    </script>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                </form>
            </div>
        </div>
    </div>
    <!-- Sticky Contact Us End -->


    <div id='wrap_all'>


        <header id='header' class='all_colors header_color light_bg_color  av_header_top av_logo_left av_main_nav_header av_menu_right av_custom av_header_sticky av_header_shrinking_disabled av_header_stretch av_mobile_menu_tablet av_header_transparency av_header_searchicon_disabled av_header_unstick_top_disabled av_seperator_big_border av_bottom_nav_disabled '>

            <div id='header_meta' class='container_wrap container_wrap_meta  av_secondary_right av_extra_header_active av_phone_active_right av_entry_id_9'>

                <div class='container top-sub-menu'>
                    <nav class='sub_menu'>
                        <ul id="avia2-menu" class="menu">
                            <li id="menu-item-27305" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-27305"><a href="#">About Us</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-27306" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27306"><a href="https://www.lntinfotech.com/company/">Company</a></li>
                                    <li id="menu-item-27309" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27309"><a href="https://www.lntinfotech.com/news-events/">News &#038; Events</a></li>
                                    <li id="menu-item-27311" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27311"><a href="https://www.lntinfotech.com/careers/">Careers</a></li>
                                    <li id="menu-item-27315" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27315"><a href="https://www.lntinfotech.com/blogs/">Blogs</a></li>
                                    <li id="menu-item-42119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42119"><a href="https://www.lntinfotech.com/podcasts/">Podcasts</a></li>
                                    <li id="menu-item-27316" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27316"><a href="https://www.lntinfotech.com/alliances/">Alliances</a></li>
                                    <li id="menu-item-27310" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27310"><a href="https://www.lntinfotech.com/social-responsibility/">Social Responsibility</a></li>
                                    <li id="menu-item-27317" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27317"><a href="https://www.lntinfotech.com/media-kit/">Media Kit</a></li>
                                    <li id="menu-item-27307" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27307"><a href="https://www.lntinfotech.com/global-footprints/">Global Footprint</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-45377" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45377"><a href="https://www.lntinfotech.com/investors/">Investors</a></li>
                            <li id="menu-item-27318" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27318"><a href="https://www.lntinfotech.com/contact-us/">Contact Us</a></li>
                        </ul>
                    </nav>
                    <div class='phone-info with_nav'><span> <a id="search-content" href="#"><img src="https://www.lntinfotech.com/wp-content/uploads/2018/08/search_icon.png" alt="Search" title="Search" /></a> </div>
                </div>

                <div id='header_main' class='container_wrap container_wrap_logo'>


                    <div class='container av-logo-container'>
                        <div class='inner-container'><strong class='logo'><a href='https://www.lntinfotech.com/'><img height='100' width='300' src='https://www.lntinfotech.com/wp-content/uploads/2017/06/LTI_Lets_solve.png' alt='LTI' /></a></strong>
                            <nav class='main_menu' data-selectname='Select a page'>
                                <div class="avia-menu av-main-nav-wrap">
                                    <ul id="avia-menu" class="menu av-main-nav">
                                        <li id="menu-item-28490" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-top-level menu-item-top-level-1"><a title="Enterprise IT Solutions and Services" href="#"><span class="avia-bullet"></span><span class="avia-menu-text">Industries</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>


                                            <ul class="sub-menu">
                                                <li id="menu-item-28496" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Banking &amp; Financial Services" href="https://www.lntinfotech.com/industries/banking-financial-services/"><span class="avia-bullet"></span><span class="avia-menu-text">Banking &#038; Financial Services</span></a></li>
                                                <li id="menu-item-28500" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Insurance" href="https://www.lntinfotech.com/industries/insurance/"><span class="avia-bullet"></span><span class="avia-menu-text">Insurance</span></a></li>
                                                <li id="menu-item-28660" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a title="Energy &amp; Utilities" href="#"><span class="avia-bullet"></span><span class="avia-menu-text">Energy &#038; Utilities</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-28507" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Oil &amp; Gas" href="https://www.lntinfotech.com/industries/energy-utilities/oil-gas/"><span class="avia-bullet"></span><span class="avia-menu-text">Oil &#038; Gas</span></a></li>
                                                        <li id="menu-item-28508" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Utilities" href="https://www.lntinfotech.com/industries/energy-utilities/utilities/"><span class="avia-bullet"></span><span class="avia-menu-text">Utilities</span></a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-28661" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a title="CPG &amp; Retail" href="#"><span class="avia-bullet"></span><span class="avia-menu-text">CPG &#038; Retail</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-28512" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="CPG" href="https://www.lntinfotech.com/industries/cpg-retail/cpg/"><span class="avia-bullet"></span><span class="avia-menu-text">CPG</span></a></li>
                                                        <li id="menu-item-28513" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Retail" href="https://www.lntinfotech.com/industries/cpg-retail/retail/"><span class="avia-bullet"></span><span class="avia-menu-text">Retail</span></a></li>
                                                        <li id="menu-item-28517" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Logistics" href="https://www.lntinfotech.com/industries/cpg-retail/logistics/"><span class="avia-bullet"></span><span class="avia-menu-text">Logistics</span></a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-28518" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Hi-Tech" href="https://www.lntinfotech.com/industries/hi-tech/"><span class="avia-bullet"></span><span class="avia-menu-text">Hi-Tech</span></a></li>
                                                <li id="menu-item-28519" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Life Sciences" href="https://www.lntinfotech.com/industries/life-sciences/"><span class="avia-bullet"></span><span class="avia-menu-text">Life Sciences</span></a></li>
                                                <li id="menu-item-51494" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Healthcare" href="https://www.lntinfotech.com/industries/healthcare/"><span class="avia-bullet"></span><span class="avia-menu-text">Healthcare</span></a></li>
                                                <li id="menu-item-28526" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Media &amp; Entertainment" href="https://www.lntinfotech.com/industries/media-entertainment/"><span class="avia-bullet"></span><span class="avia-menu-text">Media &#038; Entertainment</span></a></li>
                                                <li id="menu-item-28665" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a title="Manufacturing" href="#"><span class="avia-bullet"></span><span class="avia-menu-text">Manufacturing</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-28528" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Process Manufacturing" href="https://www.lntinfotech.com/industries/manufacturing/process-manufacturing/"><span class="avia-bullet"></span><span class="avia-menu-text">Process Manufacturing</span></a></li>
                                                        <li id="menu-item-28529" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Automotive &amp; Aerospace" href="https://www.lntinfotech.com/industries/manufacturing/automotive-aerospace/"><span class="avia-bullet"></span><span class="avia-menu-text">Automotive &#038; Aerospace</span></a></li>
                                                        <li id="menu-item-28532" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Industrial Manufacturing" href="https://www.lntinfotech.com/industries/manufacturing/industrial-manufacturing/"><span class="avia-bullet"></span><span class="avia-menu-text">Industrial Manufacturing</span></a></li>
                                                        <li id="menu-item-28533" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Engineering &amp; Construction" href="https://www.lntinfotech.com/industries/manufacturing/engineering-construction/"><span class="avia-bullet"></span><span class="avia-menu-text">Engineering &#038; Construction</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-28491" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-top-level menu-item-top-level-2"><a title="Services" href="#"><span class="avia-bullet"></span><span class="avia-menu-text">Services</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>


                                            <ul class="sub-menu">
                                                <li id="menu-item-28670" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a title="Cloud" href="#"><span class="avia-bullet"></span><span class="avia-menu-text">Cloud</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-28536" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="IaaS" href="https://www.lntinfotech.com/services/cloud/cloud-iaas/"><span class="avia-bullet"></span><span class="avia-menu-text">IaaS</span></a></li>
                                                        <li id="menu-item-28538" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="SaaS" href="https://www.lntinfotech.com/services/cloud/cloud-saas/"><span class="avia-bullet"></span><span class="avia-menu-text">SaaS</span></a></li>
                                                        <li id="menu-item-28537" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Native" href="https://www.lntinfotech.com/services/cloud/cloud-native/"><span class="avia-bullet"></span><span class="avia-menu-text">Native</span></a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-28671" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a title="Consulting" href="#"><span class="avia-bullet"></span><span class="avia-menu-text">Consulting</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-28540" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Privacy" href="https://www.lntinfotech.com/privacy/"><span class="avia-bullet"></span><span class="avia-menu-text">Privacy</span></a></li>
                                                        <li id="menu-item-28541" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="OCM" href="https://www.lntinfotech.com/services/consulting/ocm/"><span class="avia-bullet"></span><span class="avia-menu-text">OCM</span></a></li>
                                                        <li id="menu-item-28542" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Blockchain" href="https://www.lntinfotech.com/services/consulting/blockchain/"><span class="avia-bullet"></span><span class="avia-menu-text">Blockchain</span></a></li>
                                                        <li id="menu-item-28543" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Next Generation Workplace" href="https://www.lntinfotech.com/services/consulting/next-generation-workplace/"><span class="avia-bullet"></span><span class="avia-menu-text">Next Generation Workplace</span></a></li>
                                                        <li id="menu-item-28544" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Design Studio" href="https://www.lntinfotech.com/services/consulting/design-studio/"><span class="avia-bullet"></span><span class="avia-menu-text">Design Studio</span></a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-38525" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Cloud &amp; Infrastructure Services (CIS)" href="https://www.lntinfotech.com/services/cloud-infrastructure-services/"><span class="avia-bullet"></span><span class="avia-menu-text">Cloud &#038; Infrastructure Services (CIS)</span></a></li>
                                                <li id="menu-item-61240" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.lntinfotech.com/building-the-agile-enterprise/"><span class="avia-bullet"></span><span class="avia-menu-text">Agile</span></a></li>
                                                <li id="menu-item-28546" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Assurance and Quality Engineering" href="https://www.lntinfotech.com/services/assurance-and-quality-engineering/"><span class="avia-bullet"></span><span class="avia-menu-text">Assurance and Quality Engineering</span></a></li>
                                                <li id="menu-item-28549" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Cyber Defense Resiliency Service" href="https://www.lntinfotech.com/services/cyber-security/"><span class="avia-bullet"></span><span class="avia-menu-text">Cyber Defense Resiliency Service</span></a></li>
                                                <li id="menu-item-28672" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a title="Application Management" href="#"><span class="avia-bullet"></span><span class="avia-menu-text">Application Management</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-28554" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Applications Development &amp; Maintenance" href="https://www.lntinfotech.com/services/applications-management/applications-development-maintenance/"><span class="avia-bullet"></span><span class="avia-menu-text">Applications Development &#038; Maintenance</span></a></li>
                                                        <li id="menu-item-28555" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="System Integration" href="https://www.lntinfotech.com/services/applications-management/system-integration/"><span class="avia-bullet"></span><span class="avia-menu-text">System Integration</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-28492" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-top-level menu-item-top-level-3"><a title="Solutions" href="#"><span class="avia-bullet"></span><span class="avia-menu-text">Solutions</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>


                                            <ul class="sub-menu">
                                                <li id="menu-item-60197" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="AWS" href="https://www.lntinfotech.com/enterprise-solutions/aws/"><span class="avia-bullet"></span><span class="avia-menu-text">AWS</span></a></li>
                                                <li id="menu-item-59421" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="IBM" href="https://www.lntinfotech.com/enterprise-solutions/ibm/"><span class="avia-bullet"></span><span class="avia-menu-text">IBM</span></a></li>
                                                <li id="menu-item-28561" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="JD Edwards" href="https://www.lntinfotech.com/enterprise-solutions/oracle/jd-edwards/"><span class="avia-bullet"></span><span class="avia-menu-text">JD Edwards</span></a></li>
                                                <li id="menu-item-28560" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Maximo" href="https://www.lntinfotech.com/enterprise-solutions/maximo/"><span class="avia-bullet"></span><span class="avia-menu-text">Maximo</span></a></li>
                                                <li id="menu-item-28559" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Microsoft Dynamics 365" href="https://www.lntinfotech.com/enterprise-solutions/microsoft-dynamics/"><span class="avia-bullet"></span><span class="avia-menu-text">Microsoft Dynamics 365</span></a></li>
                                                <li id="menu-item-28556" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Oracle" href="https://www.lntinfotech.com/enterprise-solutions/oracle/"><span class="avia-bullet"></span><span class="avia-menu-text">Oracle</span></a></li>
                                                <li id="menu-item-55013" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Pega" href="https://www.lntinfotech.com/enterprise-solutions/pega/"><span class="avia-bullet"></span><span class="avia-menu-text">Pega</span></a></li>
                                                <li id="menu-item-28557" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Salesforce" href="https://www.lntinfotech.com/enterprise-solutions/salesforce/"><span class="avia-bullet"></span><span class="avia-menu-text">Salesforce</span></a></li>
                                                <li id="menu-item-54144" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="SAP" href="https://www.lntinfotech.com/enterprise-solutions/sap/"><span class="avia-bullet"></span><span class="avia-menu-text">SAP</span></a></li>
                                                <li id="menu-item-59928" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="ServiceNow" href="https://www.lntinfotech.com/services/cloud-infrastructure-services/servicenow/"><span class="avia-bullet"></span><span class="avia-menu-text">ServiceNow</span></a></li>
                                                <li id="menu-item-63102" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.lntinfotech.com/enterprise-solutions/snowflake/"><span class="avia-bullet"></span><span class="avia-menu-text">Snowflake</span></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-28493" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-top-level menu-item-top-level-4"><a title="Digital Transformation" href="#"><span class="avia-bullet"></span><span class="avia-menu-text">Digital</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>


                                            <ul class="sub-menu">
                                                <li id="menu-item-28562" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Data &amp; Analytics" href="https://www.lntinfotech.com/digital-transformation/data-analytics/"><span class="avia-bullet"></span><span class="avia-menu-text">Data &#038; Analytics</span></a></li>
                                                <li id="menu-item-28719" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Internet of Things" href="https://www.lntinfotech.com/digital-transformation/internet-of-things/"><span class="avia-bullet"></span><span class="avia-menu-text">Internet of Things</span></a></li>
                                                <li id="menu-item-28564" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Digital Interactive" href="https://www.lntinfotech.com/digital-transformation/digital-interactive/"><span class="avia-bullet"></span><span class="avia-menu-text">Digital Interactive</span></a></li>
                                                <li id="menu-item-28565" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Mobility" href="https://www.lntinfotech.com/digital-transformation/mobility/"><span class="avia-bullet"></span><span class="avia-menu-text">Mobility</span></a></li>
                                                <li id="menu-item-35132" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Digital Integration" href="https://www.lntinfotech.com/digital-transformation/digital-integration/"><span class="avia-bullet"></span><span class="avia-menu-text">Digital Integration</span></a></li>
                                                <li id="menu-item-28567" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Artificial Intelligence and Cognitive" href="https://www.lntinfotech.com/digital-transformation/artificial-intelligence-cognitive/"><span class="avia-bullet"></span><span class="avia-menu-text">Artificial Intelligence and Cognitive</span></a></li>
                                                <li id="menu-item-64112" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.lntinfotech.com/digital-transformation/intelligent-automation/"><span class="avia-bullet"></span><span class="avia-menu-text">Intelligent Automation</span></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-28494" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-top-level menu-item-top-level-5"><a title="Platforms" href="#"><span class="avia-bullet"></span><span class="avia-menu-text">Platforms</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>


                                            <ul class="sub-menu">
                                                <li id="menu-item-62698" class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="https://mosaic.lntinfotech.com/"><span class="avia-bullet"></span><span class="avia-menu-text">Mosaic</span></a></li>
                                                <li id="menu-item-62226" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://canvas.lntinfotech.com/"><span class="avia-bullet"></span><span class="avia-menu-text">LTI Canvas</span></a></li>
                                                <li id="menu-item-28676" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a title="Industry Platforms" href="#"><span class="avia-bullet"></span><span class="avia-menu-text">Industry Platforms</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-28570" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Unitrax&lt;sup&gt;®&lt;/sup&gt;" href="https://www.lntinfotech.com/digital-transformation/mobility/banking-financial-services/unitrax/"><span class="avia-bullet"></span><span class="avia-menu-text">Unitrax<sup>®</sup></span></a></li>
                                                        <li id="menu-item-28571" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="REDaxis" href="https://www.lntinfotech.com/digital-platforms/industry-platforms/redaxis/"><span class="avia-bullet"></span><span class="avia-menu-text">REDaxis</span></a></li>
                                                        <li id="menu-item-28572" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="iCEOn&lt;sup&gt;TM&lt;/sup&gt;" href="https://www.lntinfotech.com/industries/insurance/new-age-distribution-customer-service/iceon/"><span class="avia-bullet"></span><span class="avia-menu-text">iCEOn<sup>TM</sup></span></a></li>
                                                        <li id="menu-item-33496" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Advanced Smart City Operating Platform" href="https://www.lntinfotech.com/digital-platforms/industry-platforms/advanced-smart-city-operating-platform/"><span class="avia-bullet"></span><span class="avia-menu-text">Advanced Smart City Operating Platform</span></a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-28677" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a title="Technology Platforms" href="#"><span class="avia-bullet"></span><span class="avia-menu-text">Technology Platforms</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-28574" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="RapidAdopt" href="https://www.lntinfotech.com/digital-platforms/technology-platforms/rapidadopt/"><span class="avia-bullet"></span><span class="avia-menu-text">RapidAdopt</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- end container_wrap-->
                </div>

                <div class='header_bg'></div>

                <!-- end header -->
        </header>

