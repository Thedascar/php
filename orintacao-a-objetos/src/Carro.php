<?php

class Carro
{
    private string $modelo;
    public string $marca;
    public string $cor;

   
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

