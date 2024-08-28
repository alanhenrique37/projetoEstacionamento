<?php
    namespace projetoEstacionamento2\PHP;

    class Funcionario {
    private string $nome;
    private string $dataNascimento;
    private string $salario;
    private string $codigo;
    private string $telefone;
    private string $endereco;
    private string $cargo;

        public function __construct(
                                    string $nome,
                                    string $dataNascimento,
                                    string $salario,
                                    string $codigo,
                                    string $telefone,
                                    string $endereco,
                                    string $cargo

            )
                                  
                                  
                               
        {
            $this->nome = $nome;
            $this->dataNascimento = $dataNascimento;
            $this->salario = $salario;
            $this->codigo = $codigo;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->cargo = $cargo;
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
                   "<br>Data De Nascimento: ".$this->dataNascimento.
                   "<br>Sálario: ".$this->salario.
                   "<br>Código: ".$this->codigo.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Endereço: ".$this->endereco.
                   "<br>Cargo: ".$this->cargo;
                   
        }//fim do string
    }//FIM CLASS

?>