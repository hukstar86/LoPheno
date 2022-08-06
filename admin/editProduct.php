<?php
 include_once("../includes/config.php");
include '../library/image-creation.php';
// retreives productID from URL
$productID = mysqli_real_escape_string($link, $_GET['ProdID']);


// check if submit button is clicked
if (isset($_POST['editProduct'])) {

$categoryID = mysqli_real_escape_string($link, $_POST['productCategory']);
$name = mysqli_real_escape_string($link,$_POST['productName']);
$desc = mysqli_real_escape_string($link,$_POST['productDesc']);
$price = mysqli_real_escape_string($link,$_POST['productPrice']);
//image file
$imgName = $_FILES['fileImage']['name'];
$tmpName = $_FILES['fileImage']['tmp_name'];
$ext = strrchr($imgName, ".");
$newName = md5(rand()*time()).$ext;
$imgPath = PRODUCT_IMG_DIR . $newName;
createThumbnail($tmpName, $imgPath, THUMBNAIL_WIDTH); 

// check if the image is updated
if ($tmpName != "") {
   $query = "UPDATE products SET name='$name', description='$desc', categoryID='$categoryID', price='$price', product_image='$newName' WHERE productID='$productID' ";
}
else {
   $query = "UPDATE products SET name='$name', description='$desc', categoryID='$categoryID', price='$price' WHERE productID='$productID' ";
}

mysqli_query($link, $query); // execute the SQL 
header("Location: index.php"); 
} // end of if statement

// locate the product record from database
$query = "SELECT * FROM products WHERE productID='$productID' ";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
extract($row);
$categoryID_F = $categoryID ; // for select..option categor
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

</head>

<body>





<section id="products ">
</section>
<section class="ftco-section">
		<div class="container mb-5">
			
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-12">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h2>EDIT PRODUCT</h2>
									
                  <hr class="hr">
     
        <form method="post" enctype="multipart/form-data">
  	       <table border="0">
  		<tr>
  		    <td width="200">Product Category</td>
            <td width="500" align="left">
			<select name="productCategory">
  				<?php
				$query = "SELECT * FROM category";
				$result = mysqli_query($link, $query);
				while($row = mysqli_fetch_array($result)) {    
				extract($row);
				?>
				<option <?php if ($categoryID_F == $categoryID) echo "selected"; ?> value="<?php echo $categoryID; ?>"><?php echo $categoryName; ?></option>
				<?php
				} //end of while loop
				?>
			</select>		
            </td>
		 </tr>
		 <tr>
		    <td width="200">Product Name</td>
		    <td width="175" align="left">
				<input type="text" size="55" name="productName" value="<?php echo $name; ?>">
			</td>
		    </tr>
  		<tr>
		    <td width="200">Product Description</td>
		    <td width="500" align="left"><input type="text" size="55" name="productDesc" value="<?php echo $description; ?>"></td>
		</tr>
                <tr>
		    <td width="150">Product Image</td>
		    <td> <input name="fileImage" type="file"> <br>
			<!--
			<img src="<?php echo '../product-images/'.$product_image; ?>" alt="Photo" title="photo" width="300" />
			-->
		
			</td>
            </tr>
  		<tr>
		    <td width="200">Product Price</td>
		    <td width="500" align="left"><input type="text" size="55" name="productPrice" value="<?php echo $price; ?>"></td>
		 </tr>
  		<tr>

		  </tr>
		</table>
    
    <button id="backbutton" type="button" onclick="window.location.href = 'index.php';" class="btn btn-secondary ">Back</button>
	<button type="submit" class="btn btn-primary" value="Edit Product"name="editProduct">Save</button>
	<button id="resetButton" class="btn btn-light">Reset</button>
		   
	      </form>
        </div> 

        </div> 
		
        </div> 
		
        </div> 
		</div> 

		
        </div> 
		
        </div> 
      </section>
        <div id="footer">
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
    <script src="../js/script.js"></script>


</body>

</html>
