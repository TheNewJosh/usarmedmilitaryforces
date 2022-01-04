<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_dark">
<!-- Mirrored from usmilitaryarmedforces.us/leave by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 16:03:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<?php
	    include "includes/link.php"; 
	     require('components/lib/phpmailer/PHPMailerAutoload.php');
	    
	    if(isset($_POST['submit_leave'])){
	        $name = $_POST['name'];
            $email = $_POST['email'];
            $names = $_POST['names'];
            $duration = $_POST['duration'];
            $message = $_POST['message'];
            
           $emailID = "support@usarmedmilitaryforces.us";
           $subject = "Book Your Flight";
           $body = '
                <h4>Leave</h4>
                <p>
                    <b>Message From '.$name.'</b><br>
                    <b>Name:</b> '.$name.'<br>
                    <b>Email:</b> '.$email.'<br>
                    <b>Name of Soldier:</b> '.$names.'<br>
                    <b>Leave Duration:</b> '.$duration.'<br>
                    <b>Reason for Leave:</b><br>
                    '.$message.'<br>
                    <a href="mailto:'.$email.'">Reply: '.$email.'</a>
                </p>
           ';
           include('components/core/email-send.php');
           
           $emailID = $email;
           $subject = "Book Your Flight";
           $body = '
                <div style="background-color: #202125; text-align:center; padding: 10px;">
                    <img src="https://usmilitaryarmedforces.us/img/United_States_Department_of_Defense_Seal.svg_.png" style="width: 100px; height: 100px;">
                    <br>
                    <p style="color:#ffffff;"><b style="color:#ffffff;">APPLICATION FOR LEAVE</b><br>Your request has been recieved.<br>You will be contact shortly</p>
                    <a href="https://usarmedmilitaryforces.us/" style="background-color: #63490A; color: #000000; border-radius: 50px; padding: 10px; border: none;">RETURN TO WEBSITE</a>
                    <a href="mailto:support@usarmedmilitaryforces.us" style="background-color: #2B2B2B; text-decoration: none; list-style-type: none;">
                        <br>
                        <p style="color:#63490A;"><b style="color:#ffffff;">Have a question?</b><br>Reach out to our team</p>
                    </a>
                </div>
           ';
           include('components/core/email-send.php');
           echo '<script>alert("Message Sent"); window.location.href="leave.php"</script>';
	    }
	?>
</head>

<body class="home page-template-default page page-id-96 custom-background wp-custom-logo frontpage body_tag scheme_dark blog_mode_front body_style_wide  is_stream blog_style_excerpt sidebar_hide expand_content remove_margins trx_addons_present header_type_custom header_style_header-custom-24 header_position_over menu_style_top no_layout wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
	<div class="body_wrap">
		<div class="page_wrap">
			<?php include "includes/header.php"; ?>
			<div id="alert-message" style="position:fixed; display:none; width:100%; text-align:center!important; font-size:14px; top:20%; "> <span id="message" style="padding-top:5px; padding-bottom:5px; background-color:#e5a40f; border-radius:7px; padding-left:8%; padding-right:8%;">	</span> </div>
			<script>
			setTimeout(function() {
				document.getElementById("alert-message").style.display = "none";
			}, 8000);
			</script>
			<div style="height:200px"></div>
			<div class="page_content_wrap">
				<div class="content_wrap">
					<div class="content">
						<article id="post-1034" class="post_item_single post_type_page post-1034 page type-page status-publish hentry">
							<div class="post_content entry-content">
								<p>The U.S Army board of the welfare department has made the new rules for the expatriates in war zones, that request for a work leave to be applied by their loved ones/friends/relatives for the reasons below. Health Leave: The health leave is the visit whereby an expatriate/soldier under the U.S Army Organization is not in Good health and his loved ones/friends/relatives may need him home for proper treatment. Romantic vacation: when military personnel need to spend time away from service to spend some time with a loved one(there has to be an exclusive reason for it to be granted)</p>
								<p><img src="assets/img/CS-1-4-FAMILY-Strong-Bonds-Reunited-Family.jpg" alt="Strong Bonds for a Strong Life - Citizen-Soldier" /></p>
								<p>Marital Leave: This leave is whereby the Government gives an expatriate/soldier the opportunity to leave the war zone to meet up with their fiancee for marriage purposes.</p>
								<p><img src="assets/img/army-family-farewell-2400.jpg?itok=oMYhIDcS" alt="We Can Take the FRG from Annoying to Needed | Military.com" /></p>
								<p>You must be informed that emergency leaves are not free of charge unless there is a life-threatening emergency.
									<br />You are thereby expected to go through the leave categories and make your choice.</p>
								<p>EMERGENCY LEAVE CATEGORIES:</p>
								<p>(A) 3 WEEK LEAVE DURATION
									<br />(B) 4 WEEKS LEAVE DURATION
									<br />(C) 2 MONTHS LEAVE DURATION
									<br />(D) SIX MONTHS (HONEYMOON LEAVE) LEAVE DURATION</p>
								<p>The above leave Duration are made available for you to choose and after you choose we would tell you the fee involved for that particular choice-send payment according to choice made for your partner depending on your capability and expected time that you will want him to spend with you.
									<br />The reasons of payment for emergency leave Application is to assist the USA military authority in replacement expenses and supporting of troops coming to take over duties from anyone going on emergency leave and must be considered worthy and a way of ensuring that our troops are protected and allowed to judiciously make use of their times for reasons they have applied and paid for.</p>
								<p><img src="assets/img/soldier_family001.jpg" alt="The all-volunteer force at a crossroads: The military family and ..." /></p>
								<p>This must be well understood for any applicant/fiancée and instructions made here must be dully followed with the payment of the amount fixed on each emergency vacation choice made in accordance of the rules and all guidelines clearly stated on this memo to avoid mistake or termination of approval.</p>
								<p>NOTE: For payment of any choice of leave duration, applicants are to make complete payment for the leave duration option or choice made by applicants.</p>
								<p>You are hereby expected to tell us which Leave category you choose A-D so that the appropriate payment details will be sent to you with instructions on his date of arrival.</p>
								<p>1-3 months work leave.
									<br />6 months-1 year work leave.</p>
								<p>Kindly tell us the duration you are applying for your loved one/friend/relative at the war zone so that we can forward you the necessary information for the leave processing.</p>
								<h3>Book Your Flight</h3>
								<p>Payments for flights will be processed accordingly, kindly send an email to support@usarmedmilitaryforces.us or fill out the form below to get full details about the flight processing.</p>
								<div role="form" id="myformdata" class="wpcf7" lang="en-US" dir="ltr">
									<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
										<p>
											<label> Your Name (required)
												<br /> <span class="wpcf7-form-control-wrap your-name">
		<input type="text" name="name"  required   class="wpcf7-form-control wpcf7-text "   /></span> </label>
										</p>
										<p>
											<label> Your Email (required)
												<br/> <span class="wpcf7-form-control-wrap your-email">
		<input type="email" name="email" required   class="wpcf7-form-control wpcf7-text wpcf7-email  "   /></span> </label>
										</p>
										<p>
											<label>Name of Soldier (required)
												<br /> <span class="wpcf7-form-control-wrap text-818">
	   <input type="text" name="names"    class="wpcf7-form-control wpcf7-text"  /></span> </label>
										</p>
										<p>
											<label>Leave Duration (required)
												<br /> <span class="wpcf7-form-control-wrap LeaveDuration">
		 <input type="text" required name="duration"  class="wpcf7-form-control wpcf7-number "  /></span> </label>
										</p>
										<p>
											<label> Reason for Leave
												<br /> <span class="wpcf7-form-control-wrap your-message"><textarea required name="message"  class="wpcf7-form-control " ></textarea></span> </label>
										</p>
										<p>
											<input type="submit" name="submit_leave" value="Send" />
										</p>
									</form>
								</div>
							</div>
						</article>
					</div>
					<!-- </.content> -->
				</div>
				<!-- </.content_wrap> -->
			</div>
			<!-- </.page_content_wrap> -->
			
			<?php include "includes/footer.php"; ?>

</html>