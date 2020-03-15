<?php
include "../controllers/conecta.php";

$idEmprestimo 0;
$data = $_POST['Data'];
$usuario_prontuario = $_POST['Usuario_Prontuario'];
$livro_idlivro = $_POST['Livro_idLivro'];


if($con){
    $sql = "insert into Agendar values('$idEmprestimo','$data', '$usuario_prontuario','$Livro_idLivro')";
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