<?php $page = "home"; ?>

<?php include_once("includes/config.php");?>
<?php include_once("includes/header.php");?>
<?php include_once("includes/nav.php");?>

  <!-- SHOWCASE SLIDER -->
  <section id="showcase mb-5">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
       
       
        </div>

        <div class="carousel-item carousel-image-2">
       
        </div>

        <div class="carousel-item carousel-image-3">
      
        </div>
      </div>

      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

<section id="welcome">
  <div class="container mt-5">
    <h1>Welcome to</h1>
    <span class="heading">Lopheno Hire and Design</span>
    <hr class="hr">
    <p class="p mt-4">From the smallest detail to the grandest event, Lopheno can take care of all the details. With a extensive range of products and over 16 years experience in the hospitality indrusty we have the knowledge and the products to make your event extremly memeriable whether you are planning a wedding, corporate event, birthday, bridal shower, engagement party, baby shower, ball, anniversary or any kind of party, Lopheno has an extensive range of hire items that cater to a large range of styles and events.
</p>
<br>
<p class="p mt-4">From the smallest detail to the grandest event, Lopheno can take care of all the details. With a extensive range of products and over 16 years experience in the hospitality indrusty we have the knowledge and the products to make your event extremly memeriable whether you are planning a wedding, corporate event, birthday, bridal shower, engagement party, baby shower, ball, anniversary or any kind of party, Lopheno has an extensive range of hire items that cater to a large range of styles and events.
</p>
    </div>
</section>

<section id="featured">
<div class="container text-left my-3 mt-5">
    <h2 class="font-weight-normal">FEATURED PRODUCTS</h2>
    <hr class="hr">
</div>
<div class="conatiner text-left my-3 mt-5">
  
    <div class="row mt-4">
        <div id="productCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card border-0">
                            <img class="img-fluid" src="./images/featured_1.jpg">
                            <div class="class-body text-center">
                              <h5 class="card-title mt-3 ">Boho Wedding Invitations</h5>
                              <p class="class-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, provident. </p>
                              <p><a href="availability.php" class="btn btn-outline">Reserve</a></p>
                        </div>
                    </div>
                </div>
   
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card border-0">
                            <img class="img-fluid" src="./images/featured_2.jpg">
                            <div class="class-body text-center">
                              <h5 class="card-title mt-3">Kids Tipi</h5>
                              <p class="class-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit veritatis obcaecati.</p>
                              <p><a href="availability.php" class="btn btn-outline">Reserve</a></p>
                            </div>
                        </div>
                    </div>
</div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card border-0">
                            <img class="img-fluid" src="./images/featured_3.jpg">
                            <div class="class-body text-center">
                              <h5 class="card-title mt-3">Boho Dinner Arrangment</h5>
                              <p class="class-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta ut voluptate illum aut, nam ipsum.</p>
                              <p><a href="availability.php" class="btn btn-outline">Reserve</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item justify-content-center">
                    <div class="col-md-4">
                        <div class="card border-0">
                            <img class="img-fluid" src="./images/featured_4.jpg">
                            <div class="class-body text-center">
                              <h5 class="class-title mt-3">
                               Antique Sofa
                              </h5>
                              <p class="class-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia minima error voluptatibus id quibusdam corporis!</p>
                              <p><a href="availability.php" class="btn btn-outline">Reserve</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev  justify-content-center" href="#productCarousel" role="button" data-slide="prev">
               
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next justify-content-center" href="#productCarousel" role="button" data-slide="next">
               
                <span class="sr-only">Next</span>
            </a>
            </div>
           
        </div>
  
    </div>
    </div>
</div>
</section>

<section id="SEARCH" class="container-fluid content-top-padding mt-5">
<div class="row justify-content-center pt-2">
    <div class="col-md-6  ">
      <h2>SEARCH</h2>
      <hr class="hr">
  <div class="justify-content-md-center text-center">
                    <form class="form-inline my-2 mx-auto ">
                        <input class="form-control mr-sm-2" type="text" placeholder="search" aria-label="Search" style="width: 700px;">
                     
                        <input type="submit" class="btn btn-outline w-50 mt-3 " value="Submit">
                    </form>
                    <p class="text-muted pt-2 text-center"> SEARCH OUR HIRE COLLECTION</P>
                </div>
                </div>
</div>

</section>


<section class="ftco-section">
  <div class="container">
   <div class="row">
   
   <div class="container text-left my-3 mt-5">
    <h2 class="font-weight-normal">HIRE COLLECTION</h2>
    <hr class="hr">
</div>
   
<div class="container py-5">
  <div class="row mt-4">
  <?php
            $sql = "SELECT * FROM products ORDER BY productID DESC";
        


$result = mysqli_query($link, $sql);
     while($row = mysqli_fetch_assoc($result)){
        extract($row);
        ?>
      <div class="col-md-4">
        <div class="card mt-3">

         			  	     
        <?php $Product_ID = $row['productID'];?>
        <?php $Product_image  = $row['product_image'];?>
          
        <?php echo "<img class='card-img-top'src='product_images/$Product_image'>";?>
        <div class="card-body">

               <h2 class="card-title align-items-center"> <?php echo $row['name'];?></h2>
               
             
              
              
               <p class="card-title align-items-center"> <?php echo "$"; echo number_format(($row['price'])) ;?></p>


            
    <!-- Button trigger modal -->
  
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#A<?php echo $productID;?>">
 View Details
</button>
<a href="availability.php" class="btn btn-outline">Reserve</a>
              
           
        <!-- </div> 
      </div> -->
    <!-- end of col-md-4 -->
   
   

  
  <!-- Modal -->
  
  
  <div class="modal fade" id="A<?php echo $productID;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="card-title align-items-center" >Product Details</Details></h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <?php echo "<img class='card-img-top'src='product_images/$Product_image'>";?>
        <h2 class="card-title align-items-center mt-2"> <?php echo $row ['name'];?></h3>
        <p class="card-text"> <?php echo $row['description'];?></p>
        <p class="card-title align-items-center"> <?php echo "$"; echo number_format(($row['price'])) ;?></p>

     
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
      
          </div>
    </div>
  </div>
</div>

    </div>
    </div>
   </div>
     
    <?php
    }  
    ?>

    
     </div>
     <!-- end of row -->
     </div>
    </section>
<section id="contact" class="container-fluid content-top-padding mt-5">
<div class="row justify-content-center my-5 pt-5">
    <div class="col-md-6 col-lg- ">
      <h2>CONTACT US</h2>
      <hr class="hr">
      <p>Subscribe to our letter and receive our free event planning guide, plus get first hand information about our new products.</p>

     
     

      <form action='' method="post">
        <div class="form-group mb-1">
          <label for="first-name">First name</label>
          <input type="text" name="first-name" id="firstName"
            class="form-control"
            value="">
          <span class="invalid-feedback">
          

          </span>
        </div>

        <div class="form-group mb-1">
          <label for="last-name">Last name</label>
          <input type="text" name="last-name" id="lastName"
            class="form-control"
            value="">
          <span class="invalid-feedback">
           
          </span>
        </div>

        <div class="form-group mb-3">
          <label for="email">Email</label>
          <input type="email" name="email" id="email"
            class="form-control"
            value="">
          <span class="invalid-feedback">
           
          </span>
        </div>

      

        <input type="submit" class="btn btn-outline w-100 mb-1" value="Submit">

      </form>
    </div>
  </div>
</div>

</section>
<?php include_once("includes/footer.php");?>

   
