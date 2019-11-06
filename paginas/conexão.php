<?php
    //Criando a função getConnection para fazer a conexaõ com o banco de dados
    function getConnection(){
        $dsn ="mysql:host=localhost;dbname=mundo_da_matematica";
        $user ='root';
        $password ='';
            try {
                //Criando o objeto da class PDO e recebendo como valores os atributos anteriores    
                $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
            }catch(PDOException $ex) {
                echo 'ERROR: ' . $ex->getMessage();
                return false;
            }
        return $pdo;
    }
    getConnection();
?>