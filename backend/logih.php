<?php
    include("conexao.php");
?>
<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    
   
    $verifica = mysqli_query($conexao,"SELECT * FROM usuarios WHERE usuario = 
    '$usuario' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.php';</script>";
        die();
      }else{
        setcookie("usuario",$usuario);
        header("Location:certo.php");
      }
  
?>
