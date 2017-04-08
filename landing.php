<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="/assets/dist/styles/styles.css">
</head>
<body class="landing-page">
	<div class="site-wrapper">
		<?php include './includes/top-header.php'; ?>
		<?php include './includes/aside.php'; ?>
		<main class="main">
			<section>
				<h1 class="page-title">Pride of Mar Takla 2</h1>
				<?php include '/includes/horizontal-menu.php'; ?>
			</section>
			<section class="section">
				<div class="slider light-arrows full-height-slider rsDefault" data-subtracted-height="200">
					<div class="slide rsContent">
						<a class="rsImg" href="/assets/images/top-slider-home.jpg"></a>
						<figure class="rsCaption">
							<h1>Look no further, Paradise is found!</h1>
						</figure>
					</div>
					<div class="slide rsContent">
						<a class="rsImg" href="/assets/images/beirut-at-night.jpg"></a>
						<figure class="rsCaption">
							<h1>Look no further, Paradise is found!</h1>
						</figure>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="line-through-title margin-bot">
					<hr class="line">
					<div class="titles">
						<div class="title">WE DON'T DEVELOP HOUSES, WE DESIGN HOMES</div>
						<div class="subtitle">A house is made of bricks While a Home is built with Love and Dreams</div>
					</div>
				</div>
				<div class="centered-text">This project combines Nature with True Luxury.
				We offer 2 Bedroom and 3 Bedroom apartments each with a breathtaking view to the Mountains of Mount Lebanon.
				But New Mar Takla 5359 has much more to offer… The interior and the exterior of this project meet the highest standards possible.
				From the marble in each apartment to the Panoramic Glass Elevator,
				Everything has been carefully selected to ultimately convince you that this is truly…     
				</div>
				<div class="text-center blue-c fz-16 m-t20 fw-600">Your Dream House</div>
			</section>
			<section class="section">
				<div class="line-through-title margin-bot">
					<hr class="line">
					<div class="titles">
						<div class="title">WE DON'T DEVELOP HOUSES, WE DESIGN HOMES</div>
						<div class="subtitle">A house is made of bricks While a Home is built with Love and Dreams</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-6 full-height-col-smp">
						<div class="lh-1-5">This project combines Nature with True Luxury.
						We offer 2 Bedroom and 3 Bedroom apartments each with a breathtaking view to the Mountains of Mount Lebanon.
						But New Mar Takla 5359 has much more to offer… The interior and the exterior of this project meet the highest standards possible.
						From the marble in each apartment to the Panoramic Glass Elevator,
						Everything has been carefully selected to ultimately convince you that this is truly…     
						</div>
						<div class="blue-c fz-16 m-t20 fw-600">Your Dream House</div>
						<a href="#" class="d-b blue-bg white-c text-center p-5 m-t10 m-b5 ps-a-smp w-50perc-smp b-0-smp">CLICK TO KNOW MORE</a>
					</div>
					<div class="col-sm-6 full-height-col-smp">
						<div class="video">
							<iframe class="video-frame" src="https://www.youtube.com/embed/IELMHB7Jy6s" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="line-through-title margin-bot">
					<hr class="line">
					<div class="titles">
						<div class="title">PROJECT HIGHLIGHTS</div>
						<div class="subtitle">Best of the Best</div>
					</div>
				</div>
				<div class="boxes clearfix">
					<div class="box-wrapper">
						<div class="box">
							<div class="box-image-wrapper"></div>
							<div class="box-title">PERFECT FINISHING</div>
						</div>
					</div>
					<div class="box-wrapper">
						<div class="box">
							<div class="box-image-wrapper"></div>
							<div class="box-title">PERFECT FINISHING</div>
						</div>
					</div>
					<div class="box-wrapper">
						<div class="box">
							<div class="box-image-wrapper"></div>
							<div class="box-title">PERFECT FINISHING</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="line-through-title margin-bot">
					<hr class="line">
					<div class="titles">
						<div class="title">The Marvelous Location</div>
						<div class="subtitle">5 minutes from Beirut</div>
					</div>
				</div>
				<div id="map" data-lat="33.8938" data-lng="35.5018" data-zoom="13"></div>
			</section>
			<section class="section">
				<div class="line-through-title margin-bot">
					<hr class="line">
					<div class="titles">
						<div class="title">INTRESTED, LET’S TALK</div>
						<div class="subtitle">We will be glad to assist</div>
					</div>
				</div>
				<form class="contact-form clearfix">
					<div class="contact-form-horizontal-group">
						<div class="element-wrapper">
							<input type="text" class="contact-form-input full-name" placeholder="FULL NAME" required="required">
						</div>
						<div class="element-wrapper">
							<input type="email" class="contact-form-input email" placeholder="EMAIL" required="required">
						</div>
						<div class="element-wrapper">
							<input type="text" class="contact-form-input phone" placeholder="PHONE">
						</div>
						<div class="element-wrapper">
							<select name="" id="" class="contact-form-input selectric-dropdown country">
								<option value="" disabled>COUNTRY</option>
								<option value="LEBANON">LEBANON</option>
								<option value="EGYPT">EGYPT</option>
								<option value="CYPRUS">CYPRUS</option>
							</select>
						</div>
					</div>
					<div class="contact-form-horizontal-group">
						<textarea name="" id="" cols="30" rows="10" class="contact-form-textarea message" placeholder="MESSAGE" required="required"></textarea>
					</div>
					<div class="clearfix">
						<button class="contact-form-submit">SEND</button>
						<div class="feedback"></div>
					</div>
				</form>
			</section>
		</main>
		<?php include './includes/footer.php'; ?>
		<?php include './includes/scripts.php'; ?>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3QPh-y7Mhz2XrOtVg4hY5clsamIZcUtk&callback=initGoogleMap"></script>
		<script>
			function initGoogleMap() {
				googleMap.init();
				googleMap.addMarker({
					position: {lat: 33.8938, lng: 35.5018}
				});
			}
		</script>
	</div>
</body>
</html>