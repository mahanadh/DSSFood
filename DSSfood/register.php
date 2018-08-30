<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 8/28/2018
 * Time: 7:12 PM
 */

session_start();

if($_POST['submit']=='Register')

{

    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $db_host="localhost";  $db_user="root";  $db_password="";  $db="dss";
    $con = mysqli_connect($db_host,$db_user,$db_password,$db);
    $sql = " insert into user (email,password,role) values ( '$email' ,'$password' , '$role' ) ";
    $result = mysqli_query ( $con , $sql );
    if ( $result )
    {
        echo "<script type='text/javascript'>alert('Registeration successfull!')</script>";
        header('Refresh: 1; URL=login_page.php');
    }
    else
    {
        echo "<script type='text/javascript'>alert('Registeration not successfull!')</script>";
        header('Refresh: 3; URL=register.html');

    }

}
?>


