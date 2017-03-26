(function ($w) {
	var isMobile = false;
	var data = {
		fullAmount: 0,
		firstPayment: 0,
		loanAmount: 0,
		interestRate: 0,
		loanPeriod: 0
	};
	var result = 0;
	var $aside = $('.aside');
	var $footer = $('.footer');
	run();

	function run() {
		attachEvents();
	}

	function attachEvents() {
		$('.calculate-loan-btn').click(calculateLoan);
	}

	function calculateLoan() {
		setIsMobile();
		collectData();
		normalizeData();
		processData();
		showResult();
	}

	function setIsMobile() {
		isMobile = $w.width() < 768 ? true : false;
	}

	function collectData() {
		var fullAmount = 0;
		var firstPayment = 0;
		var loanAmount = 0;
		var interestRate = 0;
		var loanPeriod = 0;
		if(isMobile) {
			fullAmount = +$footer.find('.full-amount').val();
			firstPayment = +$footer.find('.first-payment').val();
			loanAmount = +$footer.find('.loan-amount').val();
			interestRate = +$footer.find('.interest-rate').val();
			loanPeriod = +$footer.find('.loan-period').val();
		}
		else {
			fullAmount = +$aside.find('.full-amount').val();
			firstPayment = +$aside.find('.first-payment').val();
			loanAmount = +$aside.find('.loan-amount').val();
			interestRate = +$aside.find('.interest-rate').val();
			loanPeriod = +$aside.find('.loan-period').val();
		}
		data.fullAmount = fullAmount;
		data.firstPayment = firstPayment;
		data.loanAmount = loanAmount;
		data.interestRate = interestRate;
		data.loanPeriod = loanPeriod;
	}

	function normalizeData() {
		// alter/validate data as u will
		var firstPaymentRatio = (data.firstPayment/data.fullAmount)*100;
		firstPaymentRatio = isNaN(firstPaymentRatio) ? 0 : firstPaymentRatio;
		data.firstPayment = firstPaymentRatio < 20 ? 20 : data.firstPayment;

		if(isMobile) {
			$footer.find('.first-payment').val(data.firstPayment);
		} 
		else {
			$aside.find('.first-payment').val(data.firstPayment);
		}
	}

	function processData() {
		result = data.fullAmount + data.firstPayment + data.loanAmount + data.interestRate + data.loanPeriod;
	}

	function showResult() {
		isMobile ? $footer.find('.monthly-bill').val(result) : $aside.find('.monthly-bill').val(result);
	}

})($(window));