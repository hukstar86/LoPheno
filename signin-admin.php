<?php include_once("includes/config.php");?>
<?php include_once("includes/header.php");?>
<?php include_once("includes/nav.php")?>
<section id="signin-required ">

		<div class="container my-5">
			
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-12">
								<div class="contact-wrap w-100 p-md-5 p-4">
                <h2>Restricted Access</h2>
						
            <hr class="hr">
									<p class="mb-4"><em>If you have access to this area of the website you can follow the link below, or be redirected back to home page </em></p>
                  
                  <button type="button" onclick="window.location.href = 'index.php';" class="btn btn-outline">Home</button>
	<button type="button" onclick="window.location.href = 'signin.php';" class="btn btn-primary" >Login</button>
								
							
                  
								
							
								</div>
							</div>
				
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



<?php include_once("includes/footer.php");?>