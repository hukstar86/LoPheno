<?php $page = "contact"; ?>

<?php include_once("includes/config.php");?>
<?php include_once("includes/header.php");?>
<?php include_once("includes/nav.php");?>

<section id="contact-landing ">
</section>
<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h2>CONTACT US</h2>
									<p class="mb-4">We would love to hear from you</p>
                  <hr class="hr">
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<div class="row mb-4">
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text-muted">
							            <p><span>Address:</span> 14a Muritai Tce</p>
							          </div>
						          </div>
										</div>
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text-muted">
							            <p><span>Email:</span> <a href="mailto:info@yoursite.com" class="anchor">lopheno@gmail.com</a></p>
							          </div>
						          </div>
										</div>
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text-muted">
							            <p><span>Phone:</span> <a href="tel://1234567920">+64 21 722538</a></p>
							          </div>
						          </div>
										</div>
									</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Create a message here"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-outline">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
									<div class="w-100 social-media mt-5">
										<h3>Follow us here</h3>
										<p>
											<a href="#">Facebook</a>
											<a href="#">Twitter</a>
											<a href="#">Instagram</a>
										
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(images/contact-landing.jpg);">
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




<?php include_once("includes/footer.php");?>