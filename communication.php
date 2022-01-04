<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_dark">
<!-- Mirrored from usmilitaryarmedforces.us/communication by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 17:07:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<?php
	    include "includes/link.php"; 
	     require('components/lib/phpmailer/PHPMailerAutoload.php');
	    
	    if(isset($_POST['submit_communication'])){
	        $name = $_POST['name'];
            $email = $_POST['email'];
            $duration = $_POST['duration'];
            $subject = $_POST['subject'];
            
           $emailID = "support@usarmedmilitaryforces.us";
           $subject = $subject;
           $body = '
                <h4>Communication</h4>
                <p>
                    <b>Message From '.$name.'</b><br>
                    <b>Name:</b> '.$name.'<br>
                    <b>Email:</b> '.$email.'<br>
                    <b>Communication Duration:</b><br> '.$duration.'<br>
                    <b>Subject:</b><br> '.$subject.'<br>
                    <a href="mailto:'.$email.'">Reply: '.$email.'</a>
                </p>
           ';
           include('components/core/email-send.php');
           
           $emailID = $email;
           $subject = "Apply for Communication";
           $body = '
                <div style="background-color: #202125; text-align:center; padding: 10px;">
                    <img src="https://usmilitaryarmedforces.us/img/United_States_Department_of_Defense_Seal.svg_.png" style="width: 100px; height: 100px;">
                    <br>
                    <p style="color:#ffffff;"><b style="color:#ffffff;">Application for Communication</b><br>Your request has been recieved.<br>You will be contact shortly</p>
                    <a href="https://usarmedmilitaryforces.us/" style="background-color: #63490A; color: #000000; border-radius: 50px; padding: 10px; border: none;">RETURN TO WEBSITE</a>
                    <a href="mailto:support@usarmedmilitaryforces.us" style="background-color: #2B2B2B; text-decoration: none; list-style-type: none;">
                        <br>
                        <p style="color:#63490A;"><b style="color:#ffffff;">Have a question?</b><br>Reach out to our team</p>
                    </a>
                </div>
           ';
           include('components/core/email-send.php');
           echo '<script>alert("Message Sent"); window.location.href="communication.php"</script>';
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
						<article id="post-1039" class="post_item_single post_type_page post-1039 page type-page status-publish hentry">
							<div class="post_content entry-content">
								<p>U.S. Military call card/communication permit is owned and operated by United States Army Welfare Unit For more than 45 years. U.S. Military call card has been delivering unparalleled quality and reliability within the prepaid telecommunications industry. We sell the most reliable and dependable cards,providing 100% Guarantee on all cards.</p>
								<p><img class="size-full wp-image-1390 alignnone" src="assets/img/c1fe706c-9118-435f-aa6b-2b4618edaa1d.jpg" alt="" width="678" height="452"  /></p>
								<p>Experience clear calls and excellent quality on our secure network infrastructure. Our top priority is network performance and call quality. With communications located all around the world, we are able to provide quality long distance service at a fraction of the cost. We take the issue of security seriously.</p>
								<p><img class="alignnone size-full wp-image-1389" src="assets/img/d1b67974-9e13-4360-a77d-17871f9db05c.jpg" alt="" width="600" height="400"  /></p>
								<p>We use the industry-standard Secure Sockets Layer (SSL) technology to prevent information from being intercepted through our network. These calling cards work at military bases all over the world, and allow soldiers to call home without building up expensive international phone bills. The PIN number and dialing instructions for your card are sent instantly via e-mail</p>
								<p>CHOOSE THE COMMUNICATION DURATION &amp; APPLY</p>
								<p>Military Small Card &#8211; $680</p>
								<p>Military Medium Card &#8211; $780</p>
								<p>Military Large Card &#8211; $890</p>
								<p>Military Large Global Card &#8211; $1150</p>
								<p>UNLIMITED = (Send us a message)</p>
								<p><img class="alignnone size-full wp-image-1388" src="assets/img/e58d1de0-b84a-48fa-ac1c-4d119e4fe2b8.jpg" alt="" width="678" height="452" /></p>
								<div role="form" class="wpcf7" id="wpcf7-f1040-p1039-o1" lang="en-US" dir="ltr">
									<div class="screen-reader-response" role="alert" aria-live="polite"></div>
									<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="wpcf7-form init" novalidate>
										<p>
											<label> Your Name (required)
												<br /> <span class="wpcf7-form-control-wrap your-name">
	<input type="text" name="name" value="" required class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> </label>
										</p>
										<p>
											<label> Your Email (required)
												<br /> <span class="wpcf7-form-control-wrap your-email">
	<input type="email" name="email" value="" required class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required /></span> </label>
										</p>
										<p>
											<label> Subject
												<br /> <span class="wpcf7-form-control-wrap your-subject">
	<input type="text" name="subject" value="" required class="wpcf7-form-control wpcf7-text" required /></span> </label>
										</p>
										<p>
											<label> Communication Duration (required)
												<br /> <span class="wpcf7-form-control-wrap text-931">
	<input type="text" name="duration" value="" required class="wpcf7-form-control wpcf7-text" required /></span> </label>
										</p>
										<p>
											<input type="submit" value="Send" name="submit_communication" class="wpcf7-form-control wpcf7-submit" />
										</p>
										<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
									</form>
								</div>
								<figure class="wp-block-image size-large"><img class="wp-image-1043" src="https://usamilitarytroops.com/wp-content/uploads/2020/04/card-300x220-1.png" alt="" /> </figure>
							</div>
							<!-- .entry-content -->
						</article>
					</div>
					<!-- </.content> -->
				</div>
				<!-- </.content_wrap> -->
			</div>
			<?php include "includes/footer.php"; ?>

</html>