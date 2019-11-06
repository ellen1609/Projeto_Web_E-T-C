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
        <link rel="stylesheet" href="../css/docs.min.css" >
        <link rel="stylesheet" href="../css/docsearch.min.css">
        <link rel="stylesheet" type="text/css" href="../libs/bootstrap/README.md">
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
         <i class="icon-user icon-white" aria-label="Fechar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="octicon"><?php
            // informando a mensagem de boas vindas ao usuario
            if (isset($_SESSION['mensagem'])){
              echo $_SESSION['mensagem'];
            }         
          ?>
          <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-miterlimit="20" d="M4 7h22M4 15h22M4 23h22"/></svg>
          </i>  
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
  <header class="masthead" style="background-image: url('../img/geometria.png')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Mundo da Matemática</h1>
            <span class="subheading">Logarítimos, lá vamos nós!</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  
    <div class="container-fluid">
      <div class="flex-xl-nowrap">
          <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
              <form class="bd-search d-flex align-items-center">
                  <input type="search" class="form-control" id="search-input" placeholder="Pesquisar..." aria-label="Pesquisar por..." autocomplete="off" data-siteurl="http://getbootstrap.com.br" data-docs-version="4.1">
                  <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Alternar navegação da documentação"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>
                  </button>
              </form>
              <nav class="collapse bd-links cor_nav" id="bd-docs-nav">
                <div class="bd-toc-item" id="topics">
                  <a class="bd-toc-link" href="">
                    História dos logarítmos
                  </a>
                </div>
                <div class="bd-toc-item active" id="topics">
                  <a class="bd-toc-link" href="">
                    Definição de logarítmo
                  </a>
                </div>
                <div class="bd-toc-item" id="topics">
                  <a class="bd-toc-link" href="">
                    Consequências da Definição
                  </a>
                </div>
                <div class="bd-toc-item" id="topics">
                  <a class="bd-toc-link" href="">
                    Propriedades dos logarítimos
                  </a>
                </div>
                <div class="bd-toc-item" id="topics">
                  <a class="bd-toc-link" href="">
                    Equações e inequações logaritmicas
                  </a>
                </div>
                <div class="bd-toc-item" id="topics">
                  <a class="bd-toc-link" href="">
                    Função Logaritmica
                  </a>
                </div>
                <div class="bd-toc-item" id="topics">
                  <a class="bd-toc-link" href="">
                    Gráfico 
                  </a>
                </div>
                <div class="bd-toc-item" > 
                  <a class="bd-toc-link" href="" >
                    Pratique!!!
                  </a>
                </div>
              </nav>
          </div>
          <div class="d-none d-xl-block col-x1-2 bd-toc">
    
          </div>
          <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content " role="main">
              
          </main>
      </div>
    </div> 
   
  <script src="../libs/jquery/jquery.min.js"></script>
  <script src="../libs/bootstrap/js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>      
      
  </body>
</html>
