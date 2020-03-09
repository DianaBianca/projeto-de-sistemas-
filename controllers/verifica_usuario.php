<?php 
session_start();
$login = $_POST['usuario'];
$senha = $_POST['senha'];
include "../controllers/conecta.php";

$result = mysqli_query($con, "SELECT * FROM Usuario WHERE email='{$login}' AND Senha='{$senha}'");

if(mysqli_num_rows ($result) > 0 ){
	$_SESSION['usuario'] = $login;
	$_SESSION['senha'] = $senha;
	


header('location: ../views/livros.html');
}else{  unset ($_SESSION['usuario']); 
 unset ($_SESSION['Senha']);  
 
 header('location: ../views/livrosss.html');     }?>