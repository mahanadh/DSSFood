<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 8/29/2018
 * Time: 12:25 PM
 */




$servername="localhost";
$username="root";
$password="";
$db="dss";

$conn=new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}else{
    echo "Connected to db successfully";
}

?>

