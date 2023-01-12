<?php

// criando uma classe a forma da conta...
// Conta é uam forma...
// abestração e um dos pialres mais importantes..
class Conta
{
    // usamos os métodos públicos...
    // chamos isso aqui de VVVVVV variáveis..
    private string $cpfTitular;
    private string $nomeTitular;
    // usamos private para não dar acesso a variavel por fora
    // apenas conseguimos usar com parametro $this
    // por regra em classe smepre usamos private
    private float $saldo = 0;

    // criamos dentro da classe o método construtor...__construct()
    public function __construct(string $cpfTitular,string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }

    // uma função dentro de uma classe é chamda de método.
    public function sacar(float $valorASacar) : void
    {
        // Usamos $this para descrever que estamos chamadando o método
        // dentro da classe, $THIS VALE PARA A REFERÊNCIA QUE CHAMAMOS A FUNÇÃO..
        if($valorASacar > $this->saldo){
            echo 'saldo indisponível';
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar) : void
    {
        if($valorADepositar <= 0){
            echo 'deposito não pode ser zero';
            return;
        }
        $this->saldo += $valorADepositar;  
    }
    // para selecionara conta destino usamos o proprio tipo contaVVVV...
    public function transferir(float $valorATransferir,Conta $contaDestino) : void
    {
        if($valorATransferir > $this->saldo){
            echo 'Saldo indisponíve';
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
    
    //aqui criamos uam classse para poder ver o saldo e colocamos como flaot
    // apenas retornamos o $this do saldo para poder acessar..
    public function getSaldo() : float
    {
        return $this->saldo;
    }
   
    public function getCpfTitular() : string
    {
        return $this->cpfTitular;
    }
   
   
    public function getNomeTitular() : string
    {
        return $this->nomeTitular;
    }
}