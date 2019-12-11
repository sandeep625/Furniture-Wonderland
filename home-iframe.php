<?php



?>


<html>
<title>Furniture Wonderland</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<head>


	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	

    </head>
<body>
     
	    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="home.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
			  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Shop<span class="sr-only">(current)</span></a>
                </li>
				
                <li class="nav-item">
                    <a class="nav-link" href="cart.php"> Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="checkout.php">Checkout</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="contactUs.php">Contact Us</a>
                </li>
            </ul>
        </div>
   
	    <div class="cart_div">
             <a href="cart.php"><img class='img-responsive' src="cart-icon.png" /> Cart<span>
                <?php $cart_count=''; echo $cart_count; ?></span></a> 
        </div> </nav>
    
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
	<!-- End WOWSlider.com BODY section -->

    </div>

    <main role="main" class="inner cover">
            <br>
        <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Make your house a dream house</h5>
        <p class="card-text"><p>
No one can deny that shopping for furniture in a physical store is pretty satisfying—you get to sit on tons of sofas, try out beds to your heart's content, and curl up in a bunch of different chairs to help you find exactly the right one for you. But in terms of selection, the internet definitely has the brick-and-mortar shopping experience beat. I mean, online, you have pretty much every store and style you can imagine at your disposal with just a few clicks. You may not be able to test out a couch yourself, but you can read reviews, and you can search for the precise item you want, narrowed down by your price range.

But with ALL the options out there, shopping for furniture online can be overwhelming. These online stores—from shops you may not have heard of, to brands you already know and love—make it easy for you, with tons of options in just about every style and at varying prices.</p>
        <a href="index.php" class="btn btn-primary">Shop With Us</a>
      </div>
    </div>
  </div>
  
  </div>
</div>
    
    </main>
</body>

</html>
