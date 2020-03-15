<?php  

include "../controllers/conecta.php";

  $idEmprestimo   =  $_POST['idEmprestimo'];
  $user      = $_POST['Usuario_Prontuario'];
  $data = $_POST['data'];
  $idLivro = $_POST['Livro_idLivro'];
  

  if ($con) {


  $sql = "UPDATE Agendar SET idEmprestimo = '.$idEmprestimo.',Usuario_Prontuario = '.$user.', Data = '.$data.',Livro_idLivro = '.$idLivro.';";

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