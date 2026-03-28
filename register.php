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
