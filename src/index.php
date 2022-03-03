<?php

require 'produto.php';

$produto = new Produto();

$produto->list();

switch ($_GET['operacao'])
{
    case 'list':
        echo '<h3>Produtos: </h3>';

        foreach ($produto->list() as $value) {
            echo 'Id' . $value['id'] . '<br>Descrição: ' . $value['descricao'] . '<br>';
        }

        break;

    case 'insert':

        $status = $produto->insert('Arroz Camil 5Kg Tradicional');

        if (!$status)
        {
            echo 'Não foi possível executar a operação!';
            return false;
        }
        echo 'Registro cadastrado com sucesso!';

    case 'update':

        $status = $produto->update('Arroz Camil 5Kg Tradicional', 2);

        if (!$status)
        {
            echo 'Não foi possível executar a operação!';
            return false;
        }
        echo 'Registro atualizado com sucesso!';

    case 'delete':
        $status = $produto->delete(1);

        if (!$status)
        {
            echo 'Não foi possível executar a operação!';
            return false;
        }
        echo 'Registro deletado com sucesso!';
}