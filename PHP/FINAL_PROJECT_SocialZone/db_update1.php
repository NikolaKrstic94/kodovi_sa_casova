<?php
require_once "connection.php";
$sql = "ALTER TABLE profiles
        ADD bio TEXT";

$conn->query($sql);

 ?>
