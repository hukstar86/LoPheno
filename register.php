<?php include('includes/config.php');?>

<?php
$error = ""; // set error message to empty; default no error condition
// check if the user submit the form
if (isset($_POST['addMember'])) {
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $name = mysqli_real_escape_string($link,$_POST['name']);
    $password = mysqli_real_escape_string($link,$_POST['password']);
    $status = mysqli_real_escape_string($link,$_POST['status']);

    
	// validations
	if ($email == "" || $name == "" || $password == "" ) {
	   $error = "All field must be entered!"; // set error message
	}
	else {	
	// check for duplicated email
	$query = "SELECT * FROM users WHERE email='$email' ";
	$result = mysqli_query($link, $query); // execute the SQL 
	if ($row = mysqli_fetch_array($result)) {
	   $error = "Duplicated email, please try again!";
	}
	else {

    $query = "INSERT INTO users (name, email, password, status) VALUES ('$name', '$email', '$password', '1') "; 

    mysqli_query($link, $query); // execute the SQL 
    header("Location: register-success.php");
     } // end of else
    } // end of else
} // end of if

?>
<?php include_once("includes/header.php");?>
<?php include_once("includes/nav.php")?>
<section id="register ">

		<div class="container my-5">
			
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-12">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h2>REGISTER</h2>
									<p class="mb-4">Create a secure account for faster handling </p>
                  <hr class="hr">
								
								
									<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'  method="post" id="register" name="registerForm" class="registerForm" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-12">
                      <label>Name</label>
												<div class="form-group">
													<input type="username" class="form-control "  name="name" id="name" placeholder="User Name"	>
												
												</div>
											</div>

											<div class="col-md-12"> 
                      <label>Email</label>
												<div class="form-group">
													<input type="email" class="form-control"  name="email" id="email" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
												
												</div>
											</div>
											<div class="col-md-12">
                      <label>Password</label>
												<div class="form-group">
													<input type="password" name="password" id="password" placeholder="Password" class="form-control
												">
												 
												</div>
											</div>
                  
									
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" name="addMember" value="Sign Up" class="btn btn-outline">
													<div class="submitting "></div>
                          <div class="col mt-3 ml-0">
                          <p class="text-muted">Already have an account? <a href="login.php">Login here</a></p>
</div>
												</div>
											</div>
										</div>
									</form>
							
								</div>
							</div>
				
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



<?php include_once("includes/footer.php");?>