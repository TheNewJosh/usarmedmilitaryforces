<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_dark">
<!-- Mirrored from usmilitaryarmedforces.us/contact by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 16:20:24 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<?php
	    include "includes/link.php"; 
	     require('components/lib/phpmailer/PHPMailerAutoload.php');
	    
	    if(isset($_POST['submit_email'])){
	        $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            
           $emailID = "support@usarmedmilitaryforces.us";
           $subject = "Get in Touch";
           $body = '
                <h4>Contact</h4>
                <p>
                    <b>Message From '.$name.'</b><br>
                    '.$message.'<br>
                    <a href="mailto:'.$email.'">Reply: '.$email.'</a>
                </p>
           ';
           include('components/core/email-send.php');
           
           $emailID = $email;
           $subject = "Get in Touch";
           $body = '
                <div style="background-color: #202125; text-align:center; padding: 10px;">
                    <img src="https://usmilitaryarmedforces.us/img/United_States_Department_of_Defense_Seal.svg_.png" style="width: 100px; height: 100px;">
                    <br>
                    <p style="color:#ffffff;"><b style="color:#ffffff;">Get in Touch Request</b><br>Your request has been recieved.<br>You will be contact shortly</p>
                    <a href="https://usarmedmilitaryforces.us/" style="background-color: #63490A; color: #000000; border-radius: 50px; padding: 10px; border: none;">RETURN TO WEBSITE</a>
                    <a href="mailto:support@usarmedmilitaryforces.us" style="background-color: #2B2B2B; text-decoration: none; list-style-type: none;">
                        <br>
                        <p style="color:#63490A;"><b style="color:#ffffff;">Have a question?</b><br>Reach out to our team</p>
                    </a>
                </div>
           ';
           include('components/core/email-send.php');
           echo '<script>alert("Message Sent"); window.location.href="contact.php"</script>';
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
						<article id="post-112" class="post_item_single post_type_page post-112 page type-page status-publish hentry">
							<div class="post_content entry-content">
								<div class="vc_row wpb_row vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div id="sc_icons_1666980007" class="sc_icons sc_icons_default sc_icons_size_small sc_align_center contacts">
													<div class="sc_icons_columns_wrap sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
														<div class="trx_addons_column-1_4">
															<div class="sc_icons_item">
																<div class="icon_block"><span class="icon-untitled-1"></span>
																	<div id="sc_icons_1666980007_icon-004-arrows" class="sc_icons_icon sc_icon_type_ icon-004-arrows"><span class="sc_icon_type_ icon-004-arrows"></span></div><span class="icon-untitled-2"></span></div>
																<h4 class="sc_icons_item_title"><span>Address</span></h4>
																<div class="sc_icons_item_description"><span>United States Armed Forces Headquarters - Arlington County, Virginia, United States</span></div>
															</div>
														</div>
														<div class="trx_addons_column-1_4">
															<div class="sc_icons_item sc_icons_item_linked">
																<div class="icon_block"><span class="icon-untitled-1"></span>
																	<div id="sc_icons_1666980007_icon-003-portable-radio" class="sc_icons_icon sc_icon_type_ icon-003-portable-radio"><span class="sc_icon_type_ icon-003-portable-radio"></span></div><span class="icon-untitled-2"></span></div>
																<h4 class="sc_icons_item_title"><span>Phone</span></h4>
																<div class="sc_icons_item_description"><span>+1 (334)MILITARY</span></div>
																<a href="tel:+1%20(347)%20379-9299" class="sc_icons_item_link"></a>
															</div>
														</div>
														<div class="trx_addons_column-1_4">
															<div class="sc_icons_item sc_icons_item_linked">
																<div class="icon_block"><span class="icon-untitled-1"></span>
																	<div id="sc_icons_1666980007_icon-002-internet" class="sc_icons_icon sc_icon_type_ icon-002-internet"><span class="sc_icon_type_ icon-002-internet"></span></div><span class="icon-untitled-2"></span></div>
																<h4 class="sc_icons_item_title"><span>Email</span></h4>
																<div class="sc_icons_item_description"><span>support@usarmedmilitaryforces.us</span></div>
																<a href="mailto:support@usarmedmilitaryforces.us" class="sc_icons_item_link"></a>
															</div>
														</div>
														<div class="trx_addons_column-1_4">
															<div class="sc_icons_item">
																<div class="icon_block"><span class="icon-untitled-1"></span>
																	<div id="sc_icons_1666980007_icon-001-circular-clock-1" class="sc_icons_icon sc_icon_type_ icon-001-circular-clock-1"><span class="sc_icon_type_ icon-001-circular-clock-1"></span></div><span class="icon-untitled-2"></span></div>
																<h4 class="sc_icons_item_title"><span>Operating Hours</span></h4>
																<div class="sc_icons_item_description"><span>Mon - Fri : 09:00 - 5:00pm</span><span>Sat-Sun: 12:00 - 8:00pm</span></div>
															</div>
														</div>
													</div>
												</div>
												<!-- /.sc_icons -->
												<div class="vc_empty_space  vc_custom_1517905401548 height_large" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row wpb_row vc_row-fluid vc_custom_1517908464175 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex scheme_dark">
									<div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner vc_custom_1517905832483">
											<div class="wpb_wrapper">
												<div id="sc_googlemap_91560130_wrap" class="sc_googlemap_wrap">
													<div id="sc_googlemap_91560130" class="sc_googlemap sc_googlemap_default" style="width:100%;height:702px;" data-zoom="10" data-style="dark" data-cluster-icon="">
														<iframe src="https://maps.google.com/maps?t=m&amp;output=embed&amp;iwloc=near&amp;z=10&amp;q=Arlington+County%2C+Virginia" scrolling="no" marginheight="0" marginwidth="0" frameborder="0" aria-label=""></iframe>
													</div>
												</div>
												<!-- /.sc_googlemap_wrap -->
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left" style="background-color:#e5a40f;margin-top:20px; margin-bottom:20px;">
										<div class="vc_column-inner vc_custom_1517906140582">
											<div class="wpb_wrapper">
												<div class="vc_empty_space  vc_custom_1517909666811 height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
												<div id="sc_title_216215583" class="sc_title color_style_default sc_title_default">
													<h2 class="sc_item_title sc_title_title sc_align_left sc_item_title_style_default">Get in Touch</h2></div>
												<!-- /.sc_title -->
												<div class="vc_empty_space  vc_custom_1517909666811 height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
												<div role="form" class="wpcf7" id="wpcf7-f1012-p112-o1" lang="en-US" dir="ltr">
													<div class="screen-reader-response" role="alert" aria-live="polite"></div>
													<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="wpcf7-form init">
														<div class="columns_wrap">
															<div class="column-1_1"><span class="wpcf7-form-control-wrap your-name">
<input type="text" name="name" value="" required class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  placeholder="Name" /></span></div>
														</div>
														<div class="columns_wrap">
															<div class="column-1_1"><span class="wpcf7-form-control-wrap your-email">
<input type="email" name="email" value="" required class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" placeholder="E-mail" /></span></div>
														</div>
														<div class="columns_wrap">
															<div class="column-1_1"><span class="wpcf7-form-control-wrap textarea-message">
<textarea name="message" cols="40" rows="4" required class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"  placeholder="Comment"></textarea></span></div>
														</div>
														<div class="columns_wrap">
															<div class="column-1_1"> <span class="wpcf7-form-control-wrap acceptance-86"><span class="wpcf7-form-control wpcf7-acceptance"><span class="wpcf7-list-item"><label>
 </label></span></span>
																</span>
																<br /> <span><input type="submit" value="Submit" name="submit_email" class="wpcf7-form-control wpcf7-submit" /></span></div>
															<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
													</form>
													</div>
													<div class="vc_empty_space  vc_custom_1517905720137 height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
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
</html>