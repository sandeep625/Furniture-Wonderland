<?php



?>


<html>
<title>Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="css/style.css">


<head>


	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	

    </head>
<body>
     
	      <nav id='navb' class="navbar navbar-expand-lg navbar-light  sticky-top">
        <a id="hom" class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
			 
			 
                <li class="nav-item active">
                    <a id="hom" class="nav-link" href="inventory.php">Shop<span class="sr-only">(current)</span></a>
                </li>
				
                <li class="nav-item">
                    <a id="hom" class="nav-link" href="cart.php"> Cart</a>
                </li>
                <li class="nav-item">
                    <a id="hom" class="nav-link" href="checkout.php">Checkout</a>
                </li>
                <li class="nav-item">
                    <a id="hom" class="nav-link" href="contact.php">Contact Us</a>
                </li>
				
				
            </ul>
        </div>
   
	    <div class="cart_div">
             <a href="cart.php"><img class='img-responsive' src="cart-icon.png" /> Cart<span>
                <?php $cart_count=''; echo $cart_count; ?></span></a> 
        </div> </nav>
    <h1 class="header"> Furniture Wonderland</h1>
    
    
        <h2 class="card-title" style="text-align=center">Contact Us</h2>
   
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2897.557702457808!2d-80.43841568450954!3d43.428066979129625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882bf4f578aa7ce3%3A0x94be9ef28840ee02!2sMarten's+Furniture+Wonderland!5e0!3m2!1sen!2sca!4v1531284106153" width="100%" height="400" frameborder="10px"  style="border: 0;" allowfullscreen=""></iframe>
    <div class="c1">
       <div style="text-align: center;"><span>Address: 71 Kingsbury Drive Kitchener, Ontario N2A 2L9, Canada</span></div>
<div style="text-align: center;">We are conveniently located just off King Street East in Kitchener near the Highway 8 Weber St. Exit. </div>
<div style="text-align: center;">We are wheelchair accessible with plenty of free parking close to the store.</div>

<div style="text-align: center;">Toll Free: 1-800-667-5898</div>
<div style="text-align: center;">Business Hours: Monday to Friday 10-9 Saturdays 10-6 Sundays 11-5</div>
        </div>

</body>
<!-- Footer -->
<footer id='foote' class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <!-- Form -->
        <form class="form-inline">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
            aria-label="Search">
          <i class="fas fa-search" aria-hidden="true"></i>
        </form>
        <!-- Form -->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <form class="input-group">
          <input type="text" class="form-control form-control-sm" placeholder="Your email"
            aria-label="Your email" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button id='btn-sign' class="" type="button">Sign up</button>
          </div>
        </form>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div id='copyright' class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> www.furniturewonderland.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>
