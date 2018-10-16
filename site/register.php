<?php
include "dbconnect.php";
session_start();

// initializing variables
$_SESSION['message']='';


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
            $result=mysqli_query($conn,$checkuser);
            $yes=mysqli_num_rows($result);
            if($yes>0)
            {
             $_SESSION['message']='Email already used,can not be registered';

            }
            else{
            //insert data to the user table
            $sql ="INSERT INTO User (FullName, Email,Password)
             VALUES('$FullName','$Email', '$Password')";
            if($conn->query($sql)==true)
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



<?php include "header.php"; ?>


    <form action="register.php" method="POST" onsubmit="return validateForm()">
  <div class="signupcontainer">
    <h1><img class="signuplogo" class="formlogo" src="images/WhatsApp%20Image%202018-08-31%20at%202.50.20%20PM.jpeg" width="180px" height="100px"/></h1>
    <br><p>Please fill in this form to create an account.</p>
    <hr>
      <br>
              <div class="alert alert-error"><?=$_SESSION['message']?></div>
                 <div id="error"></div>


      <hr>


    <label for="fullname"><b>FullName</b></label>
    <input class="inputbox" type="text" placeholder="Enter your name" name="FullName" id="FullName" >

      <br>
      <label for="email"><b>Email</b></label>
    <input class="inputbox" type="email" placeholder="Enter Email" name="Email" id="Email">

      <br>
      
    <label for="psw"><b>Password</b></label>
    <input class="inputbox" type="password" placeholder="Enter Password" name="Password" id="Password">
      <br>
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input class="inputbox" type="password" placeholder="Repeat Password" name="confirmpassword" id="confirmpassword">

    
    
 <p>Already have an account!!!<a href="loginuser.php">login here</a>.</p>
      <div id="error"></div>
   

      <button class="button" type="submit" class="signupbtn">Sign Up</button>
    </div>
</form>
        
    <?php include "footer.php" ?>
