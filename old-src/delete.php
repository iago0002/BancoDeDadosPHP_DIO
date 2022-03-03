<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'delete from produtos where id = ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['id']);//o 1 representa o numero relacionado ao parametro ? no statement
$prepare->execute();

echo $prepare->rowCount();