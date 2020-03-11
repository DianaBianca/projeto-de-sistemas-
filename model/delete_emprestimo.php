<?php
include "../controllers/conecta.php";

session_start(); 
$prontuario = $_SESSION['Prontuario'];

if($con){
    $sql = "DELETE FROM usario where Prontuario = $prontuario;";
    $rs = mysqli_query($con, $sql);
    if($rs){
        echo "<h1>Cadastro excluido</h1>";
    }else {
        echo "erro de alteracao".mysqli_error();
    }
} else{ 
    echo "erro de conexao".mysqli_error();
} ?>