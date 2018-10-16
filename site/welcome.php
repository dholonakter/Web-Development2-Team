<?php
      session_start();
     include "header.php";

            
?>

   <h2>Welcome at <b>Orange</b></h2>

        <?php
                  
        if(isset($_SESSION['User']))
        {
                                 
            echo "<h2> Your user name is ::" . $_SESSION['User'] . "</h2>";
            echo '<a class="nav-link assigned log" href="logout.php">Logout</a>';


         }
            
        else
        {
            header("location:loginuser.php");
        }


        ?>
        
    <img src="images/profilepic.png" alt="Paris" class="center">

             
<?php include "footer.php" ?>
