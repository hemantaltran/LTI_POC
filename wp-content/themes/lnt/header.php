<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lnt
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
                <div class="Navbar">
            <ul>
                <li><i class="fa fa-search"></i></li>
                <li><a href="#">About Us</a>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="http://localhost:8888/LTI_POC/elementor-40/">News & Events</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Podcasts</a></li>
                            <li><a href="#">Alliances</a></li>
                            <li><a href="#">Social Responsibilities</a></li>
                            <li><a href="#">Media kit</a></li>
                            <li><a href="#">Global Footprint</a></li>
                        </ul></div>
                
                </li>
                <li><a href="#">Investors</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="menu-bar">
        <ul>
            <img class="img_icon" src="<?php echo get_template_directory_uri();?>/images/Lti-icon.jpg">
            <li><a href="#">Industries</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="#">Banking & Financial Services</a></li>
                        <li><a href="#">Insurance</a></li>
                        <li class="hover-me"><a href="#">Energy & Utilities</a>&nbsp;<i class="fa fa-angle-right"></i>
                            <div class="sub-menu-2">
                                <ul>
                                    <li><a href="#">Oil & Gas</a></li>
                                    <li><a href="#">Utilities</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="hover-me"><a href="#">CPG & retail</a>&nbsp;<i class="fa fa-angle-right"></i>
                            <div class="sub-menu-2">
                                <ul>
                                    <li><a href="#">CGP</a></li>
                                    <li><a href="#">Retail</a></li>
                                    <li><a href="#">Logistics</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Hi-Tech</a></li>
                        <li><a href="#">Life Science</a></li>
                        <li><a href="#">Health care</a></li>
                        <li><a href="#">Media Entertainment</a></li>
                        <li class="hover-me"><a href="#">Manufacturing</a>&nbsp;<i class="fa fa-angle-right"></i>
                            <div class="sub-menu-2">
                                <ul>
                                    <li><a href="#">Process Manufacturing</a></li>
                                    <li><a href="#">Automative & Aerospace</a></li>
                                    <li><a href="#">Industrial Manufacturing</a></li>
                                    <li><a href="#">Engineering & Cuonstruction</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Services</a>
                <div class="sub-menu-1">
                    <ul>
                        <li class="hover-me"><a href="#">Cloud</a>&nbsp;<i class="fa fa-angle-right"></i>
                            <div class="sub-menu-2">
                                <ul>
                                    <li><a href="#">IaaS</a></li>
                                    <li><a href="#">SaaS</a></li>
                                    <li><a href="#">Native</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="hover-me"><a href="#">Consulting</a>&nbsp;<i class="fa fa-angle-right"></i>
                            <div class="sub-menu-2">
                                <ul>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">OCM</a></li>
                                    <li><a href="#">Blockchain</a></li>
                                    <li><a href="#">Next Generation Workplace</a></li>
                                    <li><a href="#">Design Studio</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Cloud & Infrastructure Service(CIS)</a></li>
                        <li><a href="#">Agile</a></li>
                        <li><a href="#">Assurance and Quality Engineering</a></li>
                        <li><a href="#">Cyber defense Resiliency Service</a></li>
                        <li class="hover-me"><a href="#">Application Manager</a>&nbsp;<i class="fa fa-angle-right"></i>
                            <div class="sub-menu-2">
                                <ul>
                                    <li><a href="#">Application Development & Maintainance</a></li>
                                    <li><a href="#">System Integration</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div></li>
            <li><a href="#">Solutions</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="#">AWS</a></li>
                        <li><a href="#">IBM</a></li>
                        <li><a href="#">JD Edwards</a></li>
                        <li><a href="#">Maximo</a></li>
                        <li><a href="#">Microsoft Dynamics 365</a></li>
                        <li><a href="#">Oracle</a></li>
                        <li><a href="#">Pega</a></li>
                        <li><a href="#">SalesForce</a></li>
                        <li><a href="#">SAP</a></li>
                        <li><a href="#">ServiceNow</a></li>
                        <li><a href="#">Snowflake</a></li>
                    </ul></div>
            </li>
            <li><a href="#">Digital</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="#">Data & Analytics</a></li>
                        <li><a href="#">Internet of things</a></li>
                        <li><a href="#">Digital Interactive</a></li>
                        <li><a href="#">Mobility</a></li>
                        <li><a href="#">Digital Integration</a></li>
                        <li><a href="#">Artificial Intelligence and cognitive</a></li>
                        <li><a href="#">Intelegent Automation</a></li>
                    </ul></div>
            </li>
            <li><a href="#">Platforms</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="#">Mosaic</a></li>
                        <li><a href="#">LTI Canvas</a></li>
                        <li class="hover-me"><a href="#">Industry platforms</a>&nbsp;<i class="fa fa-angle-right"></i>
                            <div class="sub-menu-2">
                                <ul>
                                    <li><a href="#">Unitrax</a></li>
                                    <li><a href="#">REDaxis</a></li>
                                    <li><a href="#">iCEOn<sup>TM</sup></a></li>
                                    <li><a href="#">Advanced Smart City Operating Platform</a></li>
                                </ul>
                            </div>
                        </li>
                        <li  class="hover-me"><a href="#">Technology platforms</a>&nbsp;<i class="fa fa-angle-right"></i>
                            <div class="sub-menu-2">
                                <ul>
                                    <li><a href="#">RapidAdopt</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
            </li>
        </ul>
     </div>
	 