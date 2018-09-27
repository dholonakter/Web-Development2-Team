
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
$passwordrepeaterror = "" ;
$Passwordrepeat= "" ;
$Passwordmatch= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
if (empty($_POST["FullName"]))
{
    $nameErr = "Name is required";
  } 
  else 
  {
    $FullName = test_input($_POST["FullName"]);
  }
    
if (empty($_POST["Email"]))
{
    $emailErr = "Email is required";
  } 
  else 
  {
    $Email = test_input($_POST["Email"]);
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
    $passwordrepeaterror = "please repeat your password";

  } 
  else 
  {
    $Passwordrepeat = test_input($_POST["Passwordrepeat"]);
  }
    
if($Password!=$Passwordrepeat)
{
  echo "<script>alert('Password mismatched')</script>";
}
else
{

     $sql ="INSERT INTO signup (FullName, Email,Password)
     VALUES('$FullName','$Email', '$Password')";
      
    if ($conn->query($sql) === TRUE) 
     {
          
       echo "registered succesfully";
     } 
          
    else 
     {
      echo "Error: " . $sql . "<br>" . $conn->error;
     }
    
     $conn->close();


}
  
}
    
function test_input($data)
{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
?>
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
  <span class="error">*<?php echo $passworderror;?></span>
  <br><br>
    Password repeat: <input type="text" name="Passwordrepeat">
      <span class="error">*<?php echo $passwordrepeaterror;?></span>

  <br><br>
   
  
  <input type="submit" name="submit" value="Submit">  
</form>


</body>
</html>
