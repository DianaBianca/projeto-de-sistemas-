<?php  

include "../controllers/conecta.php";

$id = $_POST['idEmprestimo'];
  $Data = $_POST['Data'];

//echo $nome; 

session_start();
 $prontuario = $_SESSION['Usuario_Prontuario'];
   $LivroID = $_POST['Livro_idLivro'];
 
 
   `idEmprestimo` INT NOT NULL AUTO_INCREMENT ,
  `Data` DATE NOT NULL ,
  `Usuario_Prontuario` INT(6) NOT NULL ,
  `Livro_idLivro` INT(4) NOT NULL ,
  PRIMARY KEY (`idEmprestimo`) )

  if ($con) {


  $sql = "UPDATE Emprestimo SET idEmprestimo = '.$id.',Data = '.$Data.', Usuario_Prontuario = '.$prontuario.',Livro_idLivro = '.$LivroID.';";

  $rs = mysqli_connect($con,$sql);

    if ($rs) {
	  		echo "agendamento alterado";
	  	}else{

	  		echo "erro na inclusão".mysqli_error();
	  	}
  }else{
  	echo "erro de conexao".mysqli_error();
  }


?>