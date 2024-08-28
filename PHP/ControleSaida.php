<?php
    namespace projetoEstacionamento2\PHP;

    class ControleSaida {
    protected string $codigoCliente;
    protected string $nomeCliente;
    protected string $cpfCliente;
    protected string $dataSaida;
    protected int $horaSaida;
    protected string $dataEntrada;
    protected int $horaEntrada;
    protected string $placaCliente;
    protected int $valor;
    

        public function __construct(string $codigoCliente,
                                    string $nomeCliente,
                                    string $cpfCliente,
                                    string $dataSaida,
                                    int $horaSaida,
                                    string $dataEntrada,
                                    int $horaEntrada,
                                    string $placaCliente,
                                    int $valor
                                   )
        {
            $this->codigoCliente = $codigoCliente;
            $this->nomeCliente = $nomeCliente;
            $this->cpfCliente = $cpfCliente;
            $this->dataSaida = $dataSaida;
            $this->horaSaida = $horaSaida;
            $this->dataEntrada = $dataEntrada;
            $this->horaEntrada = $horaEntrada;
            $this->placaCliente = $placaCliente;
            $this->valor = $valor;
        }

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim do get
    
        public function __set(string $name, mixed $value):void{
            $this->name = $value;
        }//fim do set


        function somaa(int $horaSaida, int $horaEntrada){
            $soma = $horaSaida - $horaEntrada;
            return $soma;
        }
        
         function valorr(int $horaSaida, int $horaEntrada){
                $valor = $soma;
               
                if ($soma < 1){
                    return 10;
                } else {
                    return $soma * 5;
                }
            }

      
    
   
    
    }//FIM CLASS

?>