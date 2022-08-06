
<?php include_once("includes/config.php");?>



<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a href="index.php" class="navbar-brand"> <img class="logo" src="./images/lophenologo10.svg" height="100px"
          alt=""></a>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item  <?php echo ($page == "home" ? "active" : "")?>">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item  <?php echo ($page == "about" ? "active" : "")?>">
            <a href="about.php" class="nav-link">About Us</a>
          </li>

          <li class="nav-item  <?php echo ($page == "contact" ? "active" : "")?>">
            <a href="contact.php" class="nav-link">Contact</a>
          </li>
<!-- if user is logged in -->

<?php if (isset($_SESSION['user_id'])) {
  echo "
<li class='nav-item '>
<a href='#' class='nav-link'><em>Hey ". $_SESSION['name']."</em></a>
</li>
<li class='nav-item mr-4 '>
        <p><a href='signout.php' class='btn btn-outline'>sign out</a></p>

        </li>";}//end of if
        else{ 
          echo "<li class='nav-item mr-4 '>
          <p><a href='signin.php' class='btn btn-outline'>sign in</a></p>

          </li>

         

          <li class='nav-item '>
          <p><a href='register.php' class='btn btn-colour-1'>register</a></p>

          </li>";}?>
 
        </ul>
</div>
</nav>