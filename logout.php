<?php
    session_start();

    if(session_destroy())
        header('Location: login.php?msg=Please login');

   /* if(isset($_SESSION['id']))
        unset($_SESSION['id']);*/
?>