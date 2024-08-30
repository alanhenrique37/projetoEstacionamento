<?php
namespace projetoEstacionamento2\PHP;
require_once('ControleEntrada.php');
require_once('ControleSaida.php');



use projetoEstacionamento2\PHP\ControllerEntrada;
use projetoEstacionamento2\PHP\ControleEntrada;
use projetoEstacionamento2\PHP\ControllerSaida;
use projetoEstacionamento2\PHP\ControleSaida;



?>

<Doctype HTML>
<HTML lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/controller.css">
</head>
<body>
            <img src="../assets/images/logo.png" width="200px">
                <h1>Controle de Saídas</h1>

    <?php
    session_start();
    echo"<br><br>";
    echo "Código do Cliente:"; 
    echo $_SESSION['codigoCliente'];
    echo "<br>";
    echo "Nome do Cliente:"; 
    echo $_SESSION['nomeCliente'];
    echo "<br>";
    echo "CPF do Cliente:"; 
    echo $_SESSION['cpfCliente'];
    echo "<br>";
    echo "Data de entrada do Cliente:"; 
    echo $_SESSION['dataEntrada'];
    echo "<br>";
    echo "Horario de Entrada do Cliente:"; 
    echo $_SESSION['horaEntrada'];
    echo "<br>";
    echo "Data de Saída do Cliente:"; 
    echo $_SESSION['dataSaida'];
    echo "<br>";
    echo "Horario de Saída do Cliente:"; 
    echo $_SESSION['horaSaida'];
    echo "<br>";
    echo "Placa do Cliente:"; 
    echo $_SESSION['placaCliente'];
    echo "<br>";

   echo "O valor total a se pagar: ";
   echo "<br>";
   echo $this->valorr();
    
   
   

   
  


    ?>
   
       
    </form>
</body>
</HTML>
