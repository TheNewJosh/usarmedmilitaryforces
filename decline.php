<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_dark">
<!-- Mirrored from usmilitaryarmedforces.us/decline by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 16:06:55 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	 <?php
	    include "includes/link.php"; 
	     require('components/lib/phpmailer/PHPMailerAutoload.php');
	    
	    if(isset($_POST['submit_decline'])){
	        $name = $_POST['name'];
            $email = $_POST['email'];
            $relationship = $_POST['relationship'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            
           $emailID = "support@usarmedmilitaryforces.us";
           $subject = $subject;
           $body = '
                <h4>Decline</h4>
                <p>
                    <b>Message From '.$name.'</b><br>
                    <b>Name:</b> '.$name.'<br>
                    <b>Email:</b> '.$email.'<br>
                    <b>Relationship with Deployed Soldier:</b><br> '.$relationship.'<br>
                    <b>Subject:</b><br> '.$subject.'<br>
                    <b>Reason for Declination:</b><br>
                    '.$message.'<br>
                    <a href="mailto:'.$email.'">Reply: '.$email.'</a>
                </p>
           ';
           include('components/core/email-send.php');
           
           $emailID = $email;
           $subject = "Apply for Declination";
           $body = '
                <div style="background-color: #202125; text-align:center; padding: 10px;">
                    <img src="https://usmilitaryarmedforces.us/img/United_States_Department_of_Defense_Seal.svg_.png" style="width: 100px; height: 100px;">
                    <br>
                    <p style="color:#ffffff;"><b style="color:#ffffff;">Application for Declination</b><br>Your request has been recieved.<br>You will be contact shortly</p>
                    <a href="https://usarmedmilitaryforces.us/" style="background-color: #63490A; color: #000000; border-radius: 50px; padding: 10px; border: none;">RETURN TO WEBSITE</a>
                    <a href="mailto:support@usarmedmilitaryforces.us" style="background-color: #2B2B2B; text-decoration: none; list-style-type: none;">
                        <br>
                        <p style="color:#63490A;"><b style="color:#ffffff;">Have a question?</b><br>Reach out to our team</p>
                    </a>
                </div>
           ';
           include('components/core/email-send.php');
           echo '<script>alert("Message Sent"); window.location.href="decline.php"</script>';
	    }
	?>
</head>

<body class="home page-template-default page page-id-96 custom-background wp-custom-logo frontpage body_tag scheme_dark blog_mode_front body_style_wide  is_stream blog_style_excerpt sidebar_hide expand_content remove_margins trx_addons_present header_type_custom header_style_header-custom-24 header_position_over menu_style_top no_layout wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
	<div class="body_wrap">
		<div class="page_wrap">
			<?php include "includes/header.php"; ?>
			<div class="page_content_wrap">
				<div class="content_wrap">
					<div class="content">
						<article id="post-1279" class="post_item_single post_type_page post-1279 page type-page status-publish hentry">
							<div class="post_content entry-content">
								<div class="vc_row wpb_row vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<p><img class="alignnone wp-image-1301 size-full" src="assets/img/YK3MA4QI4FCONMRMHLWTF4OEOM.jpg" alt="" width="1200" height="628" srcset="assets/img/YK3MA4QI4FCONMRMHLWTF4OEOM.jpg 1200w, assets/img/YK3MA4QI4FCONMRMHLWTF4OEOM-300x157.jpg 300w, assets/img/YK3MA4QI4FCONMRMHLWTF4OEOM-1024x536.jpg 1024w, assets/img/YK3MA4QI4FCONMRMHLWTF4OEOM-768x402.jpg 768w, assets/img/YK3MA4QI4FCONMRMHLWTF4OEOM-370x194.jpg 370w, assets/img/YK3MA4QI4FCONMRMHLWTF4OEOM-760x398.jpg 760w" sizes="(max-width: 1200px) 100vw, 1200px" /></p>
														<p>&#8220;Deployment&#8221; refers to activities required to move military personnel and materials from a home installation to a specified destination. For service members and families, it has come to mean much more: the preparations and personal needs that need to be taken care of at home before, during, and after deployment.</p>
														<h4>‘Deploy or get out’ policy?</h4>
														<p>In 2018, former Defense Secretary Jim Mattis — part of his effort to make the force more “lethal”, imposed this policy, where troops who are unable to meet deployment standards are expected to either get a waiver justifying their status or face separation from the force.</p>
														<h4>Good News</h4>
														<p>This policy has been mauled and we&#8217;ve been directed by the Department of Defense to bring forth the Deployment Declination option. A Soldier on Assignment Instructions can now be able to sign a Deployment Declination request.</p>
														<h4>Who can Apply for this form?</h4>
														<p><img class="wp-image-1297 size-full" src="assets/img/Relationship-Tool-Helps-You-Love-Every-Day.jpg" alt="" width="2400" height="1350" srcset="assets/img/Relationship-Tool-Helps-You-Love-Every-Day.jpg 2400w, assets/img/Relationship-Tool-Helps-You-Love-Every-Day-300x169.jpg 300w, asset/img/Relationship-Tool-Helps-You-Love-Every-Day-1024x576.jpg 1024w, assets/img/Relationship-Tool-Helps-You-Love-Every-Day-768x432.jpg 768w, assets/img/Relationship-Tool-Helps-You-Love-Every-Day-1536x864.jpg 1536w, assets/img/Relationship-Tool-Helps-You-Love-Every-Day-2048x1152.jpg 2048w, assets/img/Relationship-Tool-Helps-You-Love-Every-Day-370x208.jpg 370w, assets/img/Relationship-Tool-Helps-You-Love-Every-Day-1170x658.jpg 1170w, assets/img/Relationship-Tool-Helps-You-Love-Every-Day-760x428.jpg 760w, assets/img/Relationship-Tool-Helps-You-Love-Every-Day-270x152.jpg 270w" sizes="(max-width: 2400px) 100vw, 2400px" /></p>
														<p>Unfortunately, a deployed soldier is ineligible to apply for the Deployment Declination Form. Only a loved one, family, child, fiancé, sibling or close friend is eligible to apply, and you must do so with the consent of the deployed soldier.</p>
														<h4>Applying for the Deployment Declination</h4>
														<p><img class="alignnone wp-image-1296 size-full" src="assets/img/Q36CISKSGBFLJFLN3MQZS4KSRY.jpg" alt="" width="1200" height="900" srcset="assets/img/Q36CISKSGBFLJFLN3MQZS4KSRY.jpg 1200w, assets/img/Q36CISKSGBFLJFLN3MQZS4KSRY-300x225.jpg 300w, assets/img/Q36CISKSGBFLJFLN3MQZS4KSRY-1024x768.jpg 1024w, assets/img/Q36CISKSGBFLJFLN3MQZS4KSRY-768x576.jpg 768w, assets/img/Q36CISKSGBFLJFLN3MQZS4KSRY-370x278.jpg 370w, assets/img/Q36CISKSGBFLJFLN3MQZS4KSRY-760x570.jpg 760w" sizes="(max-width: 1200px) 100vw, 1200px" /></p>
														<p>Gearing up for a deployment can be stressful. But getting your deployment declined, canceled or postponed can be more so, especially after the DOD spending weeks, even months, preparing for the mission, putting everything in place, setting all up having you in mind, the wasted resources and finances already made, because of this a fee is attached for the declination form to be processed and accepted.</p>
														<h4>Getting Started</h4>
														<p class="ng-scope"><img class="alignnone wp-image-1298 size-full" src="assets/img/Cancelled-or-Postponed-Deployment.jpg" alt="" width="2400" height="1350" srcset="assets/img/Cancelled-or-Postponed-Deployment.jpg 2400w, assets/img/Cancelled-or-Postponed-Deployment-300x169.jpg 300w, assets/img/Cancelled-or-Postponed-Deployment-1024x576.jpg 1024w, assets/img/Cancelled-or-Postponed-Deployment-768x432.jpg 768w, assets/img/Cancelled-or-Postponed-Deployment-1536x864.jpg 1536w, assets/img/Cancelled-or-Postponed-Deployment-2048x1152.jpg 2048w, assets/img/Cancelled-or-Postponed-Deployment-370x208.jpg 370w, assets/img/Cancelled-or-Postponed-Deployment-1170x658.jpg 1170w, assets/img/Cancelled-or-Postponed-Deployment-760x428.jpg 760w, assets/img/Cancelled-or-Postponed-Deployment-270x152.jpg 270w" sizes="(max-width: 2400px) 100vw, 2400px" /></p>
														<p>All requests for declination, deletion, deferment, or early arrival must be submitted through the form and contact details below in accordance with applicable guidance, with the exception of requests based on operational or compassionate needs.</p>
													</div>
												</div>
												<div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey"><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row wpb_row vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<h2 style="text-align: left;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Contact Details</h2>
												<div class="vc_empty_space  height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
												<div id="widget_contacts_1088140952" class="widget_area sc_widget_contacts vc_widget_contacts wpb_content_element">
													<aside id="widget_contacts_1088140952_widget" class="widget widget_contacts">
														<div class="contacts_wrap">
															<div class="contacts_info"><span class="contacts_email"><a href="mailto:support@usarmedmilitaryforces.us">support@usarmedmilitaryforces.us</a></span></div>
														</div>
														<!-- /.contacts_wrap -->
													</aside>
												</div>
												<div class="vc_empty_space  height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<h3>Or Use the Form Below;</h3>
														<div role="form" class="wpcf7" id="wpcf7-f1300-p1279-o1" lang="en-US" dir="ltr">
															<div class="screen-reader-response" role="alert" aria-live="polite"></div>
															<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="wpcf7-form init">
																<p>
																	<label> Your Name (required)
																		<br/> <span class="wpcf7-form-control-wrap your-name">
	<input type="text" name="name" value="" required  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" /></span> </label>
																</p>
																<p>
																	<label> Your Email (required)
																		<br /> <span class="wpcf7-form-control-wrap your-email">
	<input type="email" required name="email" value=""  class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"  /></span> </label>
																</p>
																<p>
																	<label> Subject
																		<br /> <span class="wpcf7-form-control-wrap your-subject">
	<input type="text" name="subject" required value=""  class="wpcf7-form-control wpcf7-text"  /></span> </label>
																</p>
																<p>
																	<label> Relationship with Deployed Soldier
																		<br /> <span class="wpcf7-form-control-wrap text-481">
	<input type="text" name="relationship" required value=""  class="wpcf7-form-control wpcf7-text"  /></span></label>
																</p>
																<p>
																	<label> Reason for Declination
																		<br /> <span class="wpcf7-form-control-wrap your-message">
	<textarea name="message" required cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" ></textarea></span> </label>
																</p>
																<p>
																	<input type="submit" name="submit_decline" value="Send" class="wpcf7-form-control wpcf7-submit" />
																</p>
																<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
															</form>
														</div>
													</div>
												</div>
												<div class="vc_empty_space  height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- .entry-content -->
						</article>
					</div>
					<!-- </.content> -->
				</div>
				<!-- </.content_wrap> -->
			</div>
			<!-- </.page_content_wrap> -->
			<?php include "includes/footer.php"; ?>
		<!-- Mirrored from usmilitaryarmedforces.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jun 2021 12:17:50 GMT -->
		<!-- Mirrored from usmilitaryarmedforces.us/decline by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 16:06:56 GMT -->

</html>