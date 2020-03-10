<?php 
session_start();
$login = $_POST['usuario'];
$senha = $_POST['senha'];
include "../controllers/conecta.php";

$result = mysqli_query($con, "SELECT * FROM Usuario WHERE email='{$login}' AND Senha='{$senha}'");




if(mysqli_num_rows ($result) > 0 ){
	$_SESSION['usuario'] = $login;
	$_SESSION['senha'] = $senha;
	
	
	$query = "SELECT * FROM Usuario where email ='{$_SESSION['usuario']}'";

if ($result = $con->query($query)) {


    while ($row = $result->fetch_assoc()) {
     
		
		$pront = $row['Prontuario'];
		$_SESSION['Prontuario'] = $pront;
		
		$nome = $row['Nome'];
		$_SESSION['Nome'] = $nome;
}}
	
	

header('location: ../views/livros.php');
}else{  unset ($_SESSION['usuario']); 
 unset ($_SESSION['Senha']);  
 
 header('location: ../views/login.html');     }?>