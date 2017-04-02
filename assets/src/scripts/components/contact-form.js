(function () {
	var $contactForm = $('.contact-form');
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
		$contactForm.submit(sendMessage);
	}

	function sendMessage(e) {
		disableSubmit();
		collectData();
		submitData(e);
	}

	function collectData() {
		data.fullName = $contactForm.find('.full-name').val();
		data.email = $contactForm.find('.email').val();
		data.phone = $contactForm.find('.phone').val();
		data.country = $contactForm.find('.country').val();
		data.message = $contactForm.find('.message').val();
	}

	function submitData(e) {
		e.preventDefault();
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
		$contactForm.find('.contact-form-submit').attr('disabled', 'disabled');
	}

	function enableSubmit() {
		$contactForm.find('.contact-form-submit').removeAttr('disabled');
	}

	function clearContactForm() {
		$contactForm.find('.full-name').val('');
		$contactForm.find('.email').val('');
		$contactForm.find('.phone').val('');
		$contactForm.find('.country').val('');
		$contactForm.find('.message').val('');
	}

	function showFeedback(isSuccess) {
		if(feedbackTimeout) clearTimeout(feedbackTimeout);
		var $feedback = $contactForm.find('.feedback');
		if(isSuccess) {
			$feedback.text('Your message is sent, we\'ll get back to you soon.');
		}
		else {
			$feedback.text('Your message is not received, please contact us later.');
		}

		feedbackTimeout = setTimeout(function () {
			$feedback.text('');
			enableSubmit();
			clearContactForm();
			placeholder.fix();
		}, feedbackTime);
	}
})();