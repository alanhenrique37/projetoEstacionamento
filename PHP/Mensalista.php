<?php
    namespace projetoEstacionamento2\PHP;

    class Mensalista {
    private string $nomeMensalista;
    private string $telefoneMensalista;
    private string $enderecoMensalista;
    private string $carroMensalista;
    private string $placaMensalista;
    private string $corMensalista;
    private string $pagamentoMensalista;
    private string $valorMensalMensalista;

        public function __construct(string $nomeMensalista,
                                    string $telefoneMensalista,
                                    string $enderecoMensalista,
                                    string $carroMensalista,
                                    string $placaMensalista,
                                    string $corMensalista,
                                    string $pagamentoMensalista,
                                    string $valorMensalMensalista)
        {
            $this->nomeMensalista = $nomeMensalista;
            $this->telefoneMensalista = $telefoneMensalista;
            $this->enderecoMensalista = $enderecoMensalista;
            $this->carroMensalista = $carroMensalista;
            $this->placaMensalista = $placaMensalista;
            $this->corMensalista = $corMensalista;
            $this->pagamentoMensalista = $pagamentoMensalista;
            $this->valorMensalMensalista = $valorMensalMensalista;
        }

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim do get
    
        public function __set(string $name, mixed $value):void{
            $this->name = $value;
        }//fim do set

       
    }//FIM CLASS

?>