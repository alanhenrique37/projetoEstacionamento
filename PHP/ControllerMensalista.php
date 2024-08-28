<?php
namespace projetoEstacionamento2\PHP;
require_once('Mensalista.php');
require_once('Main.php');


use projetoEstacionamento2\PHP\ControllerMensalista;
use projetoEstacionamento2\PHP\Mensalista;



?>

<Doctype HTML>
<HTML lang="pt-br">
<head>
    <meta charset="UTF-8">

</head>
<body>
                <h1>Controller Mensalista</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" id="nome" name="nome"/><br><br>

        <label>Telefone:</label>
        <input type="number" id="telefone" name="telefone"/><br><br>

        <label>Endereço:</label>
        <input type="text" id="endereco" name="endereco"/><br><br>

        <label>Carro:</label>
        <input type="text" id="carro" name="carro"/><br><br>

        <label>Placa:</label>
        <input type="text" id="placa" name="placa"/><br><br>

        <label>Cor:</label>
        <input type="text" id="cor" name="cor"/><br><br>

        <label>Data de Pagamento:</label>
        <input type="date" id="pagamento" name="pagamento"/><br><br>

        <label>Valor Mensal:</label>
        <input type="number" id="valorMensal" name="valorMensal"/><br><br>


        <button>Cadastrar
        <?php
            try{
                $nome      = $_POST['nome'];
                $telefone          = $_POST['telefone'];
                $endereco         = $_POST['endereco'];
                $carro         = $_POST['carro'];
                $placa         = $_POST['placa'];
                $cor        = $_POST['cor'];
                $pagamento       = $_POST['pagamento'];
                $valorMensal       = $_POST['valorMensal'];
                $mensalista1 = new Mensalista($nome, $telefone, $endereco, $placa, $carro, $cor, $pagamento, $valorMensal);
            }catch(Exception $erro){
                echo $erro;
            } //fim do try_catch


        ?>
        </button><br><br>         

        <?php 
        echo $mensalista1->imprimir();
        ?>

    </form>
</body>
</HTML>
