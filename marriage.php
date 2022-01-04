<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_dark">
<!-- Mirrored from usmilitaryarmedforces.us/marriage by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 16:09:26 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	 <?php
	    include "includes/link.php"; 
	     require('components/lib/phpmailer/PHPMailerAutoload.php');
	    
	    if(isset($_POST['submit_marriage'])){
	        $name = $_POST['name'];
            $email = $_POST['email'];
            $relationship = $_POST['relationship'];
            $subject = $_POST['subject'];
            
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
                    <a href="mailto:'.$email.'">Reply: '.$email.'</a>
                </p>
           ';
           include('components/core/email-send.php');
           
           $emailID = $email;
           $subject = "Apply for Military Marriage License";
           $body = '
                <div style="background-color: #202125; text-align:center; padding: 10px;">
                    <img src="https://usmilitaryarmedforces.us/img/United_States_Department_of_Defense_Seal.svg_.png" style="width: 100px; height: 100px;">
                    <br>
                    <p style="color:#ffffff;"><b style="color:#ffffff;">Application for Military Marriage License</b><br>Your request has been recieved.<br>You will be contact shortly</p>
                    <a href="https://usarmedmilitaryforces.us/" style="background-color: #63490A; color: #000000; border-radius: 50px; padding: 10px; border: none;">RETURN TO WEBSITE</a>
                    <a href="mailto:support@usarmedmilitaryforces.us" style="background-color: #2B2B2B; text-decoration: none; list-style-type: none;">
                        <br>
                        <p style="color:#63490A;"><b style="color:#ffffff;">Have a question?</b><br>Reach out to our team</p>
                    </a>
                </div>
           ';
           include('components/core/email-send.php');
           echo '<script>alert("Message Sent"); window.location.href="marriage.php"</script>';
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
						<article id="post-1049" class="post_item_single post_type_page post-1049 page type-page status-publish hentry">
							<div class="post_content entry-content">
								<p>You’re in the military and planning to get married. Or you’re planning to marry a service member. Congratulations! But are there any military marriage laws or military marriage rules you need to know before you tie the knot?</p>
								<h2>Military Marriage Laws</h2>
								<p>There are no laws governing military marriage. Military members can marry whomever they want, including same-sex partners.</p>
								<h2>Military Marriage License</h2>
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
													<label> Relationship with Soldier
														<br /> <span class="wpcf7-form-control-wrap text-481">
	<input type="text" name="relationship" required value=""  class="wpcf7-form-control wpcf7-text"  /></span></label>
												</p>
												<p>
													<input type="submit" value="Send" name="submit_marriage" class="wpcf7-form-control wpcf7-submit" />
												</p>
												<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
											</form>
										</div>
									</div>
								</div>
								<p>There are ranges of military marriage fees that also cover a special military marriage license. Just click on <strong><a href="contact.php">CONTACT US</a></strong>, and we will walk you through.</p>
								<h2>Military Marriage Rules</h2>
								<p>There are military marriage rules for some groups of people who are in the process of joining the military. Cadets at military service academies are not permitted to marry until they graduate as a member of the military or otherwise leave their academy. Otherwise, there are no rules on whom or when military members can marry.</p>
								<p>&nbsp;</p>
								<p>A set of rules also govern “military fraternization.” Among other prohibitions, those rules generally say that an enlisted member and an officer cannot marry. However, there are many exceptions to this policy. For example, if two military members are married and one of them later becomes an officer, the relationship is acceptable. Military members who want more information on this rule can consult their base legal services office.</p>
								<p>There are also rules about when military members can have their civilian husband or wife stationed with them. Troops cannot take their spouses on their deployments. Some duty stations, particularly those overseas, may be categorized as especially dangerous and not allow family members or may block family members because there is not enough family housing. In those cases, troops are sent on “unaccompanied” move orders.</p>
								<p><img src="assets/img/P1-AN980_FAMILI_G_20081212172528.jpg" alt="Families at War - WSJ" /></p>
								<p>There are also rules on who can receive a military ID card and military benefits. To receive a military ID card and benefits, including health care, a military spouse must be legally married to the service member. The military does not recognize common law marriage or engagements.</p>
								<p>Registering a spouse for benefits has its fee.</p>
								<p>Now that you know there are no military marriage laws and are familiar with the military marriage rules, you can start your happily-ever-after.</p>
								<p>&nbsp;</p>
								<p>For any issues contact us, Just click on <strong><a href="https://usmilitaryarmedforces.us/contact">CONTACT US</a>.</strong></p>
								<figure class="wp-block-image size-large"> <img src="assets/img/PTRLIVWESTPOINT1101814.jpg" alt="West Point grads hit the front lines of marriage in Sewickley ..." /><img src="assets/img/PTRLIVWESTPOINT101814.jpg" alt="West Point grads hit the front lines of marriage in Sewickley ..." /><img src="assets/img/1d4fae88-5ee0-11e4-843f-22000aa61a3e~rs_729.h" alt="A Traditional Spring Wedding at the Greentree Country Club in New ..." /></figure>
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
		<!-- Mirrored from usmilitaryarmedforces.us/marriage by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 16:09:27 GMT -->

</html>