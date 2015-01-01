<?php
    include "connection.php";

    $username=$_POST['user_name'];
    $password=$_POST['password'];

    $query="SELECT * FROM login";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);

    //if(isset($_POST['submit']) && !empty($row)){
    if(isset($_POST['submit'])){
        if($username==$row['user_name'] && $password==$row['password']){
            session_start();
            $_SESSION['id']=$row['id'];
            $_SESSION['full_name']=$row['full_name'];
            $_SESSION['email']=$row['email'];
            $_SESSION['user_name']=$row['user_name'];
            $_SESSION['created']=$row['created'];
            header('location: dashboard.php');
        }
        else
            header('location: login.php?msg=Incorrect username or password!!!');
    }
?>
