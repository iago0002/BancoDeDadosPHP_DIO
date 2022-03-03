<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'insert into produtos(descricao) values(?)';//? conteudo recebido por get
//$sql = 'insert into produtos(id, descricao) values(?, ?)';
//se eu quisesse inserir mais dados na tabela produtos


$prepare = $pdo->prepare($sql);//cria um statement

//$prepare->bindParam(1, $_GET['id']);
$prepare->bindParam(1, $_GET['descricao']);//parametro bindparam previne os ataques de inject sql
$prepare->execute();//executa a query

echo $prepare->rowCount();//metodo da classe pdo, exibe qtd de linhas afetadas