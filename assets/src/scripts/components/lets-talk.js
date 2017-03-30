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