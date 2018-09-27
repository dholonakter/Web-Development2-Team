<?php 

/*$servername = "localhost";
$username = "root";
$password = "";*/


$servername = "studmysql01.fhict.local";
$username = "dbi364365";
$password = "Dholon";




// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
    
    echo "Connected successfully";

}

//define variabless to set the empty files





?>