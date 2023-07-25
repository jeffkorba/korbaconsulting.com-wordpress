<?php
get_header();

if (isset($_POST['fullName']) && isset($_POST['emailAddress']) && isset($_POST['phoneNumber']) && isset($_POST['message'])) {

	$to = DEFAULT_EMAIL_ADDRESS;
	$subject = '[Auto-Notification] New Message';
	$message = 'A new message has been submitted through the KorbaConsulting.com contact form:' . "\r\n\r\n";
	$message .= 'Full Name: ' . $_POST['fullName'] . "\r\n";
	$message .= 'Company: ' . $_POST['companyName'] . "\r\n";
	$message .= 'Email Address: ' . $_POST['emailAddress'] . "\r\n";
	$message .= 'Phone Number: ' . $_POST['phoneNumber'] . "\r\n";
	$message .= 'Message: ' . $_POST['message'];

	$response = wp_mail($to, $subject, $message);
}

the_post();
?>

<main>

	<div class="banner">

		<div class="container">

			<div class="row">

				<div class="col-lg-12">

					<h1 class="title"><?php the_title(); ?></h1>

				</div>

			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12">

				<?php
				if (isset($response)) {
					if ($response) {
				?>
				<div class="alert alert-success text-center" role="alert">
					Your message was successfully sent.
				</div>
				<?php
					}
					else {
				?>
				<div class="alert alert-danger text-center" role="alert">
					There was an error sending your message. Please contact <strong><a href="mailto:<?php echo DEFAULT_EMAIL_ADDRESS; ?>"><?php echo DEFAULT_EMAIL_ADDRESS; ?></a></strong> if your message is urgent.
				</div>
				<?php
					}
				}
				?>

				<article>

					<div class="row">

						<div class="col-md-12 col-lg-8 order-2 order-lg-1">

							<form action="" method="post">

								<div class="mb-3">
									<label for="fullName" class="form-label">Full Name<sup>*</sup></label>
									<input type="text" class="form-control" name="fullName" id="fullName" required>
								</div>

								<div class="mb-3">
									<label for="companyName" class="form-label">Company Name</label>
									<input type="text" class="form-control" name="companyName" id="companyName">
								</div>

								<div class="mb-3">
									<label for="emailAddress" class="form-label">Email Address<sup>*</sup></label>
									<input type="email" class="form-control" name="emailAddress" id="emailAddress" required>
								</div>

								<div class="mb-3">
									<label for="phoneNumber" class="form-label">Phone Number<sup>*</sup></label>
									<input type="tel" class="form-control" name="phoneNumber" id="phoneNumber" required>
								</div>

								<div class="mb-3">
									<label for="message" class="form-label">Message<sup>*</sup></label>
									<textarea class="form-control" name="message" id="message" rows="5" required></textarea>
								</div>

								<button type="submit" class="btn btn-primary">Submit</button>

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
												<a href="https://www.linkedin.com/company/korbaconsulting">linkedin.com/company/korbaconsulting</a>
											</li>
											<li class="list-group-item">
												<i class="fa-brands fa-twitter me-2"></i>
												<a href="https://twitter.com/korbaconsulting">twitter.com/korbaconsulting</a>
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

<?php get_footer(); ?>
