<?php

class Carro
{
    private string $modelo;
    private string $marca;
    private string $cor;
    private Placa $placa;

    public function __construct(string $modelo,string $marca,string $cor,Placa $placa)
    {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->cor = $cor;
        $this->placa = $placa;
    }

    public function getModelo() : string
    {
       return $this->modelo;
    }
    
    public function getMarca() : string
    {
       return $this->marca;
    }
    
    public function getCor() : string
    {
       return $this->cor;
    }

    public function getPlaca() : string
    {
        return $this->placa->getPlaca();
    }
}

