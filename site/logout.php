<?php
session_start();
if(isset($_SESSION['User']))
     {
         session_destroy();

        header("location:loginuser.php");

        }
  else
  {
    echo "<script>location.href='loginuser.php'</script";

   }
 ?>
