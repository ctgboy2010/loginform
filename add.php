<?php
    include('connection.php');

    $query="SELECT user_name FROM login";
    $result=mysqli_query($con,$query);
    $existing=mysqli_fetch_array($result);

    //check existing user
    if($existing['user_name']==$_POST['user_name'])
        echo "Username already exists";
    else {
        $query = "INSERT INTO `login_system`.`login` (`id` ,`full_name` ,`email`,`user_name` ,`password` ,`created`)
                  VALUES ('', '$_POST[full_name]', '$_POST[email]', '$_POST[user_name]', '$_POST[password]', NOW());";

        if (mysqli_query($con, $query))
            echo "Thank you for Registration";
        else
            die("Error: " . mysqli_error($con));
    }
?>
<br>
<a href="login.php">Go to Login</a>