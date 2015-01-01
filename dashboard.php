<?php
    session_start();
    if(isset($_SESSION['user_name'])){ ?>
        <a href="logout.php">Logout</a> <?php }
    else {?>
        <a href="login.php">Login</a>
<?php } ?>
<br>
<br>
<?php
    //session_start();
    echo "Hello "."<b>".$_SESSION['full_name']."</b>"."<br>";
    echo "Your Email is "."<b>".$_SESSION['email']."</b>"."<br>";
    echo "And your registration at "."<b>".$_SESSION['created']."</b>";
?>

