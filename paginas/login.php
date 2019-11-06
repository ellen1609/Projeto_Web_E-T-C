<?php  
    //Abindo sessão
    session_start();  
    // Incluindo a conexão
    include_once "conexão.php";

    $pdo = getConnection();
    //Atribuindo condição 
    if(isset($_POST["Usuario"]))  
    {   
      //selecionando o banco de dados 
          $query = "SELECT * FROM alunos WHERE Usuario = :Usuario AND Senha = :senha";  
          //Variavel criada para receber os dados do objeto e do metodo prepare
          $statement = $pdo->prepare($query);  
          $statement->execute(  
                array(  
                    'Usuario'     =>     $_POST["Usuario"],  
                    'senha'     =>     $_POST["senha"]  
                )  
          );  
        // Count recebendo o retorno das linhas
        $count = $statement->rowCount(); 
        //verificar se tem algum retorno 
        if($count >0){  
              $_SESSION["senha"] = $_POST["Usuario"]; 
              //Criando a variavel nome para receber o nome do usuario
              $nome =$_POST['Usuario'];
               //Mensagem a ser transmitida
              $_SESSION['mensagem'] = "$nome" ;
              //Direcionar o usuario
              header("location:index.php");  
        }  else  {  
          //Mensagem a ser transmitida
          $_SESSION['msg'] = "<p style='color:red;'>Usuário ou Senha incorreto!</p>" ;
          //Direcionar o usuario
          header("location:login.php");

        }    
    }  
 ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
	    <title>Mundo da Matemática</title>
	    <meta charset="utf-8">
      <meta name="author" content="Carmosoeles, Ellen nani e Thiago Prado">
	    <meta name="viewport" content="width=device-width,initidal-scale=1.0">
	    <meta http-equiv="X-AU-complatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
        <link rel="icon" href="../img/matematica.png">
       
    </head>

    <body>
          <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="../index.html">Mundo da Matemática</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro.php">Cadastrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
     

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('../img/pap2.png')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
          <?php
            // informando a mensagem 
            if (isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
            }         
            ?>
            <form action="" method="POST" onsubmit="return validação1();" name="form_login">
                <div class="form-group">
                  <label for="validationDefault01">Usuário</label>
                  <input type="text" class="form-control" name="Usuario" id="validationDefault01" placeholder="Informe seu Nome..."  required>
                  <small id="emailHelp" class="form-text text-muted"><span style="color:wheat!important;"> Não vamos compartilhar seus dados pessoais com ninguém.</span></small>
                </div>
                <div class="form-group">
                  <label for="validationDefault02">Senha</label>
                    <input type="password" class="form-control" name="senha" id="validationDefault02" placeholder="Informe sua Senha..."  required>
                </div>
                <div class="form-group form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">Clique em mim</label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  <script src="../libs/jquery/jquery.min.js"></script>
  <script src="../libs/bootstrap/js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>   
  <script>
      function validação1(){
        var senha = document.form_login.senha.value;        

        if (document.form_login.senha.value.length < 6 || document.form_login.senha.value.length > 10){
          alert("A senha deve conter de 6 a 10 caracteres!");
          document.form_login.senha.focus;
          return false;
        }
      }   
    </script>       
        
    </body>
</html>