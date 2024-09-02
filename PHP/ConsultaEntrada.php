<?php
    //Conectando a classe ao projeto
    namespace projetoEstacionamento2\PHP;
    //Colocar qual classe eu utilizar
  
    require_once("ControleEntrada.php");
    
   
    //Mostrar quem eu vou usar - reforço
    Use projetoEstacionamento2\PHP\ConsultaEntrada;
    ?>
    <Doctype HTML>
    <HTML lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/controller.css">
    
    </head>
    <body>
            <img src="../assets/images/logo.png" width="200px">
                    <h1>Relatório de Entradas</h1>

            
    <?php

    session_start();
    echo "<br><br>";
    echo "Código:";
    echo $_SESSION['codigoCliente'];
    echo "<br>";
    echo "Nome do cliente:";
    echo $_SESSION['nomeCliente'];
    echo "<br>";
    echo "CPF do cliente:";
    echo $_SESSION['cpfCliente'];
    echo "<br>";
    echo "Data de Entrada:";
    echo $_SESSION['dataEntrada'];
    echo "<br>";
    echo "Horario de Entrada:";
    echo $_SESSION['horaEntrada'];
    echo "<br>";
    echo "Data de saída:";
    echo $_SESSION['dataSaida'];
    echo "<br>";
    echo "Horario de Saída:";
    echo $_SESSION['horaSaida'];
    echo "<br>";
    echo "Placa do cliente:";
    echo $_SESSION['placaCliente'];
     
       ?>

   </body>
 </html>




    

