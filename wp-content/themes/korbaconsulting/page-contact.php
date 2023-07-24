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

						<div class="col-md-12 col-lg-8 order-2 order-lg-1">

							<form>

								<div class="mb-3">
									<label for="fullName" class="form-label">Full Name<sup>*</sup></label>
									<input type="text" class="form-control" id="fullName">
								</div>

								<div class="mb-3">
									<label for="companyName" class="form-label">Company Name<sup>*</sup></label>
									<input type="text" class="form-control" id="companyName">
								</div>

								<div class="mb-3">
									<label for="emailAddress" class="form-label">Email Address<sup>*</sup></label>
									<input type="email" class="form-control" id="emailAddress">
								</div>

								<div class="mb-3">
									<label for="phoneNumber" class="form-label">Phone Number<sup>*</sup></label>
									<input type="tel" class="form-control" id="phoneNumber">
								</div>

								<div class="mb-3">
									<label for="message" class="form-label">Message<sup>*</sup></label>
									<textarea class="form-control" id="message" rows="3"></textarea>
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
												<a href="mailto:contact@korbaconsulting.com">contact@korbaconsulting.com</a>
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
