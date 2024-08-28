<?php
    namespace projetoEstacionamento2\PHP;

    class Mensalista {
    private string $nome;
    private string $telefone;
    private string $endereco;
    private string $carro;
    private string $placa;
    private string $cor;
    private string $pagamento;
    private string $valorMensal;

        public function __construct(string $nome,
                                    string $telefone,
                                    string $endereco,
                                    string $carro,
                                    string $placa,
                                    string $cor,
                                    string $pagamento,
                                    string $valorMensal)
        {
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->carro = $carro;
            $this->placa = $placa;
            $this->cor = $cor;
            $this->pagamento = $pagamento;
            $this->valorMensal = $valorMensal;
        }

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim do get
    
        public function __set(string $name, mixed $value):void{
            $this->name = $value;
        }//fim do set

        public function imprimir():string
        {
            return 
                   "<br>Nome: ".$this->nome.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Endereço: ".$this->endereco.
                   "<br>Carro: ".$this->carro.
                   "<br>Placa do carro: ".$this->placa.
                   "<br>Cor do carro: ".$this->cor.
                   "<br>Data de Pagamento: ".$this->pagamento.
                   "<br>Valor Mensal: ".$this->valorMensal;
                   
        }//fim do string
    }//FIM CLASS

?>