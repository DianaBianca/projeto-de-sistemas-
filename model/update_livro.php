<?php  

include "../controllers/conecta.php";

  $idLivro   =  $_POST['idLivro'];
  $Nome      = $_POST['Nome'];
  $Cat_idCat = $_POST['Cat_idCat'];
  $Autor_idAutor = $_POST['Autor_idAutor'];
  $Autor_nome = $_POST['Autor_nome'];

  if ($con) {


  $sql = "UPDATE Livro SET idLivro = '.$idLivro.',Nome = '.$Nome.', Cat_idCat = '.$Cat_idCat.',Autor_idAutor = '.$Autor_idAutor.', Autor_nome = '.$Autor_nome.';";

  $rs = mysqli_connect($con,$sql);

    if ($rs) {
	  		echo "livro adicionado";
	  	}else{

	  		echo "erro na inclusão".mysqli_error();
	  	}
  }else{
  	echo "erro de conexao".mysqli_error();
  }


?>