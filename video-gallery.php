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
				<div class="line-through-title">
					<hr class="line">
					<div class="titles">
						<div class="title">VIDEO GALLERY</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="videos clearfix">
					<div class="video-container">
						<div class="video-name">FULL PRESENTATION</div>
						<div class="video">
							<iframe class="video-frame" src="https://www.youtube.com/embed/IELMHB7Jy6s" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="video-container">
						<div class="video-name">FULL PRESENTATION</div>
						<div class="video">
							<iframe class="video-frame" src="https://www.youtube.com/embed/IELMHB7Jy6s" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="video-container">
						<div class="video-name">FULL PRESENTATION</div>
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
		</script>
	</div>
</body>
</html>