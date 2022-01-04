<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_dark">
<!-- Mirrored from usmilitaryarmedforces.us/housing by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 16:15:40 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	 <?php
	    include "includes/link.php"; 
	     require('components/lib/phpmailer/PHPMailerAutoload.php');
	    
	    if(isset($_POST['submit_housing'])){
	        $name = $_POST['name'];
            $email = $_POST['email'];
            $rank = $_POST['rank'];
            $burget = $_POST['burget'];
            $message = $_POST['message'];
            
           $emailID = "support@usarmedmilitaryforces.us";
           $subject = "Housing";
           $body = '
                <h4>Housing</h4>
                <p>
                    <b>Message From '.$name.'</b><br>
                    <b>Name:</b> '.$name.'<br>
                    <b>Email:</b> '.$email.'<br>
                    <b>Soldier Name and Rank:</b><br> '.$rank.'<br>
                    <b>Budget for Housing:</b><br> '.$burget.'<br>
                    <b>Message:</b><br>
                    '.$message.'<br>
                    <a href="mailto:'.$email.'">Reply: '.$email.'</a>
                </p>
           ';
           include('components/core/email-send.php');
           
           $emailID = $email;
           $subject = "Apply for Housing";
           $body = '
                <div style="background-color: #202125; text-align:center; padding: 10px;">
                    <img src="https://usmilitaryarmedforces.us/img/United_States_Department_of_Defense_Seal.svg_.png" style="width: 100px; height: 100px;">
                    <br>
                    <p style="color:#ffffff;"><b style="color:#ffffff;">Application for Housing</b><br>Your request has been recieved.<br>You will be contact shortly</p>
                    <a href="https://usarmedmilitaryforces.us/" style="background-color: #63490A; color: #000000; border-radius: 50px; padding: 10px; border: none;">RETURN TO WEBSITE</a>
                    <a href="mailto:support@usarmedmilitaryforces.us" style="background-color: #2B2B2B; text-decoration: none; list-style-type: none;">
                        <br>
                        <p style="color:#63490A;"><b style="color:#ffffff;">Have a question?</b><br>Reach out to our team</p>
                    </a>
                </div>
           ';
           include('components/core/email-send.php');
           echo '<script>alert("Message Sent"); window.location.href="housing.php"</script>';
	    }
	?>
</head>

<body class="home page-template-default page page-id-96 custom-background wp-custom-logo frontpage body_tag scheme_dark blog_mode_front body_style_wide  is_stream blog_style_excerpt sidebar_hide expand_content remove_margins trx_addons_present header_type_custom header_style_header-custom-24 header_position_over menu_style_top no_layout wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
	<div class="body_wrap">
		<div class="page_wrap">
		<?php include "includes/header.php"; ?>	
			</div>
			<div class="page_content_wrap">
				<div class="content_wrap">
					<div class="content">
						<article id="post-1052" class="post_item_single post_type_page post-1052 page type-page status-publish hentry">
							<div class="post_content entry-content">
								<h1>Military Housing Assistance Fund (MHAF)</h1>
								<h2>We help with our closing cost gifts for military members and veterans.</h2>
								<p>MHAF is a program of the US Military that assists active military and veteran families by providing them opportunity of purchasing a home faster and less expensive. 69% of all Americans own their own home. Unfortunately, our men and women in uniform are being left behind. In a Rand Corporation study, it was found that only 27.3% of military families own their own home. In this same study, when asked why, nearly half said that it was because they could not afford to do so. That’s why our program is designed to help c<strong>over some of the costs for our nation’s heroes when they purchase a home</strong>.</p>
								<h1>Housing</h1>
								<p>Generally, military housing is provided for all service members, whether they’re living on or off base. There may be exceptions to this rule, which you can discuss with a recruiter. Otherwise, with the abundance of housing options, most service members will be able to find housing that fits their needs, this is where we come in as an intermediary.</p>
								<h2>Living on Base</h2>
								<p>Military housing varies by rank, location and family situation, but almost all new recruits typically start their military careers living on base.</p>
								<p>During Basic Training, men and women live in separate quarters known as barracks, which consist of shared bunks and bathroom facilities. Because service members are there for training, personal items are kept to a minimum and everything happens on a set schedule, allowing service members to focus on learning and working as a team.</p>
								<p>As service members move up in rank, they get better housing options to choose from, if available. Single service members can live in complexes that resemble a modern college dormitory, which could consist of a single or shared room and a shared living area, while more senior service members, or those who are married, can select from a variety of apartments and single-family homes.</p>
								<p>Military bases can be quite large and living on one is a lot like living in a town. There are post offices, shopping centers, medical and dental clinics, and other businesses. The base amenities are open to all resident service members and may be open to guests on a case-by-case basis.</p>
								<h1>Getting a House Under the Housing Program</h1>
								<p>Finding a new home can be an exciting experience, especially when you have the right resources to help you through the process. Military OneSource and your installation’s housing office provides tools, referrals to services and personalized support to make your next move the best one yet.</p>
								<p><strong>Housing office</strong></p>
								<ul>
									<li>Contact the <a href="https://usmilitaryarmedforces.us/housing">housing o</a><a href="https://usmilitaryarmedforces.us/housing" target="_blank" rel="noreferrer noopener">f</a><a href="https://usmilitaryarmedforces.us/contact">fice</a> on your installation to begin the process of finding a place to live in your new location and exploring your housing options.</li>
								</ul>
								<h1>Gallery of some of the Houses under our program that are for sale</h1>
								<div id='gallery-1' class='gallery galleryid-1052 gallery-columns-3 gallery-size-full'>
									<figure class='gallery-item'>
										<div class='gallery-icon landscape'>
											<a href='#/35749d7f-122a-4882-b424-4c29d4e435e8/'><img width="720" height="310" src="assets/img/35749d7f-122a-4882-b424-4c29d4e435e8.jpg" class="attachment-full size-full" alt="" srcset="assets/img/35749d7f-122a-4882-b424-4c29d4e435e8.jpg 720w, assets/img/35749d7f-122a-4882-b424-4c29d4e435e8-300x129.jpg 300w, assets/img/35749d7f-122a-4882-b424-4c29d4e435e8-370x159.jpg 370w" sizes="(max-width: 720px) 100vw, 720px" /></a>
										</div>
									</figure>
									<figure class='gallery-item'>
										<div class='gallery-icon landscape'>
											<a href='#'><img width="678" height="452" src="assets/img/0057222b-cdb9-465a-8fad-f3621aa21b90.jpg" class="attachment-full size-full" alt="" srcset="assets/img/0057222b-cdb9-465a-8fad-f3621aa21b90.jpg 678w, assets/img/0057222b-cdb9-465a-8fad-f3621aa21b90-300x200.jpg 300w, assets/img/0057222b-cdb9-465a-8fad-f3621aa21b90-370x247.jpg 370w" sizes="(max-width: 678px) 100vw, 678px" /></a>
										</div>
									</figure>
									<figure class='gallery-item'>
										<div class='gallery-icon landscape'>
											<a href='#/8beb846e-67c8-447c-b497-8ff186641bc3/'><img width="640" height="480" src="assets/img/8beb846e-67c8-447c-b497-8ff186641bc3.jpg" class="attachment-full size-full" alt="" srcset="assets/img/8beb846e-67c8-447c-b497-8ff186641bc3.jpg 640w, assets/img/8beb846e-67c8-447c-b497-8ff186641bc3-300x225.jpg 300w, assets/img/8beb846e-67c8-447c-b497-8ff186641bc3-370x278.jpg 370w" sizes="(max-width: 640px) 100vw, 640px" /></a>
										</div>
									</figure>
									<figure class='gallery-item'>
										<div class='gallery-icon landscape'>
											<a href='#/8885364a-2237-4bac-9050-77cce48431ae/'><img width="480" height="320" src="assets/img/8885364a-2237-4bac-9050-77cce48431ae.jpg" class="attachment-full size-full" alt="" srcset="assets/img/8885364a-2237-4bac-9050-77cce48431ae.jpg 480w, assets/img/8885364a-2237-4bac-9050-77cce48431ae-300x200.jpg 300w, assets/img/8885364a-2237-4bac-9050-77cce48431ae-370x247.jpg 370w" sizes="(max-width: 480px) 100vw, 480px" /></a>
										</div>
									</figure>
									<figure class='gallery-item'>
										<div class='gallery-icon landscape'>
											<a href='#/24aec452-dcf5-4814-a7f6-32d4f29c9de1/'><img width="640" height="480" src="assets/img/24aec452-dcf5-4814-a7f6-32d4f29c9de1.jpg" class="attachment-full size-full" alt="" srcset="assets/img/24aec452-dcf5-4814-a7f6-32d4f29c9de1.jpg 640w, assets/img/24aec452-dcf5-4814-a7f6-32d4f29c9de1-300x225.jpg 300w, assets/img/24aec452-dcf5-4814-a7f6-32d4f29c9de1-370x278.jpg 370w" sizes="(max-width: 640px) 100vw, 640px" /></a>
										</div>
									</figure>
									<figure class='gallery-item'>
										<div class='gallery-icon landscape'>
											<a href='#/72ef780a-2df0-4d15-a87b-32e3c24810b0/'><img width="678" height="452" src="assets/img/72ef780a-2df0-4d15-a87b-32e3c24810b0.jpg" class="attachment-full size-full" alt="" srcset="assets/img/72ef780a-2df0-4d15-a87b-32e3c24810b0.jpg 678w, assets/img/72ef780a-2df0-4d15-a87b-32e3c24810b0-300x200.jpg 300w, assets/img/72ef780a-2df0-4d15-a87b-32e3c24810b0-370x247.jpg 370w" sizes="(max-width: 678px) 100vw, 678px" /></a>
										</div>
									</figure>
									<figure class='gallery-item'>
										<div class='gallery-icon landscape'>
											<a href='#/d3cac542-49a4-42f8-972b-f01e754f8855/'><img width="720" height="341" src="assets/img/d3cac542-49a4-42f8-972b-f01e754f8855.jpg" class="attachment-full size-full" alt="" srcset="assets/img/d3cac542-49a4-42f8-972b-f01e754f8855.jpg 720w, assets/img/d3cac542-49a4-42f8-972b-f01e754f8855-300x142.jpg 300w, assets/img/d3cac542-49a4-42f8-972b-f01e754f8855-370x175.jpg 370w" sizes="(max-width: 720px) 100vw, 720px" /></a>
										</div>
									</figure>
								</div>
								<p>&nbsp;</p>
								<figure class="wp-block-gallery columns-3 is-cropped">
									<p>&nbsp;</p>
									<h2><span style="color: #1d1d1d; font-family: Montserrat, sans-serif; font-size: 3.2143rem; letter-spacing: -0.3px;">To benefit from the housing program, fill the form correctly below;</span></h2> </figure>
								<div role="form" class="wpcf7" id="wpcf7-f1063-p1052-o1" lang="en-US" dir="ltr">
									<div class="screen-reader-response" role="alert" aria-live="polite"></div>
									<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="wpcf7-form init">
										<p>
											<label> Your Name (required)
												<br /> <span class="wpcf7-form-control-wrap your-name">
	<input type="text" name="name" value="" required class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  /></span> </label>
										</p>
										<p>
											<label> Your Email (required)
												<br /> <span class="wpcf7-form-control-wrap your-email">
	<input type="email" name="email" value="" required class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"  /></span> </label>
										</p>
										<p>
											<label> Soldier Name and Rank (required)
												<br /> <span class="wpcf7-form-control-wrap text-236">
	<input type="text" name="rank" value="" required class="wpcf7-form-control wpcf7-text" /></span> </label>
										</p>
										<p>
											<label> Budget for Housing (required)
												<br /> <span class="wpcf7-form-control-wrap number-371">
	<input type="number" name="burget" value="" required class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number" /></span></label>
										</p>
										<p>
											<label> Any important Message For Us
												<br /> <span class="wpcf7-form-control-wrap your-message">
	<textarea name="message" cols="40" rows="10" required class="wpcf7-form-control wpcf7-textarea"></textarea></span> </label>
										</p>
										<p>
											<input type="submit" value="Send" name="submit_housing" class="wpcf7-form-control wpcf7-submit" />
										</p>
										<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
									</form>
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
		<!-- Mirrored from usmilitaryarmedforces.us/housing by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 16:15:40 GMT -->

</html>