

<html>
<head><title>Login Page</title></head>
<body>
<form action="" method="post">
    <p>Email:</p>
    <input type="email" name="email"><br>
    <p>Password:</p>
    <input type="password" name="password"><br><br>
    <input type="submit" name="submit"><br><br><br>
    <a href="register.html"> Register</a><br><br>
    <a href="forgot_password.php">Forgot Password ? </a>
</form>
</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 8/28/2018
 * Time: 5:54 PM
 */

session_start();

if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "select * from user where email = '$email' && password = '$password'";
    $db_host="localhost";  $db_user="root";  $db_password="";  $db="dss";
    $con = mysqli_connect($db_host,$db_user,$db_password,$db);
    $result = mysqli_query ( $con , $query);
    $count=mysqli_num_rows($result);

    if($count == 1){
        $_SESSION["LoggedIn"] = TRUE;
        header('Location: ' . 'user_dashboard.php');
    }else{

        echo 'Invalid Details';
    }
}
else
{
    echo 'Enter the required fields';
}
?>
