<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>

<?php
include_once("connect_db/connect_db.php");

if(!empty($_GET['del']))
{
$Del = $_GET['del'];
$sql="DELETE FROM account WHERE idaccount=$Del";
$conn->exec($sql);
header("Location: show.php");
}

$sql = "SELECT `idaccount`, `username` from account";
$stmt = $conn->prepare($sql);
$stmt->execute();

foreach($stmt->fetchall() as $key => $value){
    $id = $value[0];
    $user = $value[1];

    
    $link_update ="<a href='edit.php?update=$id'>edit</a>";
    $link_del ="<a href='show.php?del=$id'>delete</a>";

    echo $key," ",$id," ",$user," ",$link_update," " ,$link_del,"<hr>";
}

echo '<a href="register.html">Register</a> <hr>';
?>



</body>
</html>