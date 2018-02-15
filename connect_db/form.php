<?php
include_once("connect_db.php");

if(!empty($_GET['id'])&&!empty($_GET['Name'])
)
{
    $id=$_GET['id'];
    $Name=$_GET['Name'];

    $sql = "INSERT INTO account(`idaccount`, `firstName`, `lastName`, `email`, `address`, `phoneNumber`, `seller_idseller`, `owner_idowner`)
    VALUES ($id, '$Name', NULL, NULL, NULL, NULL, NULL, NULL)";
    $conn->exec($sql);
    header("Location: index.php");
}

?>
<form medhod="GET" action="form.php">
<br>idaccountid : <input type="text" name="id">
<br>firstName : <input type="text" name="Name">
<br><input type="submit">
</form>