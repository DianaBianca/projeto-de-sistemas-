<?php
include "../controllers/conecta.php";

$id = $_GET['idAgendar'];
if($con){
    $sql = "DELETE FROM agendar
    where idEmprestimo = $id;";
    $rs = mysqli_query($con, $sql);
    if($rs){
        echo "<h1>Agendamento excluido</h1>";
    }else {
        echo "erro de alteracao".mysqli_error();
    }
} else{ 
    echo "erro de conexao".mysqli_error();
} ?>