<?php
    //Abrindo a sessão
    session_start();
    //Incluindo o php de conexão
    include "conexão.php";

    //Recebendo os valores do formulario
    $nome = isset($_POST['usuario']) ? $_POST['usuario'] : null;
    $senha= isset($_POST['senha']) ? $_POST['senha'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $id = $_GET['Id_up'];
    
    

    $conn = getConnection();    


    //Inserir no banco de dados
    $sql= "UPDATE alunos SET Usuario = :usuario, Email = :email, Senha = :senha Where Id = :id";

    //Variavel criada para receber os dados do objeto e do metodo prepare

    $stmt = $conn->prepare($sql);

    //Atribuindo os valores de acordo com suas posições

    $stmt->execute(array(
        ':id' => $id,
        ':usuario' => $nome,
        ':email' => $email,
        ':senha' => $senha
    ));
    

    
    
    //Se for retornado um true da execução entra nessa condição
    if ($stmt->execute()) {
        $_SESSION['mensagem'] = "<p style='color:#37f109;'>Seja Bem Vindo $nome!!</p>" ;
        header("location:index.php");

    } 
    //Se não entra nessa condição
    else {
        $_SESSION['mensagem'] = "<p style='color:red;'>Erro ao cadastrar</p>";
        header("location:cadastro.php");
    }
?> 
