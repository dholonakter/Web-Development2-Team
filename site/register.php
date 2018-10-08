<?php
session_start();

// initializing variables
$_SESSION['message']='';

$servername = "studmysql01.fhict.local";
$username = "dbi364365";
$password = "Dholon";
$dbname="dbi364365";

//connect to the database

$db = mysqli_connect($servername,$username,$password,$dbname);

if ($db->connect_error)
{
    die("Connection failed: " . $db->connect_error);
} 
//htmlspecialchair prevents attackers from exploting the code by injecting html or javasript code
//strip unneccessay characters with trim() function
//remove baclashes with user input data striplashes() function
function test_input($data)
{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}

// REGISTER USER
//the user check whether form has been submitted or not.if the request method is post,the the form has been submitted
if ($_SERVER['REQUEST_METHOD']== "POST")
{
        if($_POST['Password']==$_POST['confirmpassword'])
        
        {
           $FullName = test_input($_POST["FullName"]);
            $Email    = test_input($_POST["Email"]);
            $Password = test_input($_POST["Password"]);
            $Password=md5($Password);
            //check wheather email is used or not
            $checkuser = "SELECT * FROM User  WHERE Email = '$Email'";
            $result=mysqli_query($db,$checkuser);
            $yes=mysqli_num_rows($result);
            if($yes>0)
            {
             $_SESSION['message']='Email already used,can not be registered';

            }
            else{
            //insert data to the user table
            $sql ="INSERT INTO User (FullName, Email,Password)
             VALUES('$FullName','$Email', '$Password')";
            if($db->query($sql)==true)
            {
                
                header("location: loginuser.php");

            }
            else{
                $_SESSION['message']='user can not added';
                
                header("location: register.php");

            }
                
            }
            
            
        }
    
    else{
        $_SESSION['message']="two password does not match";
        
    }


}
        

?>





<!DOCTYPE html>
<html>
<head>
<title>Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"href="css/main.css" />

</head>

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
       <li><a href="basket.html">ShoppingBasket</a></li>
        </ul>
 </div>

<body>
    
    <form action="register.php" method="POST">
  <div class="signupcontainer">
    <h1><img class="signuplogo" class="formlogo" src="images/WhatsApp%20Image%202018-08-31%20at%202.50.20%20PM.jpeg" width="180px" height="100px"/></h1>
    <br><p>Please fill in this form to create an account.</p>
    <hr>
      <br>
        <div class="alert alert-error"><?=$_SESSION['message']?></div>
      <hr>


    <label for="fullname"><b>FullName</b></label>
    <input class="inputbox" type="text" placeholder="Enter your name" name="FullName" required>
      <br>
      <label for="email"><b>Email</b></label>
    <input class="inputbox" type="email" placeholder="Enter Email" name="Email" required>
      <br>

    <label for="psw"><b>Password</b></label>
    <input class="inputbox" type="password" placeholder="Enter Password" name="Password" required>
      <br>
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input class="inputbox" type="password" placeholder="Repeat Password" name="confirmpassword" required>
    
    
 <p>Already have an account!!!<a href="loginuser.php">login here</a>.</p>


      <button class="button" type="submit" class="signupbtn">Sign Up</button>
    </div>
</form>
        
    <footer>
        Copyright &copy; 2018 abc
    </footer>

</body>
</html>