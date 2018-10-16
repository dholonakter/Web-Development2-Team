<?php 
include "dbconnect.php";
session_start();
$_SESSION['message']="";

if (isset($_POST['Login']))
    
{
    $email=mysqli_real_escape_string($conn,$_POST['Email']); //The mysqli_real_escape_string() function escapes special characters in a string for use in an SQL statement.
    $pass=mysqli_real_escape_string($conn,$_POST['Password']);
    $pass=md5($pass);

     $sql = "SELECT * FROM user  WHERE Email = '$email' and Password = '$pass'";


      $result=mysqli_query($conn,$sql);
            
        if(mysqli_fetch_assoc($result))
        {
            $_SESSION['User']=$email;
            header("location: welcome.php");

        }
        else
        {
             $_SESSION['message']="invalid username and password";


        }
    
   
}


?>
    
<?php include "header.php"; ?>


  
<form action="loginuser.php" method="POST" onsubmit="return validateLogin()">
  <div class="signupcontainer">
    <h1><img class="signuplogo" class="formlogo" src="images/WhatsApp%20Image%202018-08-31%20at%202.50.20%20PM.jpeg" width="180px" height="100px"/></h1>
      <h2>Login</h2>
    <hr>
      <br>
        <div class="alert alert-error"><?=$_SESSION['message']?></div>
      <div id="error"></div>
      <hr>


            <label for="email"><b>Email</b></label>
    <input class="inputbox" type="email" placeholder="Enter Email" name="Email" id="Email">

      <br>

        <label for="psw"><b>Password</b></label>
    <input class="inputbox" type="password" placeholder="Enter Password" name="Password" id="Password">

      <br>
      
    
      <button class="button" name="Login" class="signupbtn">Login</button>
            <div class="psw"> <a href="#"> Forgot password?</a></div><br>
               <div id="new">New to Orange <a href="register.php">Signup?</a></div><br>


    </div>
</form>
<?php include "footer.php" ?>
        
