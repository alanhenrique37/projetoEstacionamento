<?php
    namespace projetoEstacionamento2\PHP;

    class ControleEntrada {
    protected string $codigoCliente;
    protected string $nomeCliente;
    protected string $cpfCliente;
    protected string $dataEntrada;
    protected int $horaEntrada;
    protected string $dataSaida;
    protected int $horaSaida;
    protected string $placaCliente;

        public function __construct(string $codigoCliente,
                                    string $nomeCliente,
                                    string $cpfCliente,
                                    string $dataEntrada,
                                    int $horaEntrada,
                                    string $dataSaida,
                                    int $horaSaida,
                                    string $placaCliente
                                   )
        {
            $this->codigoCliente = $codigoCliente;
            $this->nomeCliente = $nomeCliente;
            $this->cpfCliente = $cpfCliente;
            $this->dataEntrada = $dataEntrada;
            $this->horaEntrada = $horaEntrada;
            $this->dataSaida = $dataSaida;
            $this->horaSaida = $horaSaida;
            $this->placaCliente = $placaCliente;
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