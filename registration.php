<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
<form action="add.php" method="post">
    <div>
        <label>Full Name: </label>
        <input type="text" name="full_name" title="Enter your full name" placeholder="Full Name" required>
    </div>
    <br>
    <div>
        <label>Email: </label>
        <input type="email" name="email" title="Type your email" placeholder="Email" required>
    </div>
    <br>
    <div>
        <label>User Name: </label>
        <input type="text" name="user_name" title="Type your user name" placeholder="User Name" required>
    </div>
    <br>
    <div>
        <label>Password: </label>
        <input type="password" name="password" title="Type your password" placeholder="Password" required>
    </div>

    <div>
        <input type="hidden" name="created">
    </div>
    <div>
        <input type="hidden" name="modified">
    </div>
    <div>
        <br>
        <input type="submit" name="submit" value="Submit">
    </div>
    <div>
        <br>
        <a href="login.php">Go to Login</a>
    </div>
</form>
</body>
</html>