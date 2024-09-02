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
    protected int $total;
    

        public function __construct(string $codigoCliente,
                                    string $nomeCliente,
                                    string $cpfCliente,
                                    string $dataSaida,
                                    int $horaSaida,
                                    string $dataEntrada,
                                    int $horaEntrada,
                                    string $placaCliente,
                                    int $total
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
            $this->total = $total;
        }

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim do get
    
        public function __set(string $name, mixed $value):void{
            $this->name = $value;
        }//fim do set


        public function valorTotal($horaSaida, $horaEntrada){
            $total = $horaSaida - $horaEntrada;
            if($total < 1){
                return "Valor total: 5,00 R$";
 
            }else{
                return "Valor total: ".$total * 10 ."R$";
            }    
        }//fim valorTotal

      
    
   
    
    }//FIM CLASS

?>