<?php

class Carro
{
    private string $modelo;
    private string $marca;
    private string $cor;

    public function __construct(string $modelo,string $marca,string $cor)
    {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->cor = $cor;
    }

    public function getCarro() : string
    {
       return $this->modelo;
    }

    public function setCarro(string $modelo) : void
    {
      $this->modelo = $modelo;
    }

    
    public function getMarca() : string
    {
       return $this->marca;
    }
    
    public function getCor() : string
    {
       return $this->cor;
    }

}

