<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_dark">
<!-- Mirrored from usmilitaryarmedforces.us/care by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Dec 2021 16:18:58 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<?php include "includes/link.php"; ?>
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
			<div style="height:200px;"></div>
<?php
	if(isset($_POST['submit_search'])){
		require_once ("components/core/aaa-db.php");
		require_once ("components/core/aaa-class.php");
		$objcommon = new common();

		$dataUS = $objcommon->getUserSearch($pdo, $_POST['search']);
		if($dataUS){
			for ($i=0; $i <count($dataUS) ; $i++){
?>
			<div style="margin:auto; width:50vw;"> <img src="assets/img/solider/<?= $dataUS[$i]['pics'] ?>" style="height:250px; border-radius:10px; margin-bottom:5px; width:250px;" />
				<p><b>Name:</b><?= $dataUS[$i]['mos'] ?> <?= $dataUS[$i]['name'] ?></p>
				<p><b>MOS:</b><?= $dataUS[$i]['mos'] ?></p>
				<p><b>Rank:</b><?= $dataUS[$i]['rank'] ?></p>
				<p><b>Post/Troop:</b><?= $dataUS[$i]['post_troop'] ?></p>
				<p><b>Short Bio:</b><?= $dataUS[$i]['short'] ?></p>
			</div>

<?php
			}
		}else{
			echo '<h2 style="text-align:center">No Record Found</h2> ';
		}
	}else{
		echo '<script>window.location.href="index.php?msg=Error"</script>';
	}
?>
			
			<div class="page_content_wrap">
				<div class="content_wrap">
					<div class="content">
						<article id="post-367" class="post_item_single post_type_page post-367 page type-page status-publish hentry">
							<div class="post_content entry-content">
								<div class="vc_row wpb_row vc_row-fluid vc_column-gap-15 vc_row-o-full-height vc_row-o-columns-middle vc_row-flex">
									<div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100" ontouchstart="">
													<div class="vc-hoverbox">
														<div class="vc-hoverbox-inner">
															<div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(https://usmilitaryarmedforces.us/img/services-3-1024x525.jpg);">
																<div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
																	<h2 style="text-align:center">Search our Soldiers below with
     their MOS Codes or Last Name</h2> </div>
															</div>
															<div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #e2e2e2;">
																<div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
																	<h2 style="text-align: justify;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">A Database of all our Servicemen &amp; Women</h2>
																	<p><img class="alignnone size-medium wp-image-1118" src="https://usmilitaryarmedforces.us/img/U.S.-Army-Logo-300x270.png" alt="" width="300" height="270" /></p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div style="margin-top:15px" class="cq-animsition" data-animationmode="normal" data-pagein="fade-in" data-pageout="fade-out" data-overlayin="overlay-slide-in-top" data-overlayout="overlay-slide-out-top" data-pageinspeed="500" data-pageoutspeed="200" data-linkelement="" data-overlaycolor="" data-sitewrapper=""></div>
												<div class="vc_wp_search wpb_content_element">
													<div class="widget widget_search">
														<h2 class="widgettitle">Search: Put MOS code or Last name here</h2>
														<form role="search" method="post" class="search-form" action="search.php">
															<label> <span class="screen-reader-text">Search for:</span>
																<input type="text" class="search-field" placeholder="Search &hellip;" value="" name="search" /> </label>
															<input type="submit" name="submit_search" class="search-submit" value="Search" /> </form>
													</div>
												</div>
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
														<p>A United States military occupation <b>code</b>, or a military occupational specialty <b>code</b> (<b>MOS code</b>), is a nine-character <b>code</b> used in the United States Army and United States Marine Corps to identify a specific job.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row wpb_row vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
										<div class="vc_column-inner">
											<div class="wpb_wrapper"></div>
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