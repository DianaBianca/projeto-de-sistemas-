<?php
include "../controllers/conecta.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$id = 0;
if($con){
    $sql = "insert into Usuario values('$id','$nome', '$cpf','$rg','$senha','$email')";
    $rs = mysqli_query($con, $sql);
    if($rs){
		
        header("Location: ../views/login.html");
		
    }else{
        echo "Erro na inclusao".mysqli_error();

    }
}else{
    echo "Erro de conexao:".mysqli_error();
}

?>