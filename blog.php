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
						<div class="title">INTERNATIONAL PRESENCE</div>
						<div class="subtitle">Your Next Neighbour</div>
					</div>
				</div>
				<div class="search-bar clearfix">
					<div class="search-element-container">
						<label for="search" class="search-label">SEARCH</label>
						<div class="search-element-wrapper">
							<input type="text" id="search" class="search-element blog-filter-element">
							<i class="fa fa-search search-icon blog-filter-submit"></i>
						</div>
					</div>
				</div>
				<div class="panels clearfix">
					<div class="panel blog">
						<div class="panel-image-wrapper">
							<div class="panel-image" style="background-image:url('/assets/images/blog.jpg')"></div>
						</div>
						<div class="panel-text-wrapper">
							<div class="panel-title blog-title">First Blog Title</div>
							<div class="panel-subtitle blog-subtitle">24 January 2016</div>
							<div class="blog-text"><p>Second blog text</p></div>
							<a href="#" class="panel-link edge-link">KNOW MORE</a>
						</div>
					</div>
					<div class="panel blog">
						<div class="panel-image-wrapper">
							<div class="panel-image" style="background-image:url('/assets/images/blog.jpg')"></div>
						</div>
						<div class="panel-text-wrapper">
							<div class="panel-title blog-title">Second Blog Title</div>
							<div class="panel-subtitle blog-subtitle">25 January 2017</div>
							<div class="blog-text"><p>First blog text</p></div>
							<a href="#" class="panel-link edge-link">KNOW MORE</a>
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php include './includes/footer.php'; ?>
		<?php include './includes/scripts.php'; ?>
	</div>
</body>
</html>