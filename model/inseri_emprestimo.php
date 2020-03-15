<?php 

include "../controllers/conecta.php";

 $nome = $_POST['esconde'];
$id =0;
//echo $nome; 
$data = date('Y-m-d');
session_start();
 $prontuario = $_SESSION['Prontuario']; 
if($con){
    $sql = "insert into Emprestimo values('$id','$data', '$prontuario','$nome')";
    $rs = mysqli_query($con, $sql);
    if($rs){
		
       echo "<strong><h2>Sucesso ao emprestar</h2></strong>";
	

	if($con){
		
		

	
	
	$sql = "SELECT * FROM emprestimo where Usuario_Prontuario ='{$_SESSION['Prontuario']}'";
   
    $rs = mysqli_query($con, $sql);
    if($rs){?>
        <center><h3>Seus Emprestimos </h3></center>
        <a href="../views/livros.php">Emprestar mais</a><br><br>
        <center><table>
            <tr>
                <th>idEmprestimo</th>
                <th>data</th>
                <th>usuario_prontuario</th>
				<th>id livro</th>
    </tr>
    <?php 
    while ($valor = mysqli_fetch_array($rs)){ ?>
        <tr>
        <td><?php echo $valor["idEmprestimo"]; ?></td>
        <td><?php echo $valor["Data"]; ?></td>
        <td><?php echo $valor["Usuario_Prontuario"]; ?></td>
		<td><?php echo $valor["Livro_idLivro"]; ?></td>
       
        </tr> 
		<?php
    }
    mysqli_free_result($rs);
    echo "</table>";
    }
    else{
        echo "erro consulta".mysqli_error();
    }
}
else{
    echo "erro conxeao".mysqli_eror();
}
	  
	  
		
    }else{
        echo "Erro na inclusao".mysqli_error();

    }
}else{
    echo "Erro de conexao:".mysqli_error();
}

?>
