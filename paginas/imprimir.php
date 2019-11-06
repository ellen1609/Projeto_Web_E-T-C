<?php
  //Iniciando sessão
  session_start();
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
      <a class="navbar-brand" href="index.php">Mundo da Matemática</a>
      <div class="navbar-brand">
       <b>
        <div class="btn-group" id="navbarResponsive">

         <i class="icon-user icon-white "  aria-label="Fechar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="octicon">
           <?php
            // informando a mensagem de boas vindas ao usuario
            if (isset($_SESSION['mensagem'])){
              echo $_SESSION['mensagem'];
            }         
          ?></i> 
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="nav-link" href="sair.php">Sair </a>
          <a class="nav-link" href="imprimir.php">Mostra Usuário</a>
        </div>
     </div>
        </b>
      </div>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('../img/pap2.png')">
    <div class="overlay"></div>
      <div class="row">
        <div class="col-md-12 mx-auto">
          <div class="site-heading">
<!-------------------------------------------------PHP - CONSULTA---------------------------------------------->
            <?php 
                include 'conexão.php';

                //  nova variavel onde guarda o objeto criado na funcao getConnection()
                $conn = getConnection();

                // Consulta SQL que irá retornar valores do DB
                $sql_show = "SELECT * FROM alunos";
                $stmt = $conn->prepare($sql_show);
                $stmt->execute();

                #Aqui criamos uma variavel chamada "Alunos" onde ele recebe o resultado do objeto "stmt". com a função fatchALL, retornamos a lista de nomes, um array, mas como objetos, onde chamaremos mais abaixo no foreach
                $Alunos = $stmt->fetchAll(PDO::FETCH_OBJ);
            ?>
<!-------------------------------------------------TABELA ------------------------------------------------>
            <div class="container">
                <div class="card mt-5">
                    <div class="card-header">
                    <h2 style='color:#010a13;'>Gerenciar</h2>
                    </div>
                    <div class="card-body">
                      
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Senha</th>

                            </tr>
                            <?php foreach($Alunos as $alu): ?>
                                <tr>
                                    <td><?= $alu->Id;?></td>
                                    <td><?= $alu->Usuario; ?></td>
                                    <td><?= $alu->Email; ?></td>
                                    <td><?= $alu->Senha; ?></td>
                                    <td>
                                        <a onclick="return confirm('Tem certeza que deseja atualizar usuario?')" href="form_atualizar.php?Id_up=<?= $alu->Id?>" class="btn btn-info" >Editar</a>
                                        <a onclick="return confirm('Tem certeza que deseja excluir usuario?')" href="excluir.php?Id=<?= $alu->Id?>" class="btn btn-danger" >Excluir</a>
                                    </td>

                                </tr>
                
                            <?php endforeach; ?>
                            
                        </table>
                        
                    </div>
                    
                </div>    
            </div>
        </div>
      </div>
    </div>
  </header>         
  <script src="../libs/jquery/jquery.min.js"></script>
  <script src="../libs/bootstrap/js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>    
         
    </body>
</html>