<?php
class Placa{
    private $placa;

    public function __construct(string $placa)
    {
        $this->placa = $placa;
    }

    public function getPlaca() : string
    {
        return $this->placa;
    }
}