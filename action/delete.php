<?php

$id=$_GET['id'];
include_once("connection.php");
$query= "DELETE FROM `doctors` where `id`='$id'";
mysqli_query($cn,$query);

header("Location:../viewdoctors.php");
?>