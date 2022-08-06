<?php include('includes/config.php');


 // set error message to empty; default no error condition
// check if the user submit the form
if (isset($_POST['signin'])) {
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link,$_POST['password']);
    
	// validations
	if ($email == "" || $password == "" ) {
	  
	}
	else {	
	// check for valid email and password
	$query = "SELECT * FROM users WHERE email='$email' && password='$password' ";
	$result = mysqli_query($link, $query); // execute the SQL 
	if ($row = mysqli_fetch_array($result)) {
	   // sign in is successful, set sessions 
	   $_SESSION['user_id'] = $row['user_id'];
	   $_SESSION['email'] = $row['email'];
	   $_SESSION['name'] = $row['name'];
	   $_SESSION['role'] = $row['role'];
		 $_SESSION['status'] = $row['status'];
	   // check for admin member, redirect to admin area
	   if ($_SESSION['role'] == 10) {
			 //echo $_SESSION['user_id'].$_SESSION['role'];
	      header("Location: admin/");
		 }
	   else {
	      // check if $_SESSION['return_page'] is set
		  if (isset($_SESSION['return_page'])) {
			header("Location: ".$_SESSION['return_page']);
		  } // end of if
		
		elseif ($_SESSION['status'] == 0){
			//blocked user check
			session_destroy();
			header("Location: blocked.php");
		}
		  else {
			header("Location: index.php");
		  }
	   } // end of else
	}

    } // end of else
} // end of if

?>
<?php
 include_once("includes/header.php");
 include_once("includes/nav.php")?>
<section id="register ">

		<div class="container my-5">
			
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-12">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h2>LOGIN</h2>
						
                  <hr class="hr">
							
							
								
									<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="post" id="login" name="loginForm" class="loginForm" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-12">
                        <label>Email</label>
												<div class="form-group">
												<input type="text"  name="email" id="your_email" placeholder="Email Address"
												required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"
												class="form-control">
          
												</div>
											</div>
                    
											<div class="col-md-12"> 
                      <label>Password</label>
												<div class="form-group">
													<input type="password" name="password" id="password" placeholder="Password"
													class="form-control input-text" required>
         
												</div>
											</div>

				

                    
							
                     
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Sign in" class="btn btn-outline" name="signin">
                          <p class="text-muted text-sm">Dont have an account? <a href="register.php">Register here</a></p>
												
                        
                    
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