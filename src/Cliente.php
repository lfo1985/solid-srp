<?php

namespace Lfo19\App;

class Cliente {

    private string $nome;
    private string $email;
    private int $cpf;

    function __construct(string $nome = '', string $email = '', int $cpf = 0) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf(): int
    {
        return $this->cpf;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome(string $nome): Cliente
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email): Cliente
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf(int $cpf): Cliente
    {
        $this->cpf = $cpf;

        return $this;
    }

}