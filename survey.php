<?php

$entity = "Other";
if (isset($_GET['entity'])) {
	$entity = $_GET['entity'];
}

$track = "";
if (isset($_GET['track'])) {
	$track = $_GET['track'];
}

$base = "https://talent.aiesec.lk/";
if ($_SERVER['SERVER_NAME'] == "localhost") {

	// Change this if you are running on your machine
	$base = "http://localhost/aiesec.lk/igt-nps-survey/";
}

$background = "background.jpg";
$logo = "White-Blue-Logo.png";
$product = "NPS";
$color = "#1e8bc3";
$product_name = "AIESEC Partnership Survey";
$product_name_up = "AIESEC PARTNERSHIP SURVEY";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Required meta tags-->
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-TX6XMML');
	</script>
	<!-- End Google Tag Manager -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="AIESEC Partnership Survey">

	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!-- Title Page-->
	<title><?= $product_name ?></title>
	<BASE href="<?= $base ?>">
	<link rel="shortcut icon" type="image/png" href="assets/favicon.png" />
	<!-- Icons font CSS-->
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<!-- Font special for pages-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Vendor CSS-->
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<style>
		body {
			background-image: url("assets/<?= $background ?>");
			background-color: white;
			background-repeat: no-repeat;
			background-position: center top;
			background-attachment: fixed;
			background-size: 100% auto;
		}

		@media only screen and (max-width: 600px) {
			body {
				background-size: auto 100%;
			}
		}
	</style>
	<!-- Main CSS-->
	<link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TX6XMML" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div id="overlay" style="background-color:rgba(255,255,255,0.95); position:fixed; top:0; bottom:0;
width:100%; height:100%; z-index:999; text-align: center; vertical-align: middle; display:none;">
		<div class="center">
			<div class="loadingio-spinner-dual-ring-lwapedn49g" style="width:200px;">
				<div class="ldio-18ldoi6nwr4">
					<div></div>
					<div>
						<div></div>
					</div>
				</div>
			</div>
			<div style="color:<?= $color ?>; font-size:20px; font-weight:bold;">Please wait while we process your information.</div>
		</div>
		<style type="text/css">
			.center {
				margin: 0;
				position: absolute;
				top: 50%;
				left: 50%;
				-ms-transform: translate(-50%, -50%);
				transform: translate(-50%, -50%);
			}

			@keyframes ldio-18ldoi6nwr4 {
				0% {
					transform: rotate(0)
				}

				100% {
					transform: rotate(360deg)
				}
			}

			.ldio-18ldoi6nwr4 div {
				box-sizing: border-box !important
			}

			.ldio-18ldoi6nwr4>div {
				position: absolute;
				width: 144px;
				height: 144px;
				top: 28px;
				left: 28px;
				border-radius: 50%;
				border: 16px solid #000;
				border-color: <?= $color ?> transparent <?= $color ?> transparent;
				animation: ldio-18ldoi6nwr4 1s linear infinite;
			}

			.ldio-18ldoi6nwr4>div:nth-child(2) {
				border-color: transparent
			}

			.ldio-18ldoi6nwr4>div:nth-child(2) div {
				position: absolute;
				width: 100%;
				height: 100%;
				transform: rotate(45deg);
			}

			.ldio-18ldoi6nwr4>div:nth-child(2) div:before,
			.ldio-18ldoi6nwr4>div:nth-child(2) div:after {
				content: "";
				display: block;
				position: absolute;
				width: 16px;
				height: 16px;
				top: -16px;
				left: 48px;
				background: <?= $color ?>;
				border-radius: 50%;
				box-shadow: 0 128px 0 0 <?= $color ?>;
			}

			.ldio-18ldoi6nwr4>div:nth-child(2) div:after {
				left: -16px;
				top: 48px;
				box-shadow: 128px 0 0 0 <?= $color ?>;
			}

			.loadingio-spinner-dual-ring-lwapedn49g {
				width: 200px;
				height: 200px;
				display: inline-block;
				overflow: hidden;
				background: none;
			}

			.ldio-18ldoi6nwr4 {
				width: 100%;
				height: 100%;
				position: relative;
				transform: translateZ(0) scale(1);
				backface-visibility: hidden;
				transform-origin: 0 0;
				/* see note above */
			}

			.ldio-18ldoi6nwr4 div {
				box-sizing: content-box;
			}

			/* generated by https://loading.io/ */
		</style>
	</div>

	<div class="page-wrapper font-poppins" style="padding-top:80px">
		<center><img src="assets/<?= $logo ?>" alt="Smiley face" class="responsive" style="width:300px;"> </center><br><br>
		<div class="wrapper wrapper--w680">
			<div class="card card-4">
				<div class="card-body" style="border-radius:5px; padding-top:40px; margin-bottom:25px;">
					<h1 class="title" style="color:<?= $color ?>; font-size:30px; font-weight:bold"><?= $product_name_up ?></h1>

					<div style="line-height:25px;">
						Dear Partner, </br></br>

						This is a feedback form that we share with our partners in order to make our performance and processes more successful; therefore, we kindly request you to fill out this survey with honesty.
						</br></br>
						We thank you in advance for your comments and suggestions and, we assure you that each one will be taken into consideration and embedded in our improvement's process.

					</div>
				</div>
			</div>

			<div class="card card-4">
				<div class="card-body" style="border-bottom-style: solid; border-color:<?= $color ?>; border-width:20px; border-radius:5px; padding-top:40px;">

					<form id='signup_form' enctype="multipart/form-data">

						<div class="row row-space">
							<div class="col-1">
								<div class="input-group">
									<label class="label">Email<span class="required_field"> *</span></label>
									<input class="input--style-4" type="email" name="email" required>
									<input type="hidden" name="entity" value="<?= $entity ?>" required>
								</div>
							</div>
						</div>

						<div class="row row-space">
							<div class="col-1">
								<div class="input-group">
									<label class="label">Designation<span class="required_field"> *</span></label>
									<input class="input--style-4" type="text" name="designation" required>
									<input type="hidden" name="entity" value="<?= $entity ?>" required>
								</div>
							</div>
						</div>

						<div class="row row-space">
							<div class="col-1">
								<div class="input-group">
									<label class="label">Company Name<span class="required_field"> *</span></label>
									<input class="input--style-4" type="text" name="company" required>
								</div>
							</div>
						</div>

						<div class="row row-space">
							<div class="col-1">
								<div class="input-group">
									<label class="label">Rating?<span class="required_field"> *</span></label>

									<style>
										@import "bourbon";

										.rating_scale {
											display: block;
											text-align: center;
											font-size: 0;
										}

										.rating_scale span {
											display: inline-block;
											box-sizing: border-box;
											padding: 0.15em 0.4em;
											font-size: 18px;
											width: 3.05em;
											background: #F5F5F5;
											color: #1e8bc3;
											border-top: solid 1px #fff;
											border-bottom: solid 1px #fff;
											border-right: solid 1px #fff;
										}

										.rating_scale label:first-child span {
											border-left: solid 1px #fff;
											border-top-left-radius: 0.25em;
											border-bottom-left-radius: 0.25em;
										}

										.rating_scale label:last-child span {
											border-top-right-radius: 0.25em;
											border-bottom-right-radius: 0.25em;
										}

										.rating_scale input[type="radio"] {
											display: none;
										}

										.rating_scale input[type="radio"]:checked~span {
											background: #1e8bc3;
											color: #fff;
										}
									</style>

									<div class="rating_scale">

										<label>
											<input type="radio" name="rad" value="1" /><span>1</span>
										</label>
										<label>
											<input type="radio" name="rad" value="2" /><span>2</span>
										</label>
										<label>
											<input type="radio" name="rad" value="3" /><span>3</span>
										</label>
										<label>
											<input type="radio" name="rad" value="4" /><span>4</span>
										</label>
										<label>
											<input type="radio" name="rad" value="5" /><span>5</span>
										</label>
										<label>
											<input type="radio" name="rad" value="6" /><span>6</span>
										</label>
										<label>
											<input type="radio" name="rad" value="7" /><span>7</span>
										</label>
										<label>
											<input type="radio" name="rad" value="8" /><span>8</span>
										</label>
										<label>
											<input type="radio" name="rad" value="9" /><span>9</span>
										</label>

										<label>
											<input type="radio" name="rad" value="10" /><span>10</span>
										</label>

									</div>
								</div>
							</div>
						</div>

						<div class="row row-space">
							<div class="col-1">
								<div class="input-group">
									<label class="label">Reason for the rating?<span class="required_field"> *</span></label>
									<input class="input--style-4" type="text" name="reason" required>
								</div>
							</div>
						</div>

						<div class="row row-space">
							<div class="col-1">
								<div class="input-group">
									<label class="label">Any suggestions for improvements?<span class="required_field"> *</span></label>
									<input class="input--style-4" type="text" name="improve" required>
								</div>
							</div>
						</div>

						<div class="input-group col-1">
							<label class="label">Would you recommend this service to others?<span class="required_field"> *</span></label>
							<div class="rs-select2 js-select-simple select--no-search">
								<select name="recommend" value="" required>
									<option disabled="disabled" selected="selected" hidden>Choose option</option>
									<option value="No">No</option>
									<option value="Yes">Yes</option>
								</select>
								<div class="select-dropdown"></div>
							</div>
						</div>

						<div class="g-recaptcha" data-sitekey="6LfddL4UAAAAAH5VDHI75ZzDmn3M6hIAiVyOf7gz"></div>
						<div class="p-t-15">
							<button class="btn btn--radius-2 btn--gt" style="background: <?= $color ?>;" name="submit" type="submit">Submit

							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<br><br><br><br>

	</div>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<!-- Jquery JS-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<!-- Vendor JS-->
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/datepicker/moment.min.js"></script>
	<script src="vendor/datepicker/daterangepicker.js"></script>

	<!-- Main JS-->
	<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

<script>
	$(function() {
		$('form').on('submit', function(e) {

			let success = false;

			$("#overlay").fadeIn(300);

			console.log(grecaptcha.getResponse());

			e.preventDefault();

			var formData = new FormData(this);

			$.ajax({
				url: 'submit.php',
				type: 'POST',
				data: formData,
				success: function(data) {

					$("#overlay").fadeOut(300);


					let response = JSON.parse(data)

					if (response.type === "fail") {

						if (response.text === "Captcha invalid") {
							Swal.fire({
								title: "Captcha Invalid",
								text: "Your Captcha was invalid. Please try again.",
								type: "error",
								confirmButtonText: "OK"
							});
						}

						if (response.text === "Incomplete form") {
							Swal.fire({
								title: "Incomplete Form",
								text: "Your form was incomplete. Please re-check.",
								type: "error",
								confirmButtonText: "OK"
							});
						}

					}

					if (response.type === "success") {
						success = true;
						Swal.fire({
							title: "Success!",
							text: "Thank you for your valuable feedback.",
							type: "success",
							confirmButtonText: "OK"
						}).then((result) => {
							//window.location.href = "https://www.aiesec.lk/impactportfolio/";
						})
					}

					if (!success) {
						Swal.fire({
							title: "Error",
							text: "Oops! An error occurred. Please try again later.",
							type: "error",
							confirmButtonText: "OK"
						});
					}
				},
				error: function(xhr, textStatus, errorThrown) {
					$("#overlay").fadeOut(300);

					Swal.fire({
						title: "Error",
						text: "Oops! An error occurred. Please try again later.",
						type: "error",
						confirmButtonText: "OK"
					});
				},
				cache: false,
				contentType: false,
				processData: false
			});

		});

	});
</script>


</html>
<!-- end document-->