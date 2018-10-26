<?php include "header.php"; ?>


<h1>Your selected items!!!</h1>

<div class="basket">
    <title>Shopping basket</title>
<div class="basketitem">
        <div class="product">
    <img src="images/headphone.jpeg" width="200px" height="200px">
    </div>
    <div class="description">
    <span>Headphone</span><br>
        <span>Black</span>
    </div>
   <div class="basketquantity">
        <button class="basketbtn" type="button" name="button">
        <img src="images/minus.jpg" width="20px" height="20px"></button>   
        <input type="text" name="name" value="1">
         <button class="basketbtn" type="button" name="button">
        <img src="images/plus.jpg" width="20px" height="20px"></button>
            </div>
    <div class="totalprice">80EUR</div>
    </div>
    
<div class="basketitem">
    
    <div class="product">
    <img src="images/backpack.jpeg" width="200px" height="200px">
    </div>
    <div class="description">
    <span>Backpack</span><br>
        <span>Black</span>
    </div>
    <div class="basketquantity">
        <button class="basketbtn" type="button" name="button">
        <img src="images/minus.jpg" width="20px" height="20px"></button>   
        <input type="text" name="name" value="1">
         <button class="basketbtn" type="button" name="button">
        <img src="images/plus.jpg" width="20px" height="20px"></button>
            </div>
    <div class="totalprice">50EUR</div>
    </div>
    
    <div class="basketitem">
    
    <div class="product">
    <img src="images/dress.png" width="200px" height="200px">
    </div>
    <div class="description">
    <span>Long Dress</span><br>
        <span>Black</span>
    </div>
    <div class="basketquantity">
        <button class="basketbtn" type="button" name="button">
        <img src="images/minus.jpg" width="20px" height="20px"></button>   
        <input type="text" name="name" value="1">
         <button class="basketbtn" type="button" name="button">
        <img src="images/plus.jpg" width="20px" height="20px"></button>
            </div>
    <div class="totalprice">90EUR</div>
    </div>
    </div>
    <div class="basketclearfix">

            <div class="left">
                <h2 class="subtotal">Subtotal: <span>220</span>€</h2>
                
                <h3 class="shipping">Shipping: <span>5.00</span>€</h3>
            </div>

            <div class="right">
                <h1 class="total">Total: <span>225</span>€</h1>
                <button class="checkoutbtn">Checkout</button>
                
            </div>
        <script type="text/javascript" src="JS/script.js"></script>
</div>
 
    <?php include "footer.php" ?>

