<?php

use Lfo19\App\Cliente;
use Lfo19\App\Pedido;
use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase {

    public function testValidandoCriacaoDePedido(){

        $cliente = new Cliente('Luiz', 'lfo1985@gmail.com', 31943881855);
        $pedido = new Pedido(123, 23.44, $cliente);
        
        $insert = json_decode($pedido->create());

        self::assertEquals(true, $insert->success);

    }

}