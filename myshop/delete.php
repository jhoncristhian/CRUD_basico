<?php
$connection = new mysqli("localhost", "root", "", "myshop");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    $sql = "DELETE FROM clients WHERE id=$id";
    $connection->query($sql);
}

header ("location: /myshop/index.php");
exit;
?>