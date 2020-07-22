<?php

session_start();

$username = $_POST['username'];
$senha = $_POST['senha'];

$con = mysql_connect("localhost", "root", "usbw") or die("Sem conexao com o servidor");
$select = mysql_select_db("homarkt") or die("Sem acesso ao BD, Entre em contato com o administrador");

$result = mysql_query("SELECT * FROM `cliente` WHERE `username` = '$username' AND `senha` = '$senha'");

if(mysql_num_rows($result) > 0)
{
    $_SESSION['username'] = $username;
    $_SESSION['senha'] = $senha;
    header('location:../visao/index.php')
}else{
    unset($_SESSION['$username']);
    unset($_SESSION['$senha']);
    header('location:login.html')
}

?>