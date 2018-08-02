<?php get_header(); the_post(); ?>

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

				<article>

					<div class="row">

						<div class="col-8">

							<form>

								<div class="form-group">
									<label for="fullName">Full Name<sup>*</sup></label>
									<input type="text" class="form-control" id="fullName">
								</div>

								<div class="form-group">
									<label for="companyName">Company Name<sup>*</sup></label>
									<input type="text" class="form-control" id="companyName">
								</div>

								<div class="form-group">
									<label for="emailAddress">Email Address<sup>*</sup></label>
									<input type="email" class="form-control" id="emailAddress">
								</div>

								<div class="form-group">
									<label for="phoneNumber">Phone Number<sup>*</sup></label>
									<input type="tel" class="form-control" id="phoneNumber">
								</div>

								<div class="form-group">
									<label for="message">Message<sup>*</sup></label>
									<textarea class="form-control" id="message" rows="3"></textarea>
								</div>

								<button type="submit" class="btn btn-secondary">Submit</button>

							</form>

						</div>

						<div class="col-4">

							<div class="card">
								<div class="card-body">
									<h6 class="card-title">Contact Us</h6>
									<div class="card-text">
										<i class="fas fa-envelope mr-2"></i> <a href="mailto:contact@korbaconsulting.com">contact@korbaconsulting.com</a><br />
										<i class="fas fa-phone mr-2"></i> 312.772.2642
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
