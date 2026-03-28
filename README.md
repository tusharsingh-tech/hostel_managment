# hostel_managment<!DOCTYPE html>
<html>
<head>
<title>Hostel</title>
</head>
<body>
<h1>🏠 Hostel Management System</h1>
<a href="login.html">Login</a>
<a href="register.html">Register</a>
</body>
</html>
<form action="backend/login.php" method="POST">
<input type="email" name="email" placeholder="Email" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button type="submit">Login</button>
</form>
<form action="backend/register.php" method="POST">
<input type="text" name="name" placeholder="Name" required><br>
<input type="email" name="email" placeholder="Email" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button type="submit">Register</button>
</form>
backend/register.php
<?php
$conn = mysqli_connect("localhost","root","","hostel");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($conn,"INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')");

echo "Registered!";
?>
