<?php

namespace Lfo19\App;

use stdClass;

class Pedido {

    private int $numero;
    private float $valor;
    private Cliente $cliente;

    function __construct(
        int $numero,
        float $valor,
        Cliente $cliente
    ) {
        $this->numero = $numero;
        $this->valor = $valor;
        $this->cliente = $cliente;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of valor
     */ 
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */ 
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of cliente
     */ 
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set the value of cliente
     *
     * @return  self
     */ 
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    public function create(): string{

        return json_encode([
            'success' => true
        ]);

    }
}