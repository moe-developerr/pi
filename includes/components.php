<div class="components-container">
	<div class="component component-home">
		<header class="component-header">
			<div class="component-title">Find Your Home</div>
			<div class="component-icon show-icon">
				<i class="fa fa-search" aria-hidden="true"></i>
			</div>
			<div class="component-icon hide-icon">
				<i class="fa fa-close" aria-hidden="true"></i>
			</div>
		</header>
		<ul class="component-list">
			<li class="component-item">
				<label for="location" class="component-label">Location</label>
				<select name="" class="component-select selectric-dropdown location">
					<option value="All">All</option>
					<option value="Beirut">Beirut</option>
					<option value="Hazmieh">Hazmieh</option>
				</select>
			</li>
			<li class="component-item">
				<label for="status" class="component-label">Status</label>
				<select name="" class="component-select selectric-dropdown status">
					<option value="Completed Projects">Completed Projects</option>
					<option value="Under Construction">Under Construction</option>
				</select>
			</li>
			<li class="component-item price-range">
				<label for="status" class="component-label">Price range in dollar</label>
				<div class="price-slider-range slider-range"></div>
				<span class="slider-range-start price-slider-start"></span>
				<span class="slider-range-end price-slider-end"></span>
			</li>
			<li class="component-item area-range">
				<label for="status" class="component-label">Area in square meter</label>
				<div class="area-slider-range slider-range"></div>
				<span class="slider-range-start area-slider-start"></span>
				<span class="slider-range-end area-slider-end"></span>
			</li>
			<li class="component-footer component-element-border-top component-item">
				<div class="component-submit find-home-btn">
					<span class="component-footer-title">Search</span>
					<i class="component-footer-icon fa fa-search" aria-hidden="true"></i>
				</div>
			</li>
		</ul>
	</div>
	
	<div class="component component-home">
		<header class="component-header">
			<div class="component-title">Loan Calculator</div>
			<div class="component-icon show-icon">
				<i class="fa fa-calculator" aria-hidden="true"></i>
			</div>
			<div class="component-icon hide-icon">
				<i class="fa fa-close" aria-hidden="true"></i>
			</div>
		</header>
		<ul class="component-list">
			<li class="component-item">
				<label for="location" class="component-label">Full amount <span class="light-blue-l-10-c">in US Dollar</span></label>
				<input type="text" class="component-input full-amount">
			</li>
			<li class="component-item">
				<label for="location" class="component-label">First payment <span class="light-blue-l-10-c">min 20%</span></label>
				<input type="text" class="component-input first-payment">
			</li>
			<li class="component-item">
				<label for="location" class="component-label">Loan amount</label>
				<input type="text" class="component-input loan-amount">
			</li>
			<li class="component-item">
				<label for="location" class="component-label">Interest rate <span class="light-blue-l-10-c">in %</span></label>
				<input type="text" class="component-input interest-rate">
			</li>
			<li class="component-item">
				<label for="location" class="component-label">Loan period</label>
				<select name="" class="component-select selectric-dropdown loan-period">
					<option value="10">10 years</option>
					<option value="15">15 years</option>
					<option value="20">20 years</option>
				</select>
			</li>
			<li class="component-item">
				<label for="location" class="component-label">Monthly bill <span class="light-blue-l-10-c">in US Dollar</span></label>
				<input type="text" class="component-input monthly-bill" readonly="readonly">
			</li>
			<li class="white-c component-item"><a href="#" class="white-c">This is an approximate estimation, Click to to know more abourt the bank facilities</a></li>
			<li class="component-footer component-element-border-top component-item">
				<div class="component-submit calculate-loan-btn">
					<span class="component-footer-title">Calculate</span>
					<i class="component-footer-icon fa fa-calculator" aria-hidden="true"></i>
				</div>
			</li>
		</ul>
	</div>
	
	<form class="component component-newsletter">
		<header class="component-header">
			<div class="component-title">Our Newsletter</div>
			<div class="component-icon show-icon">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
			</div>
			<div class="component-icon hide-icon">
				<i class="fa fa-close" aria-hidden="true"></i>
			</div>
		</header>
		<ul class="component-list">
			<li class="component-element-border-bottom white-c component-item p-b10">Add your email to receive our latest news offers</li>
			<li class="component-item">
				<label for="location" class="component-label">Full Name*</label>
				<input type="text" class="component-input full-name" required>
			</li>
			<li class="component-item">
				<label for="location" class="component-label">Email *</label>
				<input type="email" class="component-input email" required>
			</li>
			<li class="component-item">
				<label for="location" class="component-label">Phone Number</span></label>
				<input type="tel" class="component-input phone-number">
			</li>
			<li class="component-item">
				<label for="location" class="component-label">Country</label>
				<select name="" class="component-select selectric-dropdown country">
					<option value="Lebanon">Lebanon</option>
					<option value="Cyprus">Cyprus</option>
					<option value="Egypt">Egypt</option>
				</select>
			</li>
			<li>
				<div class="feedback"></div>
			</li>
			<li class="component-footer component-item">
				<button class="component-submit subscribe-newsletter-btn">
					<span class="component-footer-title">Subscribe</span>
					<i class="component-footer-icon fa fa-envelope-o" aria-hidden="true"></i>
				</button>
			</li>
		</ul>
	</form>
</div>