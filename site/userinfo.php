
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
    
<body>  
    
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";




/*$servername = "studmysql01.fhict.local";
$username = "dbi364365";
$password = "Dholon";
$dbname="dbi364365";*/

$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
    
  echo "Connected ";

}

$FullName  = $Email= $Password= "";
$nameErr = "";
$emailErr = "";
$passworderror = "" ;
$Passwordrepeat= "" ;
$Passwordmatch= "";


function test_input($data)
{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
if (empty($_POST["FullName"]))
{
    $nameErr = "Name is required";
  } 
  else 
  {
    $name = test_input($_POST["FullName"]);
  }
    
if (empty($_POST["Email"]))
{
    $emailErr = "Email is required";
  } 
  else 
  {
    $name = test_input($_POST["Email"]);
  }
    
if (empty($_POST["Password"]))
{
    $passworderror = "password is required";
  } 
  else 
  {
    $Password = test_input($_POST["Password"]);
  }
    
if (empty($_POST["Passwordrepeat"]))
{
    $passworderror = "passwordrepeat is required";
  } 
  else 
  {
    $Password = test_input($_POST["Passwordrepeat"]);
      if ($Password !=$Passwordrepeat) 
  {
      $Passwordmatch="password does not match" ;;
  } 
    
 
 $sql ="INSERT INTO signup (FullName, Email,Password)
        VALUES('$FullName','$Email', '$Password')";
      
      if ($conn->query($sql) === TRUE) 
    {
     echo "New record created successfully";
    } 
          
    else 
     {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }


  
    $conn->close();


      
  }
?>
    
    <h2>PHP Form Validation Example</h2>
    <h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="FullName">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="Email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="text" name="Password">
  <span class="error"><?php echo $passworderror;?></span>
  <br><br>
    Password: <input type="text" name="Passwordrepeat">
  <span class="error"><?php echo $passworderror;?></span>
  <br><br>
    <span class="error"><?php echo $Passwordmatch;?></span>

  <input type="submit" name="submit" value="Submit">  
      
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
