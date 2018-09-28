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
/*$nameErr = "";
$emailErr = "";
$passworderror = "" ;
$Passwordrepeat= "" ;*/

$errors=array();

function test_input($data)
{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $FullName = test_input($_POST["FullName"]);
    $Email    = test_input($_POST["Email"]);
    $Password = test_input($_POST["Password"]);

    
/*if (empty($_POST["FullName"]))
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
    

  if ($Password !=$Passwordrepeat) 
  {
    echo "<script>alert('Password mismatched')</script>";
  } 
    
  else
  {
  */
       $sql ="INSERT INTO signup (FullName, Email,Password)
        VALUES('$FullName','$Email', '$Password')";
                                         	header("location: index.php");

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