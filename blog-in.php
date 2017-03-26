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
				<div class="line-through-title margin-bot">
					<hr class="line">
					<div class="titles">
						<div class="title">REAL ESTATE IN BEIRUT</div>
						<div class="subtitle">25 January 2017</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="bar">
					<div class="bar-left">
						<span class="social-icons-label">SHARE ON</span>
						<?php include '/includes/social-icons.php'; ?>	
					</div>
					<div class="bar-right">
						<a href="#" class="bar-link">GO BACK >></a>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="slider default-slider light-arrows rsDefault">
					<div class="slide rsContent">
						<a class="rsImg" href="/assets/images/blog.jpg"></a>
					</div>
					<div class="slide rsContent">
						<a class="rsImg" href="/assets/images/top-slider-home.jpg"></a>
					</div>
				</div>
			</section>
			<section class="section">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis alias cum ratione rerum totam quia, consequuntur magni ex repellendus assumenda debitis, eius similique sunt architecto illum possimus vero molestias non.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis alias cum ratione rerum totam quia, consequuntur magni ex repellendus assumenda debitis, eius similique sunt architecto illum possimus vero molestias non.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis alias cum ratione rerum totam quia, consequuntur magni ex repellendus assumenda debitis, eius similique sunt architecto illum possimus vero molestias non.</p>
			</section>
		</main>
		<?php include './includes/footer.php'; ?>
		<?php include './includes/scripts.php'; ?>
	</div>
</body>
</html>