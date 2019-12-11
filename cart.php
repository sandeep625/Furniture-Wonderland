<?php

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		} 
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);// it removes the products from cart
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<html>
<head>
<title>Cart</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/stylenew.css' type='text/css' media='all' /> 
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.button {
  background-color: orange;
  border: none;
  color: white;
  padding: 8px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
justify-content: center;


}
</style>
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
<div style="width:700px; margin:50 auto;">
<div style="background-image: url(cart.jpg);">
<h2> Shopping Cart</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<span><?php echo $cart_count; ?></span>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>
    
<table class="table">
<tbody>
<tr>
<td></td>
<td>Product NAME</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>

<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".$product["price"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>	
    </div>
  <?php
  //if cart is empty
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; 

?>
</div>


<br /><br />
<button type='index' class="button" onClick="location.href='inventory.php'">Inventory</button>&nbsp;&nbsp;&nbsp;&nbsp;
<button type='Checkout' class="button" onClick="location.href='checkout.php'">Checkout</button><br><br><br><br><br><br><br><br>
</div>

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
   </body> 
</html>