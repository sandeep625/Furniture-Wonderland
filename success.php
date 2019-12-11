<html>
    <head>
            <title>Your Choice</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel='stylesheet' href='css/stylenew.css' type='text/css' media='all' />
        
    </head>
    <body>
        <style>
            #shop{
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
             <a href="cart.php"><img class='img-responsive' src="cart-icon.png" /> Cart<span>
                <?php $cart_count=''; echo $cart_count; ?></span></a> 
        </div> </nav>

      
 <div style=text-align:center> <h3 style="margin-top:140px;">Congratulations!!!!! <br>
     Your order has been placed.<br>
     Thanks for shopping with our store.</h3>
    <h3>Your Order has been placed</h3>
     <a href="inventory.php" class="btn btn-primary" id="shop">Shop more</a>
     </div>
        
</body>
        </html>