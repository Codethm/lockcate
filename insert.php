<?php
include_once("connect_db/connect_db.php");

$sql ="SELECT MAX(idaccount) FROM account;";
$sth = $conn->prepare($sql);
$sth->execute();
$Max = $sth->fetch();
$Naxt = intval($Max[0])+1;

if(empty($_POST['firstname'])&&empty($_POST['lastname']))
{
    header("Location: register.html");
}
else{

$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];

$sql = "INSERT INTO account(`idaccount`, `username`, `password`, `firstName`, `lastName`, `email`, `address`, `phoneNumber`, `seller_idseller`, `owner_idowner`)
VALUES ($Naxt, '$username', '$password', '$firstname', '$lastname', '$email', NULL, NULL, NULL, NULL)";
$conn->exec($sql);
header("Location: application/");
}

?>