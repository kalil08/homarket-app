<?php
    include('conexao.php');
?>

<?php
    include('conexao.php');

    $username = $_POST['username'];
    $data_nascimento = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep']; 
    $rg = $_POST['rg']; 
    $cpf = $_POST['cpf']; 
    $email = $_POST['email']; 
    $senha = $_POST['senha']; 
    $imagem = $_POST['imagem']; 
    
    function cadastracliente($conexao, $username, $data_nascimento, $endereco, $telefone, $cep, $rg, $cpf, $email, $senha, $imagem){
        $inserir = "insert into clientes (username, data_nascimento, endereco, telefone, cep, rg, cpf, email, senha, imagem) values ('{$username}', {$data_nascimento}, '{$endereco}', {$telefone}, {$cep}, {$rg}, {$cpf}, '{$email}', '{$senha}', '{$imagem}' )";

        $resultadoDaInsercao = mysqli_query($conexao, $inserir);
        return $resultadoDaInsercao;
    }

    if(cadastracliente($conexao ,$username, $data_nascimento, $endereco, $telefone, $cep, $rg, $cpf, $email, $senha, $imagem)){
        echo "<script language='javascript' type='text/javascript'>alert('dados inseridos com sucesso'); location.href='login.html';</script>";
    }else{
        $msg = mysqli_error($conexao);
        echo "Erro ao gravar os dados".$msg;
    }




?>