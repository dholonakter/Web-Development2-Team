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
    echo "connected";
}

session_start();

$Email =$Password=  "";
$_SESSION['message']='';

function test_input($data)
{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}


/*if (isset($_POST['Login']))
    
{
    if(empty($_POST["Email"])|| empty($_POST["Password"]))
    {
        header("Location:loginuser.php?Empty=Please fill in the blanks");
    }
        

}

else
 {
    echo "not working ";
}*/

if()
if ((isset['Login']) {
			
       $Email = test_input($_POST["Email"]);
       $Password = test_input($_POST["Password"]);
                
          $sql = "SELECT * FROM signup  WHERE Email = '$Email' and Password = '$Password' limit 1";
          $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
         $id=$row['Id'];
    $db_password=$row['Password'];
    
    if($Password=$db_password)
    {
                     
        
        $_SESSION['Email']=$Email;
        header("Location:index.php");


    }
    
    {
        echo "you did not enter coorect";
  
    }
          
          
    
     
}
             
      
        



?>