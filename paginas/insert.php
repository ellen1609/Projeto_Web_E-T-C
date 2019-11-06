<?php
    //Abrindo a sessão
    session_start();
    //Incluindo o php de conexão
    include "conexão.php";
    //Recebendo os valores do formulario
    $nome = isset($_POST['usuario']) ? $_POST['usuario'] : null;
    $senha= isset($_POST['senha']) ? $_POST['senha'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    
    $conn = getConnection();    

    //Inserir no banco de dados
    $sql = "INSERT INTO alunos (Usuario, Email, Senha) VALUES(:usuario, :email, :senha)";
    //Variavel criada para receber os dados do objeto e do metodo prepare
    $stmt = $conn->prepare($sql);
    //Atribuindo os valores de acordo com suas posições
    $stmt->bindParam(':usuario', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    //Se for retornado um true da execução entra nessa condição
    if ($stmt->execute()) {
        $_SESSION['mensagem'] = "$nome" ;
        header("location:index.php");

    } 
    //Se não entra nessa condição
    else {
        $_SESSION['mensagem'] = "<p style='color:red;'>Erro ao cadastrar</p>";
        header("location:cadastro.php");
    }
?> 
