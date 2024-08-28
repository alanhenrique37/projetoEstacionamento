<?php
namespace projetoEstacionamento2\PHP;
require_once('ControleEntrada.php');



use projetoEstacionamento2\PHP\ControllerEntrada;
use projetoEstacionamento2\PHP\ControleEntrada;



?>

<Doctype HTML>
<HTML lang="pt-br">
<head>
    <meta charset="UTF-8">

</head>
<body>
                <h1>Controle de Entradas</h1>
    <form method="POST">
        <label>Código:</label>
        <input type="text" id="codigoCliente" name="codigoCliente"/><br><br>

        <label>Nome:</label>
        <input type="text" id="nomeCliente" name="nomeCliente"/><br><br>

        <label>CPF:</label>
        <input type="text" id="cpfCliente" name="cpfCliente"/><br><br>

        <label>Data de Entrada:</label>
        <input type="date" id="dataEntrada" name="dataEntrada"/><br><br>

        <label>Horario de Entrada:</label>
        <input type="text" id="horaEntrada" name="horaEntrada"/><br><br>

        <label>Data de Saída:</label>
        <input type="date" id="dataSaida" name="dataSaida"/><br><br>

        <label>Horario de Saída:</label>
        <input type="text" id="horaSaida" name="horaSaida"/><br><br>

        <label>Placa:</label>
        <input type="text" id="placaCliente" name="placaCliente"/><br><br>



        <button>Cadastrar
        <?php
        session_start();
            try{
                $_SESSION['codigoCliente'] = $_POST['codigoCliente'];
                $_SESSION['nomeCliente']   = $_POST['nomeCliente'];
                $_SESSION['cpfCliente']    = $_POST['cpfCliente'];
                $_SESSION['dataEntrada']   = $_POST['dataEntrada'];
                $_SESSION['horaEntrada']   = $_POST['horaEntrada'];
                $_SESSION['dataSaida']   = $_POST['dataSaida'];
                $_SESSION['horaSaida']   = $_POST['horaSaida'];
                $_SESSION['placaCliente']  = $_POST['placaCliente'];
                
              
            }catch(Exception $erro){
                echo $erro;
            } //fim do try_catch


        ?>
        </button><br><br>     
        
        <a href="ControllerSaida.php"><button>Controle de Saidas</button></a>

       
    </form>
</body>
</HTML>
