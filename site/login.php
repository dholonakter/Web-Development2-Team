<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";



/*$servername = "studmysql01.fhict.local";
$username = "dbi364365";
$password = "Dholon";
$dbname="dbi364365";
*/
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
    
  echo "Connected ";

}
session_start();

$Email =$Password=  "";
function test_input($data)
{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Email    = test_input($_POST["Email"]);
       $Password = test_input($_POST["Password"]);
        
        // data insert
    
          $sql = "SELECT id FROM login  WHERE Email = '$Email' and Password = '$Password'";
          $result = mysqli_query($sql);
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
          $active = $row['active'];
                $count = mysqli_num_rows($result);
    
          if($count == 1) {
              
        header("location: signup.php");

          }
    
      else {
         $error = "Your Login Name or Password is invalid";
      }






 
        
    $conn->close();

             
      
        
    }
      



?>