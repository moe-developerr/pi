<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="/assets/dist/styles/styles.css">
</head>
<body class="ov-h">
	<section>
		<div class="line-through-title margin-bot">
			<hr class="line">
			<div class="titles">
				<div class="title">GROUND FLOOR</div>
			</div>
		</div>
		<div class="search-panels clearfix">
			<div class="search-panel-wrapper without-image" data-available="true" data-terrace="true" data-duplex="true" data-simplex="false">
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
						<div class="search-panel-text-wrapper">
							<h2 class="search-panel-title">Pride Of Mar Takla II</h2>
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
			<div class="search-panel-wrapper without-image sold selection-disabled" data-available="false" data-terrace="false" data-duplex="false" data-simplex="true">
				<div class="search-panel-inner-wrapper lets-talk-wrapper">
					<div class="sold-banner trapezoid">SOLD</div>
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
						<div class="search-panel-text-wrapper">
							<h2 class="search-panel-title">Pride Of Mar Takla II</h2>
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
	<?php // include './includes/scripts.php'; ?>
	<script src="/node_modules/jquery/dist/jquery.min.js"></script>
	<script src="/assets/src/scripts/vendors/jquery.selectric.js"></script>
	<script>
		(function () {
			run();

			function run() {
				signalDocumentIsReady();
				setIframeHeight();
				attachEvents();
			}

			function attachEvents() {
				$('.floor-plans').click(function () {
					parent.popup.showPopup($(this));
				});
			}

			function setIframeHeight() {
				parent.iframeController.setHeight($(document).height());
			}

			function signalDocumentIsReady() {
				parent.filter.onIframeDocumentReady();
			}
		})();
	</script>
	<script>
		$('.selectric-dropdown').selectric();
	</script>
	<script>
		(function () {
			var $form = $('.lets-talk-form');
			var data = {
				fullName: '',
				email: '',
				phone: '',
				country: '',
				message: ''
			};
			var feedbackTimeout = null;
			var feedbackTime = 3000;
			run();

			function run() {
				attachEvents();
			}

			function attachEvents() {
				$form.submit(sendMessage);
				$('.lets-talk-trigger').click(showForm);
				$('.lets-talk-cancel').click(hideForm);
			}

			function sendMessage(e) {
				var $form = $(this);
				disableSubmit($form);
				collectData($form);
				submitData(e, $form);
			}

			function collectData($form) {
				data.fullName = $form.find('.full-name').val();
				data.email = $form.find('.email').val();
				data.phone = $form.find('.phone').val();
				data.country = $form.find('.country').val();
				data.message = $form.find('.message').val();
			}

			function submitData(e, $form) {
				e.preventDefault();
				console.log(data)
				$.ajax({
					url: '/',
					method: 'POST',
					data: data,
					error: function () {
						showFeedback(false, $form);
					},
					success: function () {
						showFeedback(true, $form);
					}
				});
			}

			function disableSubmit($form) {
				$form.find('.lets-talk-submit').attr('disabled', 'disabled');
			}

			function enableSubmit($form) {
				$form.find('.lets-talk-submit').removeAttr('disabled');
			}

			function clearContactForm() {
				$form.find('.full-name').val('');
				$form.find('.email').val('');
				$form.find('.phone').val('');
				$form.find('.country').val('');
				$form.find('.message').val('');
			}

			function showFeedback(isSuccess, $form) {
				if(feedbackTimeout) clearTimeout(feedbackTimeout);
				var $feedback = $form.find('.feedback');
				if(isSuccess) {
					$feedback.text('Your message is sent, we\'ll get back to you soon.');
				}
				else {
					$feedback.text('Your message is not received, please contact us later.');
				}

				feedbackTimeout = setTimeout(function () {
					$feedback.text('');
					enableSubmit($form);
					clearContactForm($form);
					hideForm($form);
				}, feedbackTime);
			}

			function showForm() {
				$(this).closest('.lets-talk-wrapper').find('.lets-talk-form').addClass('active');
			}

			function hideForm($form) {
				if($form.length)
					$form.removeClass('active');
				else
					$(this).closest('.lets-talk-wrapper').find('.lets-talk-form').removeClass('active');
			}
		})();
	</script>
</body>
</html>