<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'select * from produtos';

echo '<h3>Produtos: </h3>';

foreach ($pdo->query($sql) as $key => $value) {//varre registro por registro e exibe na minha pagina
    echo 'Id' . $value['id'] . '<br>Descrição: ' . $value['descricao'] . '<br>';
}

return $pdo;