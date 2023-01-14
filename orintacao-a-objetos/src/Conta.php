<?php

// criando uma classe a forma da conta...
// Conta é uam forma...
// abestração e um dos pialres mais importantes..
class Conta
{
    // titualr e chamado de composicao de obejtos
    private $titular;
    // usamos os métodos públicos...
    // chamos isso aqui de VVVVVV variáveis..
    // usamos private para não dar acesso a variavel por fora
    // apenas conseguimos usar com parametro $this
    // por regra em classe smepre usamos private
    private float $saldo;
    // aqui criamos um metodo static que se referencia a Conta
    // e um metodo para criar um atributo da conta
    private static $numeroDeContas = 0;

    // criamos dentro da classe o método construtor...__construct()
    // Usamos o metodo construtor apenas para inicializar e nao para validar..
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        
        // Usando :: conseguimos acessar os metofos referente a Conta
        self::$numeroDeContas++;       

    }
    // funcao destrutora
    public function __destruct()
    {
        self::$numeroDeContas--;
        
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
    // para selecionara conta destino usamos o proprio tipo Conta e a conta em questão..
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

    public function getNomeTitular() : string
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular() : string
    {
        return $this->titular->getCpf();
    }

    public static function getNumeroDeContas() : int
    {
        return self::$numeroDeContas;
    }
}