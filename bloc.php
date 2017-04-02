<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="/assets/dist/styles/styles.css">
</head>
<body>
	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

	    <!-- Background of PhotoSwipe. 
	         It's a separate element as animating opacity is faster than rgba(). -->
	    <div class="pswp__bg"></div>

	    <!-- Slides wrapper with overflow:hidden. -->
	    <div class="pswp__scroll-wrap">

	        <!-- Container that holds slides. 
	            PhotoSwipe keeps only 3 of them in the DOM to save memory.
	            Don't modify these 3 pswp__item elements, data is added later on. -->
	        <div class="pswp__container">
	            <div class="pswp__item"></div>
	            <div class="pswp__item"></div>
	            <div class="pswp__item"></div>
	        </div>

	        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
	        <div class="pswp__ui pswp__ui--hidden">

	            <div class="pswp__top-bar">

	                <!--  Controls are self-explanatory. Order can be changed. -->

	                <div class="pswp__counter"></div>

	                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

	                <button class="pswp__button pswp__button--share" title="Share"></button>

	                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

	                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

	                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
	                <!-- element will get class pswp__preloader--active when preloader is running -->
	                <div class="pswp__preloader">
	                    <div class="pswp__preloader__icn">
	                      <div class="pswp__preloader__cut">
	                        <div class="pswp__preloader__donut"></div>
	                      </div>
	                    </div>
	                </div>
	            </div>

	            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
	                <div class="pswp__share-tooltip"></div> 
	            </div>

	            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
	            </button>

	            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
	            </button>

	            <div class="pswp__caption">
	                <div class="pswp__caption__center"></div>
	            </div>

	        </div>

	    </div>
	</div>
	<div class="site-wrapper">
		<?php include './includes/top-header.php'; ?>
		<?php include './includes/aside.php'; ?>
		<main class="main">
			<section>
				<h1 class="page-title">Pride of Mar Takla 2</h1>
				<?php include '/includes/horizontal-menu.php'; ?>
				<div class="line-through-title">
					<hr class="line">
					<div class="titles">
						<div class="title">BLOC B</div>
					</div>
				</div>
				<div class="text-center m-b30 m-t20">Block B consists of 8 Buildings with 2 apartments per floor, hence B1 to B16</div>
			</section>
			<section class="section">
				<div class="slider light-arrows default-slider rsDefault">
					<div class="slide rsContent">
						<a class="rsImg" href="/assets/images/top-slider-home.jpg"></a>
						<figure class="rsCaption">
							<h1>Look no further, Paradise is found!</h1>
						</figure>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="line-through-title">
					<hr class="line">
					<div class="titles">
						<div class="title">APARTMENTS</div>
						<div class="subtitle">From 90 to 250 square meter</div>
					</div>
				</div>
			</section>
			<section>
				<div class="filter-bar clearfix">
					<div class="left-part">
						<span class="filter-elements-title">FILTER BY</span>
						
						<div class="filter-elements-wrapper">
							<div class="checkbox">
								<input type="checkbox" id="available-apartments" class="filter-checkbox" data-available="true">
								<div class="checkbox-filling"></div>
							</div>
							<label for="available-apartments" class="cu-p m-l5">Only available apartments</label>
						</div>
						
						<div class="filter-elements-wrapper">
							<div class="checkbox">
								<input type="checkbox" id="with-terrace" class="filter-checkbox" data-terrace="true">
								<div class="checkbox-filling"></div>
							</div>
							<label for="with-terrace" class="cu-p m-l5">With Terrace</label>
						</div>
						
						<div class="filter-elements-wrapper">
							<div class="checkbox">
								<input type="checkbox" id="duplex" class="filter-checkbox" data-duplex="true">
								<div class="checkbox-filling"></div>
							</div>
							<label for="duplex" class="cu-p m-l5">Duplex</label>
						</div>
						
						<div class="filter-elements-wrapper">
							<div class="checkbox">
								<input type="checkbox" id="simplex" class="filter-checkbox" data-simplex="true">
								<div class="checkbox-filling"></div>
							</div>
							<label for="simplex" class="cu-p m-l5">Simplex</label>
						</div>
					</div>
					<div class="right-part">
						<span class="filter-elements-title">SORT BY</span>
						<select class="filter-dropdown selectric-dropdown sort">
							<option value="floor">FLOOR</option>
							<option value="price">PRICE</option>
							<option value="size">SIZE</option>
						</select>
					</div>
				</div>
			</section>
			<section>
				<iframe src="/apartments.php" frameborder="0" class="iframe apartments-iframe"></iframe>
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
	</div>
</body>
</html>