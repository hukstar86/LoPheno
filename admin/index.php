<?php $page = "products"; ?>

<?php include_once("../includes/config.php");?>
<?php
// Check if Admin is not logged in //
if (!isset($_SESSION['user_id'])) {
	header("Location: ../signin_admin_required.php");
} 
if ($_SESSION['role'] == '') {
	header("Location: ../signin_admin_required.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  

    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    >  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      
    <!-- MY STYLESHEET -->
  <link rel="stylesheet" href="../css/style.css">
    

    <title>Lopheno Hire and Design</title>
    <script>
    function deleteProduct(productID) {
	  if (confirm("Are you sure you want to delete this product?")) {
	    window.location.href = "deleteProduct.php?ProdID=" + productID;
	  } // end of if
	} // end of function
</script>
  </head>
  <body>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a href="index.php" class="navbar-brand"> <img class="logo" src="../images/lophenologo10.svg" height="100px"
          alt=""></a>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item  <?php echo ($page == "products" ? "active" : "")?>">
            <a href="index.php" class="nav-link">Products</a>
          </li>
          <li class="nav-item  <?php echo ($page == "users" ? "active" : "")?>">
            <a href="users.php" class="nav-link">Users</a>
          </li>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">log Out</a>
          </li>

          <li class="nav-item">
            <a href="../index.php" class="nav-link">Visit Site</a>
          </li>
<!-- if user is logged in -->

<?php if (isset($_SESSION['user_id'])) {
  echo "
<li class='nav-item '>
<a href='#' class='nav-link'><em>Hey ". $_SESSION['name']."</em></a>
</li>";}?>
<li class='nav-item mr-4 '>
        <p><a href='addProduct.php' class='btn btn-outline'>Add Product</a></p>

        </li>
        </ul>
</div>
</nav>
<section id="products ">
</section>
<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-12">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h2>CURRENT PRODUCTS FOR HIRE</h2>
									
                  <hr class="hr">
                  
                  </div>
							</div>
              </div>
						</div>
				


<div class='container mt-4'>
           <table id='productTable'class='table table-striped'>
                <thead class='thead-dark'>
                <tr>
                <th>Image </th>
                <th>Title</th>
                <th class=".d-sm-none .d-md-block">Description</th>
                <th class=".d-sm-none .d-md-block">Price</th>
                <th>Edit</th>
                <th >Delete</th>

                 </tr>
                 </thead>
      
<?php
             $query = "SELECT * FROM products ORDER BY productID DESC";
         $result = mysqli_query($link, $query);


              echo "<tbody>";


              while($row = mysqli_fetch_array($result)){
                extract($row);
                echo "<tr align='left'>";
                echo "<td><img src='../product_images/" .$product_image. "' width='100'></td>"; 
                echo "<td>" . $row['name'] . "</td>";
              	echo "<td class='.d-sm-none .d-md-block'>" . $row['description'] . "</td>";
              	echo "<td  class='.d-sm-none .d-md-block'>" . $row['price'] . "</td>";
              


               	echo "<td>" . "<a href='editProduct.php?ProdID=" . $productID . "'><div class='btn btn-secondary mr-2'>" . 
                 " <i class='fas fa-edit'></i></div></a>" . "</td>";
              
       
                  echo "<td>" . "<a href='javascript:deleteProduct(" . $productID . ")'><div class='btn btn-secondary mr-2'>" . 
                  " <i class='fas fa-trash-alt'></i> </div></a>" . "</td>";
                
        

             
               echo "<tr>";
              }
             echo  "</tbody>";
           echo "</table>";
           ?>
						
									
								
            
				</div>
			</div>
		</div>
	</section>

<div class="footer-dark">
        <footer>
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="col-md-3 d-flex justify-content-center mb-4">
              <img class="logo" src="../images/lophenologo12.svg" height="150px"
          alt="">
       
            </div>
            </div>
          </div>
            <div class="container">
                <div class="row">
                  
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Pages</h3>
                      
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Hire Collection</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Here From Us</h3>
                        <ul>
                            <li><a href="register.php">Sign Up</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="admin/">Admin</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6  justify-content-center">
                        <h3>Follow us on Instagram</h3>
                        <img class="logo " src="../images/insta1.jpg" height="100px"
          alt="">
          <img class="logo " src="../images/insta2.jpg" height="100px"
          alt="">
          <img class="logo " src="../images/insta3.jpg" height="100px"
          alt="">
                    </div>
                    <div class="col item social mt-5">
                      <a href="#"><i class="fab fa-facebook"></i></a>

                    <a href="#"> <i class="fab fa-snapchat"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a></div>
                </div>
                <p class="copyright">Stephen Morrison Design  © 2021</p>
            </div>
        </footer>
    </div>
    
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
 

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>