<?php
    include "conecta.php";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];

    $query_select = "INSERT INTO cadastrocliente(nome,email,cep,cidade,uf,endereco,bairro,numero,complemento) VALUES (:nome,:email,:cep,:cidade,:uf,:endereco,:bairro,:numero,:complemento)";
    $stm_sql = $connection->prepare($query_select);
    $stm_sql->bindParam(':nome', $nome);
    $stm_sql->bindParam(':email', $email);
    $stm_sql->bindParam(':cep', $cep);
    $stm_sql->bindParam(':cidade', $cidade);
    $stm_sql->bindParam(':uf', $uf);
    $stm_sql->bindParam(':endereco', $endereco);
    $stm_sql->bindParam(':bairro', $bairro);
    $stm_sql->bindParam(':numero', $numero);
    $stm_sql->bindParam(':complemento', $complemento);
    $result = $stm_sql->execute();

?>