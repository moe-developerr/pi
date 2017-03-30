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
				<div id="map"></div>
			</section>
			<section class="section">
				<div class="line-through-title margin-bot">
					<hr class="line">
					<div class="titles">
						<div class="title">INTERNATION PRESENCE</div>
						<div class="subtitle">Your Next Neighbour</div>
					</div>
				</div>
				<div class="cards clearfix">
					<div class="card-wrapper">
						<div class="card">
							<div class="card-image-wrapper" style="background-image: url('/assets/images/office.jpg')"></div>
							<div class="card-text-wrapper">
								<div class="card-title">BEIRUT - LEBANON</div>
								<p>
									<div class="card-subtitle">Address:</div>
									<span>La Diva Building - Hazmieh Mar takla Beirut - Lebanon</span>
								</p>
								<div>
									<div>
										<span class="card-subtitle">Tel:</span>
										<span>+961 5 957 357</span>
									</div>
									<div>
										<span class="card-subtitle">Email:</span>
										<span>info@prideinvests.com</span>
									</div>
									<div>
										<span class="card-subtitle">Contact Person:</span>
										<span>Alia Kaddah</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-wrapper">
						<div class="card">
							<div class="card-image-wrapper" style="background-image: url('/assets/images/office.jpg')"></div>
							<div class="card-text-wrapper">
								<div class="card-title">CANNES - FRANCE</div>
								<p>
									<div class="card-subtitle">Address:</div>
									<span>89 Rue d'Antibes - 2eme etage 06400 Cannes - France</span>
								</p>
								<div>
									<div>
										<span class="card-subtitle">Tel:</span>
										<span>+33 4 93 38 77 56</span>
									</div>
									<div>
										<span class="card-subtitle">Email:</span>
										<span>contact@prideofcotedazur.com</span>
									</div>
									<div>
										<span class="card-subtitle">Contact Person:</span>
										<span>Caroline Fabian</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-wrapper">
						<div class="card">
							<div class="card-image-wrapper" style="background-image: url('/assets/images/office.jpg')"></div>
							<div class="card-text-wrapper">
								<div class="card-title">NEW YORK - USA</div>
								<p>
									<div class="card-subtitle">Address:</div>
									<span>60 East 66th Street - Suite 5A New York, NY 10065 - USA</span>
								</p>
								<div>
									<div>
										<span class="card-subtitle">Tel:</span>
										<span>+961 5 957 357</span>
									</div>
									<div>
										<span class="card-subtitle">Email:</span>
										<span>info@prideinvests.com</span>
									</div>
									<div>
										<span class="card-subtitle">Contact Person:</span>
										<span>Alia Kaddah</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="line-through-title margin-bot">
					<hr class="line">
					<div class="titles">
						<div class="title">LET US KNOW YOUR CONCERNS</div>
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
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3QPh-y7Mhz2XrOtVg4hY5clsamIZcUtk&callback=googleMap.init">
    </script>
	</div>
</body>
</html>