(function ($w) {
	var feedbackTimeout = null;
	var feedbackTime = 3000;
	var isMobile = false;
	var data = {
		fullName: '',
		email: '',
		phoneNumber: '',
		country: ''
	};
	var $aside = $('.aside');
	var $footer = $('.footer');
	var $subscribeBtn = $('.subscribe-newsletter-btn');
	run();

	function run() {
		attachEvents();
	}

	function attachEvents() {
		$('.component-newsletter').submit(subscribeToNewsletter);
	}

	function subscribeToNewsletter(e) {
		e.preventDefault();
		setIsMobile();
		collectData();
		processData(e);
	}

	function setIsMobile() {
		isMobile = $w.width() < 768 ? true : false;
	}

	function collectData() {
		var fullName = '';
		var email = '';
		var phoneNumber = '';
		var country = '';
		if(isMobile) {
			fullName = $footer.find('.full-name').val();
			email = $footer.find('.email').val();
			phoneNumber = $footer.find('.phone-number').val();
			country = $footer.find('.country').val();
		}
		else {
			fullName = $footer.find('.full-name').val();
			email = $footer.find('.email').val();
			phoneNumber = $footer.find('.phone-number').val();
			country = $footer.find('.country').val();
		}
		data.fullAmount = fullName;
		data.firstPayment = email;
		data.loanAmount = phoneNumber;
		data.interestRate = country;
	}

	function processData(e) {
		e.preventDefault();
		disableSubmit();
		$.ajax({
			url: '/',
			method: 'POST',
			data: data,
			error: function () {
				showFeedback(false);
			},
			success: function () {
				showFeedback(true);
			}
		});
	}

	function disableSubmit() {
		$subscribeBtn.attr('disabled', 'disabled');
	}

	function enableSubmit() {
		$subscribeBtn.removeAttr('disabled');
	}

	function clearFields() {
		$('.full-name').val('');
		$('.email').val('');
		$('.phone-number').val('');
		$('.country').val('');
	}

	function hideComponent() {
		$('.component-newsletter.active .component-header').click();
	}

	function showFeedback(isSuccess) {
		var $footerFeedback = $footer.find('.feedback');
		var $asideFeedback = $aside.find('.feedback');
		if(feedbackTimeout) clearTimeout(feedbackTimeout);

		var msg = isSuccess ? 'You are now subscribed to our newsletter' : 'failed to subscribe you to our newsletter, please try again later';
		if(isMobile)
			$footerFeedback.text(msg);
		else
			$asideFeedback.text(msg);

		feedbackTimeout = setTimeout(function () {
			$footerFeedback.text('');
			$asideFeedback.text('');
			clearFields();
			enableSubmit();
			hideComponent();
		}, feedbackTime);
	}

})($(window));