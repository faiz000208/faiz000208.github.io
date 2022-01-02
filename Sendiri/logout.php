 <?php
 
    echo "Logged out successfully";
 
    session_start();
    session_destroy();
    
    // Redirect to login page
    header("location: login.php");
?>
