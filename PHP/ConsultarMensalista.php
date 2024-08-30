<?php
    //Conectando a classe ao projeto
    namespace projetoEstacionamento2\PHP;
    //Colocar qual classe eu utilizar
  
    require_once("Mensalista.php");
    
   
    //Mostrar quem eu vou usar - reforço
    Use projetoEstacionamento2\PHP\ConsultarMensalista;


    session_start();
    echo "CADASTRO DE MENSALISTA:";
    echo "<br><br>";
    echo "Nome do mensalista:";
    echo $_SESSION['nomeMensalista'];
    echo "<br>";
    echo "Telefone do Mensalista:";
    echo $_SESSION['telefoneMensalista'];
    echo "<br>";
    echo "Endereço do mensalista:";
    echo $_SESSION['enderecoMensalista'];
    echo "<br>";
    echo "Carro do mensalista:";
    echo $_SESSION['carroMensalista'];
    echo "<br>";
    echo "Placa do mensalista:";
    echo $_SESSION['placaMensalista'];
    echo "<br>";
    echo "Cor do carro:";
    echo $_SESSION['corMensalista'];
    echo "<br>";
    echo "Data de pagamento:";
    echo $_SESSION['pagamentoMensalista'];
    echo "<br>";
    echo "Valor mensal:";
    echo $_SESSION['valorMensalMensalista'];
     
       




    

