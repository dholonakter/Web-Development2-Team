<?php 
session_start();


/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";*/

$servername = "studmysql01.fhict.local";
$username = "dbi364365";
$password = "Dholon";
$dbname="dbi364365";





$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 



if (isset($_POST['Login']))
    
{
    
     $sql = "SELECT * FROM signup  WHERE Email = '".$_POST['Email']."' and Password = '".$_POST['Password']."'";

    $result=mysqli_query($conn,$sql);
            
        if(mysqli_fetch_assoc($result))
        {
            $_SESSION['User']=$_POST['Email'];
            header("location: welcomeuser.php");

        }
        else
        {
            header("location: register.php");


        }

     
}



?>
             
  




<!DOCTYPE html>
<html>
<head>
<title>About</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"href="css/main.css" />

</head>
<body>
<div class="topnavbar">
    <div class="logo">
    <a href="index.html"><img src="images/WhatsApp%20Image%202018-08-31%20at%202.50.20%20PM.jpeg" width="220px" height="100px"/></a>

    </div>
    <div class="searchbar">
        <input class="search-txt" type="text" name="" placeholder="type of serach">
        <a class="search-btn" href="#">
           <i class="fas fa-search"></i>        
        </a>
    </div>
    </div>
<div class="navbar">
        <ul >
       <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="product.html">Product</a></li>
        <li><a href="returnpolicy.html">Rules</a></li>
        <li><a href="contact.html">Contact</a></li>
       <li><a href="login.html">Login</a></li>
       <li><a href="basket.html">ShippingBasket</a></li>
        </ul>
 </div>
    
<form action="loginuser.php" method="POST">
  <div class="container">
    <h1><img class="signuplogo" class="formlogo" src="images/WhatsApp%20Image%202018-08-31%20at%202.50.20%20PM.jpeg" width="180px" height="100px"/></h1>
      <h2>Login</h2>
    <hr>
      <br>
        <div class="alert alert-error"></div>
      <hr>


      <label for="email"><b>Email</b></label>
    <input class="inputbox" type="email" placeholder="Enter Email" name="Email" required>
      <br>

    <label for="psw"><b>Password</b></label>
    <input class="inputbox" type="password" placeholder="Enter Password" name="Password" required>
      <br>
      
    
    


      <button class="button" name="Login" class="signupbtn">Sign Up</button>
            <div class="psw"> <a href="#"> Forgot password?</a></div><br>
               <div id="new">New to Orange <a href="signUp.html">Signup?</a></div><br>


    </div>
</form>
        
    <footer>
        Copyright &copy; 2018 abc
    </footer>

</body>
</html>