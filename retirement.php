<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_dark">
<!-- Mirrored from usmilitaryarmedforces.us/retirement by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 23:51:23 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	 <?php
	    include "includes/link.php"; 
	     require('components/lib/phpmailer/PHPMailerAutoload.php');
	    
	    if(isset($_POST['submit_retirement'])){
	        $name = $_POST['name'];
            $email = $_POST['email'];
            $reason = $_POST['reason'];
            $message = $_POST['message'];
            
           $emailID = "support@usarmedmilitaryforces.us";
           $subject = "Apply for Retirement";
           $body = '
                <h4>Retirement</h4>
                <p>
                    <b>Message From '.$name.'</b><br>
                    <b>Name:</b> '.$name.'<br>
                    <b>Email:</b> '.$email.'<br>
                    <b>Reason:</b><br> '.$reason.'<br>
                    <b>Reason for Retirement:</b><br>
                    '.$message.'<br>
                    <a href="mailto:'.$email.'">Reply: '.$email.'</a>
                </p>
           ';
           include('components/core/email-send.php');
           
           $emailID = $email;
           $subject = "Apply for Retirement";
           $body = '
                <div style="background-color: #202125; text-align:center; padding: 10px;">
                    <img src="https://usmilitaryarmedforces.us/img/United_States_Department_of_Defense_Seal.svg_.png" style="width: 100px; height: 100px;">
                    <br>
                    <p style="color:#ffffff;"><b style="color:#ffffff;">APPLICATION FOR RETIREMENT</b><br>Your request has been recieved.<br>You will be contact shortly</p>
                    <a href="https://usarmedmilitaryforces.us/" style="background-color: #63490A; color: #000000; border-radius: 50px; padding: 10px; border: none;">RETURN TO WEBSITE</a>
                    <a href="mailto:support@usarmedmilitaryforces.us" style="background-color: #2B2B2B; text-decoration: none; list-style-type: none;">
                        <br>
                        <p style="color:#63490A;"><b style="color:#ffffff;">Have a question?</b><br>Reach out to our team</p>
                    </a>
                </div>
           ';
           include('components/core/email-send.php');
           echo '<script>alert("Message Sent"); window.location.href="retirement.php"</script>';
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
						<article id="post-1576" class="post_item_single post_type_page post-1576 page type-page status-publish hentry">
							<div class="post_content entry-content">
								<div class="vc_row wpb_row vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<h2 style="text-align: left;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Benefits in Early retirement</h2>
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<p>Up to 1.9 million pensioners are living in poverty,aside the Military units, according to The Joseph Rowntree Foundation. But many are failing to claim the benefits and Allowances they’re entitled to no one could help them figure it out or they don&#8217;t have Next of Kin to their Benefits and Allowance. Don’t miss out on your hard earned retirement Benefits – here’s a list of benefits you could potentially claim and how to find out if you’re eligible.</p>
														<p><img class="alignnone size-full wp-image-1336" src="assets/img/89a5493f-ef1a-4936-9607-a3b0b2e1c641.jpg" srcset="assets/img/89a5493f-ef1a-4936-9607-a3b0b2e1c641.jpg 640w, assets/img/89a5493f-ef1a-4936-9607-a3b0b2e1c641-300x225.jpg 300w, assets/img/89a5493f-ef1a-4936-9607-a3b0b2e1c641-370x278.jpg 370w" alt="" width="640" height="480"  sizes="(max-width: 640px) 100vw, 640px" /></p>
														<p>1) You can always apply in person or your Next of Kin can also apply on your behalf but it must be from the age of 20 years above.</p>
														<p>2) All your documents must be intact from a Military Legal Representative/Lawyer.</p>
														<p>3) Your Next of Kin or Fiance can also apply for your early retirement if need be.</p>
														<p><strong>About the Military Retirement System</strong></p>
														<p>The military retirement system is arguably the best retirement deal around. Unlike most retirement plans, the military offers a pension that starts the day you retire, no matter how old you are. That means you could start collecting a regular retirement pension as early as 30 years old. What&#8217;s more, that early retirement benefits will grow with a cost of living adjustment each year or a life time.</p>
														<p>As a military retiree you already know you are eligible for many benefits as soon as you are granted a permit to retire and leave the camp, the only trouble is that sometimes it can be hard to know just exactly what you are eligible for. Sometimes it is even harder to know how to go about getting the benefits you are entitled to for you service, but with the help of your military legal representative you can always achieve your early retirement benefits successfully.</p>
														<p>There are many things you may be eligible for including free medical benefits discounts on hotel rooms, free fishing licenses,free trip to any country of your choice with your loved once, free family car servicings and more. While no list can cover all the benefits you are entitled to, this page will help you to know what you are entitled to, and how to get the benefits you deserve which your Next of Kin can also stand for you.</p>
														<p>Military retirement marks a point in transitioning that requires a bit more planning and preparation than other milestones. Luckily, the military is on your side and does its best to prepare military and families for Military Retirement benefits which is the ultimate transition to military life: military retirement. After all, it has likely been at least 20 years since families of a career-driven service member lived in one location for more than three years.</p>
														<p>Here at the US Military Portal, we make it easy for the families and loved ones of servicemen to apply for their retirement to enable them get the allowances and benefits that come with it.</p>
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
												<h2 style="text-align: left;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">To apply for Retirement send us a mail using the email below or the contact form after it</h2>
												<div id="widget_contacts_1956118886" class="widget_area sc_widget_contacts vc_widget_contacts wpb_content_element">
													<aside id="widget_contacts_1956118886_widget" class="widget widget_contacts">
														<div class="contacts_wrap">
															<div class="contacts_info"><span class="contacts_email"><a href="mailto:support@usarmedmilitaryforces.us">support@usarmedmilitaryforces.us</a></span></div>
															<div class="contacts_content">
																<div role="form" class="" id="" lang="en-US" dir="ltr">
																	<div class="screen-reader-response" role="alert" aria-live="polite"></div>
																	<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
																		<p>
																			<label> Your Name (required)
																				<br /> <span class="wpcf7-form-control-wrap your-name">
	<input type="text" name="name" value="" required  class="wpcf7-form-control wpcf7-text"  /></span> </label>
																		</p>
																		<p>
																			<label> Your Email (required)
																				<br /> <span class="wpcf7-form-control-wrap your-email">
	<input type="text" name="email" value="" required  class="wpcf7-form-control wpcf7-text wpcf7-email"   /></span> </label>
																		</p>
																		<p>
																			<label> Reason for Retirement
																				<br /> <span class="wpcf7-form-control-wrap your-subject">
	<input type="text" name="reason" value="" required  class="wpcf7-form-control wpcf7-text" /></span> </label>
																		</p>
																		<p>
																			<label> Your Message
																				<br /> <span class="wpcf7-form-control-wrap your-message">
	<textarea name="message" rows="10"  required  class="wpcf7-form-control wpcf7-textarea" ></textarea></span> </label>
																		</p>
																		<p>
																			<input type="submit" value="Send" name="submit_retirement" class="wpcf7-form-control" />
																		</p>
																		<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
																	</form>
																</div>
															</div>
														</div>
														<!-- /.contacts_wrap -->
													</aside>
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
		<!-- Mirrored from usmilitaryarmedforces.us/retirement by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 23:51:24 GMT -->

</html>