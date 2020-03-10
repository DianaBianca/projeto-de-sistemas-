<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" type="text/css" href="../controllers/style.css" media="screen" />

    <title>Entrar</title>
</head>


<body>

  <div class="livros">
    
              <div>
                <input type="text" id="divBusca" placeholder="Buscar..."/>
                  <select name="genero" id="idgenero">
                    <option disabled selected>Filtrar por Gênero</option>
                    <option value="TER">Terror</option>
                    <option value="INF">Informática</option>
                    <option value="ROM">Romance</option>
                  </select>
                  <button type="submit" id="btnBusca">Buscar</button>
				  
<?php 
session_start();
?>
				  
				  
                  <p>Olá Seja bem-vindo(a).  <strong><?php  echo $_SESSION['Nome']; ?></strong>  </p>
              </div>

          <div class="listalivro">
            <center> 
              <img src="imagens/livro1.jpg" width="50% " alt="livro 1">
              <h3>Livro - O Morro dos Ventos Uivantes - Edição de Luxo Bilíngue em Capa Dura - Português/ Inglês</h3></center>
              <button type="submit">Emprestar</button>
          </div>

          <div class="listalivro">
            <center> 
              <img src="imagens/livro1.jpg" width="50% " alt="livro 1">
              <h3>Livro - O Morro dos Ventos Uivantes - Edição de Luxo Bilíngue em Capa Dura - Português/ Inglês</h3></center>
              <button type="submit">Emprestar</button>
          </div>

            <div class="listalivro">
            <center> 
              <img src="imagens/livro2.jpg" width="50% " alt="livro 2">
              <h3>Livro - The Witcher - A Torre da Andorinha </h3></center>
              <button type="submit">Emprestar</button>
          </div>

           <div class="listalivro">
            <center> 
              <img src="imagens/livro3.jpg" width="35% " alt="livro 3">
              <h3>Livro - The Witcher - A Senhora do Lago </h3></center>
              <button type="submit">Emprestar</button>
          </div>
          
          <div class="listalivro">
            <center> 
              <img src="imagens/livro4.jpg" width="50% " alt="livro 4">
              <h3>Livro - Harry Potter e a Pedra Filosofal</h3></center>
              <button type="submit">Emprestar</button>
          </div>


		  <div class="listalivro">
            <center> 
              <img src="imagens/livro5.jpg" width="35% " alt="livro 5">
              <h3>Livro - Harry Potter e as Reliquias da Morte </h3></center>
              <button type="submit">Emprestar</button>
           </div>

       
      </div>
</body>



</html>




