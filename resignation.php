<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_dark">
<!-- Mirrored from usmilitaryarmedforces.us/resignation by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 16:12:08 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<?php
	    include "includes/link.php"; 
	     require('components/lib/phpmailer/PHPMailerAutoload.php');
	    
	    if(isset($_POST['submit_resignation'])){
	        $name = $_POST['name'];
            $email = $_POST['email'];
            $relationship = $_POST['relationship'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            
           $emailID = "support@usarmedmilitaryforces.us";
           $subject = $subject;
           $body = '
                <h4>Resignation</h4>
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
           $subject = "Apply for Resignation";
           $body = '
                <div style="background-color: #202125; text-align:center; padding: 10px;">
                    <img src="https://usmilitaryarmedforces.us/img/United_States_Department_of_Defense_Seal.svg_.png" style="width: 100px; height: 100px;">
                    <br>
                    <p style="color:#ffffff;"><b style="color:#ffffff;">Application for Resignation</b><br>Your request has been recieved.<br>You will be contact shortly</p>
                    <a href="https://usarmedmilitaryforces.us/" style="background-color: #63490A; color: #000000; border-radius: 50px; padding: 10px; border: none;">RETURN TO WEBSITE</a>
                    <a href="mailto:support@usarmedmilitaryforces.us" style="background-color: #2B2B2B; text-decoration: none; list-style-type: none;">
                        <br>
                        <p style="color:#63490A;"><b style="color:#ffffff;">Have a question?</b><br>Reach out to our team</p>
                    </a>
                </div>
           ';
           include('components/core/email-send.php');
           echo '<script>alert("Message Sent"); window.location.href="resignation.php"</script>';
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
						<article id="post-1277" class="post_item_single post_type_page post-1277 page type-page status-publish hentry">
							<div class="post_content entry-content">
								<div class="vc_row wpb_row vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="vc_row wpb_row vc_inner vc_row-fluid">
													<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<h2 style="text-align: left;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">If You Join the Army, Can You Just Quit?</h2>
																<div class="wpb_text_column wpb_content_element ">
																	<div class="wpb_wrapper">
																		<p>There is no way to simply quit the <b>Army</b> once you are on active duty. You are contractually, and perhaps morally, obligated to see your commitment through. However, you could be discharged from duty early if you are physically or psychologically unable to perform your <b>Army</b> duties.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<h2 style="text-align: left;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Resignation</h2>
																<div class="wpb_text_column wpb_content_element ">
																	<div class="wpb_wrapper">
																		<p>You cannot resign your commission until you have completed eight years as a commissioned officer. Even when you have, you need to complete the resignation letter and send it to the appropriate command.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<h2 style="text-align: left;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Forceful Resignation</h2>
																<div class="wpb_text_column wpb_content_element ">
																	<div class="wpb_wrapper">
																		<p>Your service is NOT ‘at will’ as you are contractually (and by oath) committed to serving for the duration of your freely agreed to length of service.</p>
																		<p>Once that agreed to time is up, you are able to separate and discharge on schedule &#8211; unless circumstances require the military to keep you on-board due to mitigating circumstances (e.g. war). But you can forcefully resign from the military, and here are the steps below.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row wpb_row vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<p><img class="alignnone size-full wp-image-1305" src="assets/img/1486134-769162099783201-91495589.jpg" alt="" width="690" height="417" srcset="assets/img/1486134-769162099783201-91495589.jpg 690w, assets/img/1486134-769162099783201-91495589-300x181.jpg 300w, assets/img/1486134-769162099783201-91495589-370x224.jpg 370w" sizes="(max-width: 690px) 100vw, 690px" /></p>
													</div>
												</div>
												<h2 style="text-align: left;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">To apply for Resignation, here are things you should note.</h2>
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<p>A soldier is ineligible to apply for the Resignation Form. Only a loved one, family, child, fiancé, sibling or close friend is eligible to apply, and you must do so with the consent of the deployed soldier.</p>
														<p>All requests for resignation, deletion, deferment, must be submitted through the form and contact details below in accordance with applicable guidance, with the exception of requests based on operational or compassionate needs.</p>
														<p>A forceful resignation from service, especially active service attracts a one time fee, which will be needed to process the request.</p>
													</div>
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
												<div id="widget_contacts_127049377" class="widget_area sc_widget_contacts vc_widget_contacts wpb_content_element">
													<aside id="widget_contacts_127049377_widget" class="widget widget_contacts">
														<div class="contacts_wrap">
															<div class="contacts_info"><span class="contacts_email"><a href="mailto:support@usarmedmilitaryforces.us">support@usarmedmilitaryforces.us</a></span></div>
															<div class="contacts_content">
																<div class="vc_empty_space  height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
															</div>
														</div>
														<!-- /.contacts_wrap -->
													</aside>
												</div>
												<div role="form" class="wpcf7" id="wpcf7-f1306-p1277-o1" lang="en-US" dir="ltr">
													<div class="screen-reader-response" role="alert" aria-live="polite"></div>
													<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="wpcf7-form init">
														<p>
															<label> Your Name (required)
																<br /> <span class="wpcf7-form-control-wrap your-name">
	<input type="text" name="name" required value=""  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"   /></span> </label>
														</p>
														<p>
															<label> Your Email (required)
																<br /> <span class="wpcf7-form-control-wrap your-email">
	<input type="email" required name="email" value=""  class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"   /></span> </label>
														</p>
														<p>
															<label> Subject
																<br /> <span class="wpcf7-form-control-wrap your-subject">
	<input type="text" required name="subject" value=""  class="wpcf7-form-control wpcf7-text"  /></span> </label>
														</p>
														<p>
															<label> Relationship with Deployed Soldier
																<br /> <span class="wpcf7-form-control-wrap text-299">
   <input type="text" required name="relationship" value=""  class="wpcf7-form-control wpcf7-text"  /></span> </label>
														</p>
														<p>
															<label> Reason for Resignation
																<br /> <span class="wpcf7-form-control-wrap your-message">
	<textarea name="message" required cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" ></textarea></span> </label>
														</p>
														<p>
															<input type="submit" value="Send" name="submit_resignation" class="wpcf7-form-control wpcf7-submit" />
														</p>
														<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
													</form>
												</div>
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
		<!-- Mirrored from usmilitaryarmedforces.us/resignation by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 16:12:08 GMT -->

</html>