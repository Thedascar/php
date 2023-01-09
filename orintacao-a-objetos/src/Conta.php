<?php

// criando uma classe a forma da conta...
// Conta é uam forma...
// abestração e um dos pialres mais importantes..
class Conta
{
    // usamos os métodos públicos...
    // chamos isso aqui de VVVVVV variáveis..
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;


    // uma função dentro de uma classe é chamda de método.
    public function sacar(float $valorASacar)
    {
        // Usamos $this para descrever que estamos chamadando o método
        // dentro da classe, $THIS VALE PARA A REFERÊNCIA QUE CHAMAMOS A FUNÇÃO..
        if($valorASacar > $this->saldo){
            echo 'saldo indisponível';
        } else{
            $this->saldo -= $valorASacar;
        }
    }
}