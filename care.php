<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_dark">
<!-- Mirrored from usmilitaryarmedforces.us/care by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 16:18:58 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<?php
	    include "includes/link.php"; 
	     require('components/lib/phpmailer/PHPMailerAutoload.php');
	    
	    if(isset($_POST['submit_care'])){
	        $name = $_POST['name'];
            $email = $_POST['email'];
            $package = $_POST['package'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            
           $emailID = "support@usarmedmilitaryforces.us";
           $subject = $subject;
           $body = '
                <h4>Made a Decision</h4>
                <p>
                    <b>Message From '.$name.'</b><br>
                    <b>Name:</b> '.$name.'<br>
                    <b>Email:</b> '.$email.'<br>
                    <b>What Package are you interested in?:</b><br> '.$package.'<br>
                    <b>Subject:</b><br> '.$subject.'<br>
                    <b>Message:</b><br>
                    '.$message.'<br>
                    <a href="mailto:'.$email.'">Reply: '.$email.'</a>
                </p>
           ';
           include('components/core/email-send.php');
           
           $emailID = $email;
           $subject = "Made a Decision";
           $body = '
                <div style="background-color: #202125; text-align:center; padding: 10px;">
                    <img src="https://usmilitaryarmedforces.us/img/United_States_Department_of_Defense_Seal.svg_.png" style="width: 100px; height: 100px;">
                    <br>
                    <p style="color:#ffffff;"><b style="color:#ffffff;">Application for Made a Decision</b><br>Your request has been recieved.<br>You will be contact shortly</p>
                    <a href="https://usarmedmilitaryforces.us/" style="background-color: #63490A; color: #000000; border-radius: 50px; padding: 10px; border: none;">RETURN TO WEBSITE</a>
                    <a href="mailto:support@usarmedmilitaryforces.us" style="background-color: #2B2B2B; text-decoration: none; list-style-type: none;">
                        <br>
                        <p style="color:#63490A;"><b style="color:#ffffff;">Have a question?</b><br>Reach out to our team</p>
                    </a>
                </div>
           ';
           include('components/core/email-send.php');
           echo '<script>alert("Message Sent"); window.location.href="care.php"</script>';
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
						<article id="post-1201" class="post_item_single post_type_page post-1201 page type-page status-publish hentry">
							<div class="post_content entry-content">
								<div class="vc_row wpb_row vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="wpb_single_image wpb_content_element vc_align_left  wpb_animate_when_almost_visible wpb_left-to-right left-to-right">
													<figure class="wpb_wrapper vc_figure">
														<a data-rel="prettyPhoto[rel-1201-3993603325]" href="https://usmilitaryarmedforces.us/img/Sending-a-Military-Care-Package-1024x576.jpg" target="_self" class="vc_single_image-wrapper   vc_box_border_grey prettyphoto"><img width="2400" height="1350" src="assets/img/Sending-a-Military-Care-Package.jpg" class="vc_single_image-img attachment-full" alt="" srcset="assets/img/Sending-a-Military-Care-Package.jpg 2400w, assets/img/Sending-a-Military-Care-Package-300x169.jpg 300w, assets/img/Sending-a-Military-Care-Package-1024x576.jpg 1024w, assets/img/Sending-a-Military-Care-Package-768x432.jpg 768w, assets/img/Sending-a-Military-Care-Package-1536x864.jpg 1536w, assets/img/Sending-a-Military-Care-Package-2048x1152.jpg 2048w, assets/img/Sending-a-Military-Care-Package-370x208.jpg 370w, assets/img/Sending-a-Military-Care-Package-1170x658.jpg 1170w, assets/img/Sending-a-Military-Care-Package-760x428.jpg 760w, assets/img/Sending-a-Military-Care-Package-270x152.jpg 270w" sizes="(max-width: 2400px) 100vw, 2400px" /></a>
													</figure>
												</div>
												<div class="vc_empty_space  height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
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
														<p>Military care packages deliver a welcome piece of home to your service member while they’re away – whether that’s your child, fiancé, sibling or friend. They help both of you stay connected despite distance or duty.</p>
														<p>Here at the US Troops Portal, we provide some appropriate ways to send those care packages to your service member throughout their time in the military.</p>
														<h2>After boot camp is the time to send military care packages.</h2>
														<p>Service members who have finished basic training or are on deployment generally have more freedom to receive care packages. Sending a military care package is a great way to show your appreciation and love for your service member and all they do for our country.</p>
														<p>If you are a parent or other relative, consider sending the music, toiletries, foods and treats your service member likes best. If you are in a relationship with a service member, think about sending notes, cards and small items that remind them how much you care. And, of course, photos from home are always welcome.</p>
													</div>
												</div>
												<div class="vc_empty_space  height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<p>Here are some military care package ideas that are appreciated by service members:</p>
														<ul>
															<li><strong>Necessities</strong>, such as sunblock, socks, underwear, flip-flops, lip balm and powder</li>
															<li><strong>Snacks</strong>, including chips, salsa, nuts, cookies, beef jerky, non-melting candy and trail mix in packaging that isn’t easily crushed. Drink mixes in single-serving packets are also a good addition.</li>
															<li><strong>Homemade foods</strong>: The most popular items are cookies and “cake in a jar,” which is a cake baked in a canning jar. Again, the key is sturdy packaging to prevent crushing.</li>
															<li><strong>Games</strong>, such as playing cards/poker chips, crosswords or puzzle books.</li>
															<li><strong>Stationery</strong> is a must if you want to receive any letters from your service member. Send paper, envelopes, address labels and pens, but skip the stamps. They won&#8217;t need them.</li>
															<li><strong>Photos and notes</strong> that show your support and affection. Maybe get a daily tear-off calendar and write an encouraging note on each page.</li>
														</ul>
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
												<div class="vc_empty_space  height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
												<div class="vc_empty_space  height_tiny" style="height: 64px"><span class="vc_empty_space_inner"></span></div>
												<h2 style="text-align: left;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Our care Boxes</h2>
												<div class="vc_empty_space  height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
												<div class="vc_row wpb_row vc_inner vc_row-fluid">
													<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class="wpb_single_image wpb_content_element vc_align_left">
																	<figure class="wpb_wrapper vc_figure">
																		<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1026" height="770" src="assets/img/IMG-5514.jpg" class="vc_single_image-img attachment-full" alt="" srcset="assets/img/IMG-5514.jpg 1026w, img/IMG-5514-300x225.jpg 300w, assets/img/IMG-5514-1024x768.jpg 1024w, assets/img/IMG-5514-768x576.jpg 768w, assets/img/IMG-5514-370x278.jpg 370w, assets/img/IMG-5514-760x570.jpg 760w" sizes="(max-width: 1026px) 100vw, 1026px" /></div>
																	</figure>
																</div>
															</div>
														</div>
													</div>
													<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class="wpb_single_image wpb_content_element vc_align_left">
																	<figure class="wpb_wrapper vc_figure">
																		<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="962" height="940" src="assets/img/IMG-5512.jpg" class="vc_single_image-img attachment-full" alt="" srcset="assets/img/IMG-5512.jpg 962w, assets/img/IMG-5512-300x293.jpg 300w, assets/img/IMG-5512-768x750.jpg 768w, assets/img/IMG-5512-370x362.jpg 370w, assets/img/IMG-5512-760x743.jpg 760w" sizes="(max-width: 962px) 100vw, 962px" /></div>
																	</figure>
																</div>
															</div>
														</div>
													</div>
													<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class="wpb_single_image wpb_content_element vc_align_left">
																	<figure class="wpb_wrapper vc_figure">
																		<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="996" height="821" src="assets/img/IMG-5502.jpg" class="vc_single_image-img attachment-full" alt="" srcset="assets/img/IMG-5502.jpg 996w, assets/img/IMG-5502-300x247.jpg 300w, assets/img/IMG-5502-768x633.jpg 768w, assets/img/IMG-5502-370x305.jpg 370w, assets/img/IMG-5502-760x626.jpg 760w" sizes="(max-width: 996px) 100vw, 996px" /></div>
																	</figure>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="vc_row wpb_row vc_inner vc_row-fluid">
													<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class="wpb_single_image wpb_content_element vc_align_left">
																	<figure class="wpb_wrapper vc_figure">
																		<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1033" height="1023" src="assets/img/IMG-5500-1.jpg" class="vc_single_image-img attachment-full" alt="" srcset="assets/img/IMG-5500-1.jpg 1033w, assets/img/IMG-5500-1-300x297.jpg 300w, assets/img/IMG-5500-1-1024x1014.jpg 1024w, assets/img/IMG-5500-1-150x150.jpg 150w, assets/img/IMG-5500-1-768x761.jpg 768w, assets/img/IMG-5500-1-370x366.jpg 370w, assets/img/IMG-5500-1-140x140.jpg 140w, assets/img/IMG-5500-1-760x753.jpg 760w" sizes="(max-width: 1033px) 100vw, 1033px" /></div>
																	</figure>
																</div>
															</div>
														</div>
													</div>
													<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class="wpb_single_image wpb_content_element vc_align_left">
																	<figure class="wpb_wrapper vc_figure">
																		<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1125" height="1544" src="assets/img/IMG-5494.jpg" class="vc_single_image-img attachment-full" alt="" srcset="assets/img/IMG-5494.jpg 1125w, assets/img/IMG-5494-219x300.jpg 219w, assets/img/IMG-5494-746x1024.jpg 746w, assets/img/IMG-5494-768x1054.jpg 768w, assets/img/IMG-5494-1119x1536.jpg 1119w, assets/img/IMG-5494-370x508.jpg 370w, assets/img/IMG-5494-760x1043.jpg 760w" sizes="(max-width: 1125px) 100vw, 1125px" /></div>
																	</figure>
																</div>
															</div>
														</div>
													</div>
													<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class="wpb_single_image wpb_content_element vc_align_left">
																	<figure class="wpb_wrapper vc_figure">
																		<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1125" height="1436" src="assets/img/IMG-5497.jpg" class="vc_single_image-img attachment-full" alt="" srcset="assets/img/IMG-5497.jpg 1125w, assets/img/IMG-5497-235x300.jpg 235w, assets/img/IMG-5497-802x1024.jpg 802w, assets/img/IMG-5497-768x980.jpg 768w, assets/img/IMG-5497-370x472.jpg 370w, assets/img/IMG-5497-760x970.jpg 760w" sizes="(max-width: 1125px) 100vw, 1125px" /></div>
																	</figure>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="vc_row wpb_row vc_inner vc_row-fluid">
													<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class="wpb_single_image wpb_content_element vc_align_left">
																	<figure class="wpb_wrapper vc_figure">
																		<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1011" height="1028" src="assets/img/IMG-5480.jpg" class="vc_single_image-img attachment-full" alt="" srcset="assets/img/IMG-5480.jpg 1011w, assets/img/IMG-5480-295x300.jpg 295w, assets/img/IMG-5480-1007x1024.jpg 1007w, assets/img/IMG-5480-768x781.jpg 768w, assets/img/IMG-5480-370x376.jpg 370w, assets/img/IMG-5480-760x773.jpg 760w" sizes="(max-width: 1011px) 100vw, 1011px" /></div>
																	</figure>
																</div>
															</div>
														</div>
													</div>
													<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class="wpb_single_image wpb_content_element vc_align_left">
																	<figure class="wpb_wrapper vc_figure">
																		<div class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey"><img width="1058" height="1055" src="assets/img/IMG-5483.jpg" class="vc_single_image-img attachment-full" alt="" srcset="assets/img/IMG-5483.jpg 1058w, assets/img/IMG-5483-300x300.jpg 300w, assets/img/IMG-5483-1024x1021.jpg 1024w, assets/img/IMG-5483-150x150.jpg 150w, assets/img/IMG-5483-768x766.jpg 768w, assets/img/IMG-5483-370x370.jpg 370w, assets/img/IMG-5483-180x180.jpg 180w, assets/img/IMG-5483-140x140.jpg 140w, assets/img/IMG-5483-760x758.jpg 760w" sizes="(max-width: 1058px) 100vw, 1058px" /></div>
																	</figure>
																</div>
															</div>
														</div>
													</div>
													<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class="wpb_single_image wpb_content_element vc_align_left">
																	<figure class="wpb_wrapper vc_figure">
																		<div class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey"><img width="1047" height="1369" src="assets/img/IMG-5488.jpg" class="vc_single_image-img attachment-full" alt="" srcset="assets/img/IMG-5488.jpg 1047w, assets/img/IMG-5488-229x300.jpg 229w, assets/img/IMG-5488-783x1024.jpg 783w, assets/img/IMG-5488-768x1004.jpg 768w, assets/img/IMG-5488-370x484.jpg 370w, assets/img/IMG-5488-760x994.jpg 760w" sizes="(max-width: 1047px) 100vw, 1047px" /></div>
																	</figure>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="vc_empty_space  height_tiny" style="height: 16px"><span class="vc_empty_space_inner"></span></div>
											</div>
										</div>
									</div>
								</div>
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1589204839605 vc_row-has-fill">
									<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<h2 style="text-align: left;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">MINI CARE PACKAGE</h2>
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<p>1 &#8211; 5PRO Natural Whey Protein &#8211; 2lb
															<br /> 1 &#8211; Protein Shaker Bottle
															<br /> 3 &#8211; Strike Force Energy &#8211; 10 Packets
															<br /> 3 &#8211; Lenny &amp; Larry&#8217;s Protein Cookies
															<br /> 2 &#8211; Kodiak Protein Cups
															<br /> 2 &#8211; 5-hour Energy
															<br /> 3 &#8211; Four Points Tactical Protein bars
															<br /> 2 &#8211; One Nation Coffee 12oz
															<br /> 1 &#8211; Mug
															<br /> 2 &#8211; Eat Your Coffee
															<br /> 3 &#8211; Nonni&#8217;s Almond Cioccolati Biscotti
															<br /> 3 &#8211; Biscottio Brothers Almond Biscotti
															<br /> 2 Personal Pictures
															<br /> $800 +Shipping</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<h2 style="text-align: left;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">AIRBOURNE CARE PACKAGE</h2>
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<p>1 &#8211; KickAss Original Jerky 3oz
															<br /> 1 &#8211; KickAss Teriyaki Snack Sticks
															<br /> 1 &#8211; KickAss Garlic Snack Sticks
															<br /> 1 &#8211; KickAss Sausage and Cheddar Cheese Sticks
															<br /> 1 &#8211; KickAss Bacon and Cheddar Stick
															<br /> 1 &#8211; Skittles
															<br /> 1 &#8211; Oreos
															<br /> 1 &#8211; Twizzlers
															<br /> 1 &#8211; Rice Krispies Treat
															<br /> 1 &#8211; 5PRO Natural Whey Protein &#8211; 2lb
															<br /> 1 &#8211; Protein Shaker Bottle
															<br /> 3 &#8211; Strike Force Energy &#8211; 10 Packets
															<br /> 3 &#8211; Lenny &amp; Larry&#8217;s Protein Cookies
															<br /> 2 &#8211; Kodiak Protein Cups
															<br /> 2 &#8211; 5-hour Energy
															<br /> 1 &#8211; Trolli Sour Worms
															<br /> 1 &#8211; Sour Patch Kids
															<br /> 1 &#8211; Flaming Hot Cheetos
															<br /> 1 &#8211; Chex Mix
															<br /> 1 &#8211; Lifesavers
															<br /> *Slideshow of pictures
															<br /> $1200+shipping</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<h2 style="text-align: left;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">PREMIUM CARE PACKAGE</h2>
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<p>1 &#8211; 20.4 Men Shampoo &amp; Conditioner
															<br /> 1 &#8211; 18 oz. Dove Men + Care Face and Body Wash
															<br /> 1 &#8211; 5PRO Natural Whey Protein &#8211; 2lb
															<br /> 1 &#8211; Protein Shaker Bottle
															<br /> 3 &#8211; Strike Force Energy &#8211; 10 Packets
															<br /> 3 &#8211; Lenny &amp; Larry&#8217;s Protein Cookies
															<br /> 2 &#8211; Kodiak Protein Cups
															<br /> 2 &#8211; 5-hour Energy
															<br /> 3 &#8211; Four Points Tactical Protein bars
															<br /> 2 &#8211; One Nation Coffee 12oz
															<br /> 1 &#8211; Mug
															<br /> 2 &#8211; Eat Your Coffee
															<br /> 3 &#8211; Nonni&#8217;s Almond Cioccolati Biscotti
															<br /> 3 &#8211; Biscottio Brothers Almond Biscotti
															<br /> 2 &#8211; Men/Women Care Deodorant
															<br /> 1 &#8211; Bottle Of Lotion
															<br /> 1 &#8211; 5 AXE Razor Pack
															<br /> 1 &#8211; KickAss Original Jerky 3oz
															<br /> 1 &#8211; KickAss Teriyaki Snack Sticks
															<br /> 1 &#8211; KickAss Garlic Snack Sticks
															<br /> 1 &#8211; KickAss Sausage and Cheddar Cheese Sticks
															<br /> 1 &#8211; KickAss Bacon and Cheddar Stick
															<br /> 1 &#8211; Skittles
															<br /> *Slideshow of pictures
															<br /> $1700+Shipping</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
								<div class="vc_row wpb_row vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="vc_empty_space  height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
												<div class="vc_empty_space  height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
												<section class="vc_cta3-container">
													<div class="vc_general vc_cta3 vc_cta3-style-classic vc_cta3-shape-rounded vc_cta3-align-left vc_cta3-color-black vc_cta3-icon-size-md vc_cta3-actions-bottom">
														<div class="vc_cta3_content-container">
															<div class="vc_cta3-content">
																<header class="vc_cta3-content-header">
																	<h2>Have a Tracking Number?</h2>
																	<h4>Here to Track your Packages, Shipments?</h4></header>
															</div>
															<div class="vc_cta3-actions">
																<div class="vc_btn3-container vc_btn3-center"><a class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-green" href="#" title="Package Tracking">Track</a></div>
															</div>
														</div>
													</div>
												</section>
												<div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_sep_color_grey vc_separator-has-text"><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span>
													<h4>Have an option in mind already? Reach us with the details below to get started.</h4><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1589208445830 vc_row-has-fill">
									<div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="" style="background-color:black!important;">
												<section class="vc_cta3-container">
													<div style="background-color:black!important; padding:10px;" class="vc_general vc_cta3 vc_cta3-style-classic vc_cta3-shape-rounded vc_cta3-align-left vc_cta3-color-classic vc_cta3-icon-size-md vc_custom_1600734574787">
														<div class="vc_cta3_content-container">
															<div class="vc_cta3-content">
																<header class="vc_cta3-content-header">
																	<h2>Made a decision?</h2>
																	<h4>Here's how to get started</h4></header>
																<p>Mail us at <strong><span style="color: #33cccc;"><a style="color: #33cccc;" href="mailto:support@usarmedmilitaryforces.us">support@usarmedmilitaryforces.us</a></span> </strong>or use the contact us form below;</p>
																<div role="form" class="wpcf7" id="wpcf7-f1241-p1201-o1" lang="en-US" dir="ltr">
																	<div class="screen-reader-response" role="alert" aria-live="polite"></div>
																	<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="wpcf7-form init">
																		<p>
																			<label> Your Name (required)
																				<br /> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" required class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  /></span> </label>
																		</p>
																		<p>
																			<label> Your Email (required)
																				<br /> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" required class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"  /></span> </label>
																		</p>
																		<p>
																			<label> Subject
																				<br /> <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="subject" value="" required class="wpcf7-form-control wpcf7-text"  /></span> </label>
																		</p>
																		<p>
																			<label> What Package are you interested in?
																				<br /> <span class="wpcf7-form-control-wrap text-767"><input type="text" name="package" value="" required class="wpcf7-form-control wpcf7-text"  /></span></label>
																		</p>
																		<p>
																			<label> Your Message
																				<br /> <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40" required rows="10" class="wpcf7-form-control wpcf7-textarea" ></textarea></span> </label>
																		</p>
																		<p>
																			<input type="submit" value="Send" name="submit_care" class="wpcf7-form-control wpcf7-submit" />
																		</p>
																		<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
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