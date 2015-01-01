<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Login Form</title>
</head>
<body>
<form action="checkuser.php" method="post">
    <div>
        <label>User Name: </label>
        <input type="text" name="user_name" title="Enter User Name" placeholder="User Name" required>
    </div>
    <br>
    <div>
        <label>Password: </label>
        <input type="password" name="password" title="Enter your password" placeholder="Password" required>
    </div>
    <br>
    <div>
        <input type="submit" name="submit" value="Login">
    </div>
    <div>
        <br>
        <a href="registration.php">Click Here to Registration</a>
    </div>
</form>
</body>
</html>