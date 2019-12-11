<?php



?>


<html>
<title>Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="css/style.css">


<head>


	<!-- Start WOWSlider.com for HEAD section --> 
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com for HEAD section -->
	

    </head>
<body>
    <style>
        #shop1{
            background-color: orange;
        }
    </style>
     
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
             <a href="cart.php" id="cart"><img class='img-responsive' src="cart-icon.png" /> Cart<span>
                <?php $cart_count=''; echo $cart_count; ?></span></a> 
        </div> </nav>
    <h1 class="header"> Furniture Wonderland</h1>
    
    <div>
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/dinning_table.jpg" alt="furniture" title="" id=""/></li>
		<li><img src="data0/images/kind_bed.jpg" alt="furniture" title="" id="wows0_1"/></li>
		<li><img src="data0/images/office_chair.jpg" alt="furniture" title="" id="wows0_2"/></li>
		<li><a href="http://wowslider.com"><img src="data0/images/sofa.jpg" alt="http://wowslider.com/" title="" id="wows0_3"/></a></li>
		<li><img src="data0/images/outdoor.jpg" alt="furniture" title="" id="wows0_4"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="data0/tooltips/dinning_table.jpg" alt="furniture"/>1</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/kind_bed.jpg" alt="furniture"/>2</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/office_chair.jpg" alt="furniture"/>3</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/sofa.jpg" alt="furniture"/>4</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/outdoor.jpg" alt="furniture"/>5</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">bootstrap carousel</a> by WOWSlider.com v8.5</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com  for BODY section -->

    </div>

    <main role="main" class="inner cover">
            <br>
        <div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><strong>Make your house a dream house</strong></h5>
        <p class="card-text">
No one can deny that shopping for furniture in a physical store is pretty satisfying—you get to sit on tons of sofas, try out beds to your heart's content, and curl up in a bunch of different chairs to help you find exactly the right one for you. But in terms of selection, the internet definitely has the brick-and-mortar shopping experience beat. I mean, online, you have pretty much every store and style you can imagine at your disposal with just a few clicks. You may not be able to test out a couch yourself, but you can read reviews, and you can search for the precise item you want, narrowed down by your price range.

But with ALL the options out there, shopping for furniture online can be overwhelming. These online stores—from shops you may not have heard of, to brands you already know and love—make it easy for you, with tons of options in just about every style and at varying prices.
          The living or great room will likely be the main sitting area in your home so it’s important to choose comfortable and practical furniture. Your main pieces may include a sofa and loveseat or sectional, accent chairs, recliners or a chaise lounge. If you have young children, leather may be easier to clean than fabric and will retain its shape longer.  If you and your family are movie buffs, consider buying theatre seating that will movie night at home feel like a night at the movies. Be sure to have a coffee and side table for resting drinks on and ample lighting and lamps for tasks such as reading, writing or watching television. Your television stand should have plenty of storage space for electronic equipment, DVDs, CDs and board games. A bookshelf is a wonderful addition that can store your favourite books, children’s games and family pictures.</p>
        <a href="inventory.php" class="btn btn-primary" id="shop1">Shop</a>
      </div>
    </div>
  </div>
  
  </div>

    
    </main>
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
