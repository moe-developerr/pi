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
			<section class="section">
				<div class="line-through-title margin-bot">
					<hr class="line">
					<div class="titles">
						<div class="title">SEARCH RESULTS</div>
						<div class="subtitle">20 Apartments Found</div>
					</div>
				</div>
				<div class="search-panels clearfix">
					<div class="search-panel-wrapper">
						<div class="search-panel-inner-wrapper lets-talk-wrapper">
							<form class="search-panel-form lets-talk-form">
								<div class="search-panel-form-element-wrapper">
									<input type="text" placeholder="Your Name" required="required" class="search-panel-form-input full-name">
								</div>
								<div class="search-panel-form-element-wrapper">
									<input type="email" placeholder="Your Email" required="required" class="search-panel-form-input email">
								</div>
								<div class="search-panel-form-element-wrapper">
									<input type="text" placeholder="Phone" class="search-panel-form-input phone">
								</div>
								<div class="search-panel-form-element-wrapper">
									<select name="" class="search-panel-form-select selectric-dropdown country">
										<option value="Lebanon">Lebanon</option>
										<option value="Egypt">Egypt</option>
										<option value="Cyprus">Cyprus</option>
									</select>
								</div>
								<div class="search-panel-form-element-wrapper">
									<input type="text" placeholder="Notes" required="required" class="search-panel-form-input message">
								</div>
								<footer class="search-panel-form-footer">
									<button type="button" class="search-panel-form-footer-btn lets-talk-cancel">CANCEL</button>
									<button class="search-panel-form-footer-btn lets-talk-submit">SEND</button>
									<div class="feedback"></div>
								</footer>
							</form>
							<div class="search-panel clearfix">
								<div class="search-panel-image-wrapper">
									<img src="/assets/images/office.jpg" alt="" class="search-panel-image img-responsive">
								</div>
								<div class="search-panel-text-wrapper">
									<h2 class="search-panel-title">Pride Of Mar Takla II</h2>
									<h3 class="search-panel-subtitle">B1 - 97 sqm with 134 sqm Terrace</h3>
									<h4 class="search-panel-sub-subtitle">Ground Floor</h4>
									<p>
										2 Master Bedrooms, Dining room <br>
										Living room, Guest WC <br>
										Kitchen with Maid's Quarter <br>
									</p>
								</div>
								<footer class="search-panel-footer">
									<button class="search-panel-footer-btn lets-talk-trigger">LET'S TALK</button>
									<button class="search-panel-footer-btn floor-plans" data-srcs="/assets/images/beirut-at-night.jpg, /assets/images/top-slider-home.jpg" data-titles="title 1, title 2">FLOOR PLANS</button>
								</footer>
							</div>
						</div>
					</div>
					<div class="search-panel-wrapper">
						<div class="search-panel-inner-wrapper lets-talk-wrapper">
							<form class="search-panel-form lets-talk-form">
								<div class="search-panel-form-element-wrapper">
									<input type="text" placeholder="Your Name" required="required" class="search-panel-form-input full-name">
								</div>
								<div class="search-panel-form-element-wrapper">
									<input type="email" placeholder="Your Email" required="required" class="search-panel-form-input email">
								</div>
								<div class="search-panel-form-element-wrapper">
									<input type="text" placeholder="Phone" class="search-panel-form-input phone">
								</div>
								<div class="search-panel-form-element-wrapper">
									<select name="" class="search-panel-form-select selectric-dropdown country">
										<option value="Lebanon">Lebanon</option>
										<option value="Egypt">Egypt</option>
										<option value="Cyprus">Cyprus</option>
									</select>
								</div>
								<div class="search-panel-form-element-wrapper">
									<input type="text" placeholder="Notes" required="required" class="search-panel-form-input message">
								</div>
								<footer class="search-panel-form-footer">
									<button type="button" class="search-panel-form-footer-btn lets-talk-cancel">CANCEL</button>
									<button class="search-panel-form-footer-btn lets-talk-submit">SEND</button>
									<div class="feedback"></div>
								</footer>
							</form>
							<div class="search-panel clearfix">
								<div class="search-panel-image-wrapper">
									<img src="/assets/images/office.jpg" alt="" class="search-panel-image img-responsive">
								</div>
								<div class="search-panel-text-wrapper">
									<h2 class="search-panel-title">Pride Of Mar Takla II</h2>
									<h3 class="search-panel-subtitle">B1 - 97 sqm with 134 sqm Terrace</h3>
									<h4 class="search-panel-sub-subtitle">Ground Floor</h4>
									<p>
										2 Master Bedrooms, Dining room <br>
										Living room, Guest WC <br>
										Kitchen with Maid's Quarter <br>
									</p>
								</div>
								<footer class="search-panel-footer">
									<button class="search-panel-footer-btn lets-talk-trigger">LET'S TALK</button>
									<button class="search-panel-footer-btn floor-plans" data-srcs="/assets/images/beirut-at-night.jpg, /assets/images/top-slider-home.jpg" data-titles="title 1, title 2">FLOOR PLANS</button>
								</footer>
							</div>
						</div>
					</div>
					<div class="search-panel-wrapper">
						<div class="search-panel-inner-wrapper lets-talk-wrapper">
							<form class="search-panel-form lets-talk-form">
								<div class="search-panel-form-element-wrapper">
									<input type="text" placeholder="Your Name" required="required" class="search-panel-form-input full-name">
								</div>
								<div class="search-panel-form-element-wrapper">
									<input type="email" placeholder="Your Email" required="required" class="search-panel-form-input email">
								</div>
								<div class="search-panel-form-element-wrapper">
									<input type="text" placeholder="Phone" class="search-panel-form-input phone">
								</div>
								<div class="search-panel-form-element-wrapper">
									<select name="" class="search-panel-form-select selectric-dropdown country">
										<option value="Lebanon">Lebanon</option>
										<option value="Egypt">Egypt</option>
										<option value="Cyprus">Cyprus</option>
									</select>
								</div>
								<div class="search-panel-form-element-wrapper">
									<input type="text" placeholder="Notes" required="required" class="search-panel-form-input message">
								</div>
								<footer class="search-panel-form-footer">
									<button type="button" class="search-panel-form-footer-btn lets-talk-cancel">CANCEL</button>
									<button class="search-panel-form-footer-btn lets-talk-submit">SEND</button>
									<div class="feedback"></div>
								</footer>
							</form>
							<div class="search-panel clearfix">
								<div class="search-panel-image-wrapper">
									<img src="/assets/images/office.jpg" alt="" class="search-panel-image img-responsive">
								</div>
								<div class="search-panel-text-wrapper">
									<h2 class="search-panel-title">Pride Of Mar Takla II</h2>
									<h3 class="search-panel-subtitle">B1 - 97 sqm with 134 sqm Terrace</h3>
									<h4 class="search-panel-sub-subtitle">Ground Floor</h4>
									<p>
										2 Master Bedrooms, Dining room <br>
										Living room, Guest WC <br>
										Kitchen with Maid's Quarter <br>
									</p>
								</div>
								<footer class="search-panel-footer">
									<button class="search-panel-footer-btn lets-talk-trigger">LET'S TALK</button>
									<button class="search-panel-footer-btn floor-plans" data-srcs="/assets/images/beirut-at-night.jpg, /assets/images/top-slider-home.jpg" data-titles="title 1, title 2">FLOOR PLANS</button>
								</footer>
							</div>
						</div>
					</div>
					<div class="search-panel-wrapper">
						<div class="search-panel-inner-wrapper lets-talk-wrapper">
							<form class="search-panel-form lets-talk-form">
								<div class="search-panel-form-element-wrapper">
									<input type="text" placeholder="Your Name" required="required" class="search-panel-form-input full-name">
								</div>
								<div class="search-panel-form-element-wrapper">
									<input type="email" placeholder="Your Email" required="required" class="search-panel-form-input email">
								</div>
								<div class="search-panel-form-element-wrapper">
									<input type="text" placeholder="Phone" class="search-panel-form-input phone">
								</div>
								<div class="search-panel-form-element-wrapper">
									<select name="" class="search-panel-form-select selectric-dropdown country">
										<option value="Lebanon">Lebanon</option>
										<option value="Egypt">Egypt</option>
										<option value="Cyprus">Cyprus</option>
									</select>
								</div>
								<div class="search-panel-form-element-wrapper">
									<input type="text" placeholder="Notes" required="required" class="search-panel-form-input message">
								</div>
								<footer class="search-panel-form-footer">
									<button type="button" class="search-panel-form-footer-btn lets-talk-cancel">CANCEL</button>
									<button class="search-panel-form-footer-btn lets-talk-submit">SEND</button>
									<div class="feedback"></div>
								</footer>
							</form>
							<div class="search-panel clearfix">
								<div class="search-panel-image-wrapper">
									<img src="/assets/images/office.jpg" alt="" class="search-panel-image img-responsive">
								</div>
								<div class="search-panel-text-wrapper">
									<h2 class="search-panel-title">Pride Of Mar Takla II</h2>
									<h3 class="search-panel-subtitle">B1 - 97 sqm with 134 sqm Terrace</h3>
									<h4 class="search-panel-sub-subtitle">Ground Floor</h4>
									<p>
										2 Master Bedrooms, Dining room <br>
										Living room, Guest WC <br>
										Kitchen with Maid's Quarter <br>
									</p>
								</div>
								<footer class="search-panel-footer">
									<button class="search-panel-footer-btn lets-talk-trigger">LET'S TALK</button>
									<button class="search-panel-footer-btn floor-plans" data-srcs="/assets/images/beirut-at-night.jpg, /assets/images/top-slider-home.jpg" data-titles="title 1, title 2">FLOOR PLANS</button>
								</footer>
							</div>
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