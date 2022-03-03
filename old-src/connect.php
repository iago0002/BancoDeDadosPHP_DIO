<?php

declare(strict_types=1);

$pdo = null;

try {
    $pdo = new PDO('mysql:host=localhost:3306;dbname=exemplo','root', '12345');//linha de conexao
    } catch (Exception $e) {
    echo $e->getMessage();
    die();
}

return $pdo;