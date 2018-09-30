<?php
      session_start();
            
?>



<!DOCTYPE html>
<html>
<head>
<title>About</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"href="css/main.css" />

</head>

<div class="topnavbar">
    <div class="logo">
    <a href="index.html"><img src="images/WhatsApp%20Image%202018-08-31%20at%202.50.20%20PM.jpeg" width="220px" height="100px"/></a>

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
       <li><a href="basket.html">ShoppingBasket</a></li>
        </ul>
 </div>
    
 <body>  
     
     <h2>Welcome at <b>Orange</b></h2>

        <?php
                  
        if(isset($_SESSION['User']))
        {
                                 
            echo "<h2> Your user name is ::" . $_SESSION['User'] . "</h2>";
            echo '<a class="nav-link assigned log" href="logout.php">Logout</a>';


         }
            
        else
        {
            header("location:loginuser.php");
        }


        ?>
        
    <img src="images/profilepic.png" alt="Paris" class="center">

             
    <footer>
          
    <p>&copy; Copywright  2012 Supershop. All Rights Reserved</p>

 </footer>
    
    
</body>
</html>