<?php
    try {
        // Incluindo a conexão
        include_once "conexão.php";

        $pdo=getConnection();
        
        $id = $_GET['Id'];
        // Selecionado o Usuario a ser excluido
        $del = "DELETE FROM alunos WHERE Id = :Id";
        // Verificando a execução para entrar na condição
        
        $stmt = $pdo->prepare($del);
        
        if($stmt->execute([':Id' => $id])){
          header("location:imprimir.php");
        }
        else{
        echo "<script type= 'text/javascript'>alert('Falha');</script>";
        }
        
        $pdo = null;
    }catch(PDOException $e){
    echo $e->getMessage();
    }
?>  
