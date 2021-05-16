<?php

    session_start();
    
    if ($_SESSION['email']) {
        
        echo '<script> alert("Your data are saved. You can log in now!");</script>';
        echo "<script>window.location.href = 'user.php';</script>";
   } else {
        
        header("Location: user.php");
        
    }
?>