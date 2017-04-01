<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="/assets/dist/styles/styles.css">
</head>
<body>
	<div class="site-wrapper">
		<?php include './includes/top-header.php'; ?>
		<?php include './includes/aside.php'; ?>
		<main class="main">
			<section class="section">
				<h1 class="page-title">Pride of Mar Takla 2</h1>
				<?php include '/includes/horizontal-menu.php'; ?>
				<div class="line-through-title m-b30">
					<hr class="line">
					<div class="titles">
						<div class="title">LOCATION & CONTACTS</div>
						<div class="subtitle">Five minutes from Beirut</div>
					</div>
				</div>
				<div class="centered-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, possimus libero quibusdam voluptate sapiente repellendus enim, eveniet saepe aut sed ea velit, odit officia fugit molestias vel laboriosam, numquam quaerat voluptatibus doloremque maxime maiores? Accusamus, illo ducimus laborum quos, nihil assumenda natus alias dolores debitis, illum a quas ab perspiciatis.</div>
			</section>
			<section class="section">
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
				<div class="centered-text m-b30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, possimus libero quibusdam voluptate sapiente repellendus enim, eveniet saepe aut sed ea velit, odit officia fugit molestias vel laboriosam, numquam quaerat voluptatibus doloremque maxime maiores? Accusamus, illo ducimus laborum quos, nihil assumenda natus alias dolores debitis, illum a quas ab perspiciatis.</div>
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