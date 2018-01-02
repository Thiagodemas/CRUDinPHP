<?php
require_once 'config.php';

$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$login = mysqli_real_escape_string($mysqli, $_POST['login']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$result = mysqli_query($mysqli, "INSERT INTO usuarios(nome, email, login, senha) VALUES('$nome', '$email', '$login', '$senha')");
header("location:../index.php");




 ?>
