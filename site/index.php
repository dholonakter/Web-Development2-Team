<!DOCTYPE html>
<html>
<head>
<title>Home</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"href="css/main.css" />
    <script type="text/javascript" src="JS/script.js"></script>



</head>
<body>
<div class="topnavbar">
    <div class="logo">
    <a href="index.php"><img src="images/WhatsApp%20Image%202018-08-31%20at%202.50.20%20PM.jpeg" width="220px" height="100px"/></a>

    </div>
    <div class="searchbar">
        <input class="search-txt" type="text" name="" placeholder="type of search">
        <a class="search-btn" href="#">
           <i class="fas fa-search"></i>        
        </a>
    </div>
    </div>
<div class="navbar">
        <ul >
       <li><a href="index.php">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="product.html">Product</a></li>
        <li><a href="returnpolicy.html">Rules</a></li>
        <li><a href="contact.html">Contact</a></li>
       <li><a href="loginuser.php">Login</a></li>
       <li><a href="basket.php">ShoppingBasket</a></li>
        </ul>
 </div>
    <div class="textcontainer">
    
    <p>Enjoy the style, comfort and longevity of our collection of high quality dress and lingerie from the US and UK, guaranteed to maintain shape and quality for years to come. At <B>ORANGE</B> we feature the best bra brands in the world that you will only find in top shops in the US and UK, and we are offering lower equivalent prices in Uganda Shillings compared to the price that these products are selling at in the US and UK. We have dress for all ladies, in all size ranges, including band sizes starting from 30 - 54, and cup sizes starting from A - N. Plus we offer free customized bra fitting to get you the right supportive and comfortable dress. We are here for you ladies. Please visit us or contact us at +256706555007.

</p>
    </div>
<div class="slideshowcontainer">

<div class="Slides">
  <img src="images/homepage.jpeg" width="850px" height="500px">
 </div>

<div class="Slides">
  <img src="images/product.jpeg" width="850px" height="500px">
</div>

<div class="Slides">
  <img src="images/product1.jpeg" width="850px" height="500px">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("Slides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1500); 
}
</script>
    
<h1>We are highlighted to have you!!!</h1>

<div class="container">
    <div class="imagerow">
        <div class="imagecolumn"> 
            <figure>
                <img class="image" src="images/product4.jpeg" width="300" height="200">
                <figcaption class="figcaption">Clothes</figcaption>
            </figure>
            <figure>
                <img class="image" src="images/product2.jpeg" width="300" height="200">
                <figcaption class="figcaption">Accessories</figcaption>
            </figure>
            <figure>
                <img class="image" src="images/product3.jpeg" width="300" height="200">
                <figcaption class="figcaption">Electronic devices</figcaption>
            </figure>
        </div>
    </div>
</div>
      <footer>
          
    <p>&copy; Copywright  2012 Supershop. All Rights Reserved</p>

    </footer>
    
    
</body>
</html>