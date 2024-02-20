<?php

require_once 'vendor/autoload.php';

use Lfo19\App\Cliente;
use Lfo19\App\Pedido;

$cliente = new Cliente(
    'Luiz Fernando',
    'lfo1985@gmail.com',
    31943881855,
);

$pedido = new Pedido(
    123,
    12.50,
    $cliente
);

$pedido->create();

echo 'Nome do cliente: ' . $pedido->getCliente()->getNome();
echo '<br>';
echo 'Nr. do pedido: ' . $pedido->getNumero();