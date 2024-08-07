<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Page</title>
    <link rel="stylesheet" href="../css/register.css">
    
</head>
<body>
<nav class="RegisterNav">
        <h1>Home</h1>
        <div class="RegisterNavContainer">
            <a href="home.html">Home</a>
            <a href="login.html">Login</a>
            <a href="register.php">Register</a>

        </div>
    </nav>
<div class="RegisterContainer">

    <form class="RegisterForm" action="" method="post" name="registration">
        <h1 class="RegisterHeading"><u>Register</u></h1>
        <input class="RegisterInput" type="text" name="name" placeholder="Enter your username">
        <input class="RegisterInput" type="email" name="email" placeholder="Enter your email">
        <input class="RegisterInput" type="number" name="mobile" placeholder="Enter your mobile">
        <input class="RegisterInput" type="password" name="password" placeholder="Enter a password">
        <input class="RegisterInput" type="password" name="confirm" placeholder="Confirm password">
        <input class="RegisterSubmit" type="submit" value="Register" name="submit"> 
    </form>
</div> 
</body> 
</html>


<?php
$conn = mysqli_connect("localhost","root","","pg_accomodation");
if(!$conn){
    echo "not connected";
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    if($password===$confirm){
        $sql = "INSERT INTO `users`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')";
        $data = mysqli_query($conn,$sql);
        if($data){
            echo "<script>alert('Registration Completed')</script>";
        }
        else{
            echo "<script>alert('Registration Not Completed')</script>";
        }
    }
    else{
        echo "<script>alert('Password doesnt match')</script>";
    }
}

?>