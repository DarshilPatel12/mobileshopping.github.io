<?php

include '../config.php';

$id = $_GET['id'];

$deletequery = "delete from `vivo` where id=$id";

$query = mysqli_query($con, $deletequery);

header('location:../vivo.php');

?>