
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='css/stylenew.css' type='text/css' media='all' />
    <link rel="stylesheet"
          href="css/style.css">
 <meta charset="utf-8">
    <title>Simple HTML Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

    #row1{
        padding-left: 20%;
        padding-bottom: 10px;
    }

.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%;
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
    padding-left: 30px;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.form {
  background-color:lightgray;
  padding: 5px 20px 15px 20px;
  border: 1px solid grey;
  border-radius: 3px;
    width: 50%;
 padding-left: 50px
}
    

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.button {
  background-color: orange;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 20%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}


a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
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

<div class="row" id="row1">
  <div class="col-75">
    <div class="form" style="width:75%;">
      <form action="success.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Customer Address</h3>
            <label for="fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="firstname" name="firstname" placeholder="Susan"  pattern="[A-Za-z]{1,50}" required="required">
            <label for="fname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="lastname" name="lastname" placeholder="gao"  pattern="[A-Za-z]{1,50}" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="susangao@gmail.com" required="required">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="14-400 wilson avenue">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Kitchener">

            
                <label for="provience">Provience</label>
                <input type="text" id="provience" name="provience" placeholder="ON">
          
             
               
              </div>
           

          <div class="col-50">
            <h3>Payment</h3>
            
            <p><label for="">Mode of payment: </label><input type="radio" name="payment" value="debit" required="required"> Debit <input type="radio" name="payment" value="credit"> Credit</p>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Susan Gao" pattern="[A-Za-z]{1,50}" required="required">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" pattern="[0-9]{16,16}" required="required">
            
            <div class="row">
              
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2021">
          
          
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="payment" placeholder="352" required="required" pattern="[0-9]{3,3}">
            
            </div>
          </div>
          
        </div>
       
        <input type="submit" value="Checkout" name="submit" class="button" href="thanks.php">
        
      </form>

    </div>
  </div>
    </div>
   
</body>
    
    
    
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
          
</html>
