<?php get_header(); ?>

<main>

	<div class="banner">

		<div class="container">

			<div class="row">

				<div class="col-lg-12">

					<h1 class="title"><?php echo $post->post_title; ?></h1>

				</div>

			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12">

				<article>

					<div class="row">

						<div class="col-md-12 col-lg-8 order-2 order-lg-1">

							<form id="contact">

								<div class="mb-3">

									<label for="fullName" class="form-label">Full Name<sup>*</sup></label>
									<input type="text" id="fullName" name="fullName" v-model="fullName" class="form-control" required>

								</div>

								<div class="mb-3">

									<label for="company" class="form-label">Company<sup>*</sup></label>
									<input type="text" id="company" name="company" v-model="company" class="form-control" required>

								</div>

								<div class="mb-3">


									<div class="row">

										<div class="col col-lg-6">

											<div class="form-group">
												<label for="emailAddress" class="form-label">Email Address<sup>*</sup></label>
												<input type="email" id="emailAddress" name="emailAddress" v-model="emailAddress" class="form-control" required>
											</div>

										</div>

										<div class="col col-lg-6">

											<div class="form-group">
												<label for="phoneNumber" class="form-label">Phone Number<sup>*</sup></label>
												<input type="tel" id="phoneNumber" name="phoneNumber" v-model="phoneNumber" class="form-control" required>
											</div>

										</div>

									</div>

								</div>

								<div class="mb-3">

									<label for="message" class="form-label">Message<sup>*</sup></label>
									<textarea id="message" name="message" rows="5" class="form-control" v-model="message" required></textarea>

								</div>

								<div v-if="alert != null" class="alert text-center mb-3" v-bind:class="[alert.isSuccess ? 'alert-success' : 'alert-danger']" v-html="alert.message" role="alert"></div>

								<button type="submit" v-on:click="submitMessage" class="btn btn-primary">Submit</button>

							</form>

						</div>

						<div class="col-md-12 col-lg-4 order-1 order-lg-2 mb-4">

							<div class="card">

								<div class="card-body">

									<h5 class="card-title">Let's Connect</h5>
									<div class="card-text">
										<ul class="list-group list-group-flush">
											<li class="list-group-item">
												<i class="fa-brands fa-linkedin me-2"></i>
												<a href="https://www.linkedin.com/company/korbaconsulting" target="_blank">linkedin.com/company/korbaconsulting</a>
											</li>
											<li class="list-group-item">
												<i class="fa-brands fa-twitter me-2"></i>
												<a href="https://twitter.com/korbaconsulting" target="_blank">twitter.com/korbaconsulting</a>
											</li>
											<li class="list-group-item">
												<i class="fas fa-envelope me-2"></i>
												<a href="mailto:<?php echo DEFAULT_EMAIL_ADDRESS; ?>"><?php echo DEFAULT_EMAIL_ADDRESS; ?></a>
											</li>
											<li class="list-group-item">
												<i class="fas fa-phone me-2"></i>
												<a href="tel:+13127722642">312.772.2642</a>
											</li>
										</ul>
									</div>
									
								</div>
								
							</div>

						</div>

					</div>

				</article>

			</div>

		</div>

	</div>

</main>

<script defer src="https://www.google.com/recaptcha/api.js?render=<?php echo RECAPTCHA_SITE_KEY; ?>"></script>
<script>
Vue.createApp({

	data () {

		return {

			fullName: '',
			company: '',
			emailAddress: '',
			phoneNumber: '',
			message: '',
			alert: null
		}
	},

	methods: {

		submitMessage (event) {

			event.preventDefault();

			grecaptcha.ready(() => {

				grecaptcha.execute('<?php echo RECAPTCHA_SITE_KEY; ?>', {
					action: 'submit'
				}).then((token) => {

					axios.post('/wp-json/forms/contact', {
						fullName: this.fullName,
						company: this.company,
						emailAddress: this.emailAddress,
						phoneNumber: this.phoneNumber,
						message: this.message,
						token: token
					})
					.then((response) => {

						this.fullName = '';
						this.company = '';
						this.emailAddress = '';
						this.phoneNumber = '';
						this.message = '';

						this.alert = {
							isSuccess: true,
							message: 'Your message was successfully sent.'
						};
					})
					.catch((error) => {

						this.alert = {
							isSuccess: false,
							message: 'There was an error sending your message. Please contact <strong><a href="mailto:<?php echo DEFAULT_EMAIL_ADDRESS; ?>"><?php echo DEFAULT_EMAIL_ADDRESS; ?></a></strong> if your message is urgent.'
						};
					});
				});
			});
		}
	}
}).mount('#contact');
</script>

<?php get_footer(); ?>
