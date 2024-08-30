<?php
namespace projetoEstacionamento2\PHP;
require_once('Mensalista.php');



use projetoEstacionamento2\PHP\ControllerMensalista;
use projetoEstacionamento2\PHP\Mensalista;



?>

<Doctype HTML>
<HTML lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/controller.css">

</head>
<body>
        <img src="../assets/images/logo.png" width="200px">
                <h1>Controller Mensalista</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" id="nomeMensalista" name="nomeMensalista"/><br><br>

        <label>Telefone:</label>
        <input type="number" id="telefoneMensalista" name="telefoneMensalista"/><br><br>

        <label>Endereço:</label>
        <input type="text" id="enderecoMensalista" name="enderecoMensalista"/><br><br>

        <label>Carro:</label>
        <input type="text" id="carroMensalista" name="carroMensalista"/><br><br>

        <label>Placa:</label>
        <input type="text" id="placaMensalista" name="placaMensalista"/><br><br>

        <label>Cor:</label>
        <input type="text" id="corMensalista" name="corMensalista"/><br><br>

        <label>Data de Pagamento:</label>
        <input type="date" id="pagamentoMensalista" name="pagamentoMensalista" placeholder="R$150,00"/><br><br>

        <label>Valor Mensal:</label>
        <input type="number" id="valorMensalMensalista" name="valorMensalMensalista"/><br><br>


        <button>Cadastrar
        <?php
            try{
                session_start();
                $_SESSION['nomeMensalista']      = $_POST['nomeMensalista'];
                $_SESSION['telefoneMensalista']         = $_POST['telefoneMensalista'];
                $_SESSION['enderecoMensalista']        = $_POST['enderecoMensalista'];
                $_SESSION['carroMensalista']         = $_POST['carroMensalista'];
                $_SESSION['placaMensalista']         = $_POST['placaMensalista'];
                $_SESSION['corMensalista']        = $_POST['corMensalista'];
                $_SESSION['pagamentoMensalista']       = $_POST['pagamentoMensalista'];
                $_SESSION['valorMensalMensalista']       = $_POST['valorMensalMensalista'];
            }catch(Exception $erro){
                echo $erro;
            } //fim do try_catch


        ?>
        </button><br><br>         

        

    </form>
</body>
</HTML>
