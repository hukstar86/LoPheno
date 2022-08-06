

<?php include_once("includes/config.php");?>
<?php include_once("includes/header.php");?>
<?php include_once("includes/nav.php");?>


<section class="availability">
		<div class="container my-3">
			
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h2>CHECK AVAILABILITY</h2>
									<p class="mb-4">We will reply within 24 hours</p>
                  <hr class="hr">
								
							
							
							
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
                        <label>Name</label>
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
                        <label>Email</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
                      <label>Product Name</label>
												<div class="form-group">
													<input type="text" class="form-control" name="productName" id="productName" placeholder="productName">
												</div>
											</div>
											<div class="col-md-12 mb-3">

                      <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
  <input placeholder="Select date" type="text" id="example" class="form-control">
  <label for="example">Try me...</label>
  <i class="fas fa-calendar input-prefix" tabindex=0></i>
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
								<div class="info-wrap w-100 p-5 img" style="background-image: url(images/availability.jpg);">
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



<script> script type="text/javascript">
    $(document).ready(function() {
        $('#example').datepicker();
    });
</script>
<?php include_once("includes/footer.php");?>