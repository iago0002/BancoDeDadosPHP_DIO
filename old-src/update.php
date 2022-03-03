<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'update produtos set descricao = ? where id = ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['descricao']);//parametro bindparam previne os ataques de inject sql
$prepare->bindParam(2, $_GET['id']);

$prepare->execute();//executa a query

echo $prepare->rowCount();//metod