<?php
require_once 'config.php';

$id =$_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM usuarios WHERE id='$id'");
header("location:../index.php");


 ?>
