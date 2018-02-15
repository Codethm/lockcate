<?php
include_once("connect_db.php");

if(!empty($_GET['idaccount'])&&!empty($_GET['firstName'])
)
{
    $idaccount=$_GET['idaccount'];
    $firstName=$_GET['firstName'];

    $sql = "INSERT INTO account(idaccount,firstName) VALUES ($idaccount,$firstName)";
    $conn->exec($sql);
    header("Location: index.php");
}

?>
<form medhod="GET" action="form.php">
<br>idaccountid : <input type="text" name="idaccount">
<br>firstName : <input type="text" name="firstName">
<br><input type="submit">
</form>