<?php
 
require_once 'conexão.php';
 
// resgata os valores do formulário
$nome = isset($_POST['usuario']) ? $_POST['usuario'] : null;
$senha= isset($_POST['senha']) ? $_POST['senha'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;;

// validação (bem simples, mais uma vez)
if (empty($nome) || empty($email) || empty($senha))
{
    echo "Volte e preencha todos os campos";
    exit;
}
 
// atualiza o banco
$PDO = getConnection();
$sql = "UPDATE users SET Usuario = :Usuario, Senha = :senha WHERE Email = :email,";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':usuario', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
 
if ($stmt->execute())
{
    $_SESSION['mensagem'] = "<p style='color:#37f109;'>Seja Bem Vindo $nome!!</p>" ;
    header("location:index.php");
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}
?>