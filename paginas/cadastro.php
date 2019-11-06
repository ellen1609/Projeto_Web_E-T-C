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
            <form method="POST" action="insert.php" name="form_cadastro" onsubmit="return validação1();">
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Usuário</label>
                    <input type="text" class="form-control" name="usuario" id="validationDefault01" placeholder="Usuário"  required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Senha</label>
                    <input type="password" class="form-control" name="senha" id="validationDefault02" placeholder="Senha"  required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">E-mail</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                      </div>
                      <input type="email" class="form-control" name="email" id="validationDefaultUsername" placeholder="E-mail" aria-describedby="inputGroupPrepend2" required>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault03">Confirmar Usuário</label>
                    <input type="text" class="form-control" id="validationDefault03" name="confirma_usuario" placeholder="Usuário" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault04">Confirmar Senha</label>
                    <input type="password" class="form-control" id="validationDefault040" name="confirma_senha" placeholder="Senha" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">Confirmar E-mail</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                      </div>
                      <input type="email" class="form-control" id="validationDefaultUsername" name="confirma_email" placeholder="E-mail" aria-describedby="inputGroupPrepend2" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                      Concordo com os termos e condições
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Enviar</button>
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
        var usuario = document.form_cadastro.usuario.value; 
        var senha = document.form_cadastro.senha.value;
        var email = document.form_cadastro.email.value;
        var confirma_usuario = document.form_cadastro.confirma_usuario.value; 
        var confirma_senha = document.form_cadastro.confirma_senha.value;
        var confirma_email = document.form_cadastro.confirma_email.value;

        if (usuario != confirma_usuario){
          alert("Dados diferentes na confirmação de usuário!");
          document.form_cadastro.confirma_usuario.focus();
          return false;
        }

        if (senha != confirma_senha){
          alert("Dados diferentes na confirmação de senha!");
          document.form_cadastro.confirma_senha.focus();
          return false;
        }
        if (email != confirma_email){
          alert("Dados diferentes na confirmação de email!");
          document.form_cadastro.confirma_email.focus();
          return false;
        }
        if (document.form_cadastro.senha.value.length < 6 || document.form_cadastro.senha.value.length > 10){
          alert("A senha deve conter de 6 a 10 caracteres!");
          document.form_cadastro.senha.focus;
          return false;
        }
      }   
    </script>     
    </body>
</html>