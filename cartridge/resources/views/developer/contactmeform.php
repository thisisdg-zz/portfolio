<div class="contact-list">
	<h1 class="reduce-heading-font mb-0"><p class="custom-bullet">3</p>Contact Me Now<span class= "drop-down-arrow-open"><i class="fa fa-chevron-down"></i></span></h1>
	<div class="needed-while-hiding form-container col-xl-5 col-md-6 mol-lg-7 col-sm-8 margin-0-auto">
		<form method ="POST" action = "{{ action('AllFormsActions@contactForm') }}">
			<div class="form-field p-b-md">
				<input name="name" type = "text" placeholder = "Name" required/>
			</div>
			<div class="form-field p-b-md">
				<input name="email" type = "email" placeholder = "E-mail" pattern = "[A-Za-z0-9\_\.\-\+]@[A-Za-z0-9]+(\.[A-Za-z]){1,3}" required/>
			</div>
			<div class="form-field p-b-md">
				<input name = "subject" type = "text" placeholder = "Subject" required/>
			</div>
			<div class="form-field">
				<textarea rows="12" columns="50" name="message" placeholder="Enter your text here"></textarea>
			</div>
			<div class="form-field">
				<button class = "submit-button" type = "submit">Submit</button>
			</div>
		</form>
	</div>
</div>