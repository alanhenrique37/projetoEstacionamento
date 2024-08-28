<?php
namespace projetoEstacionamento2\PHP;
require_once('Funcionario.php');



use projetoEstacionamento2\PHP\ControllerFuncionario;
use projetoEstacionamento2\PHP\Funcionario;



?>

<Doctype HTML>
<HTML lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
                <h1>Controller Funcionario</h1>

    <form method="POST">
        <label>Nome:</label>
        <input type="text" id="nome" name="nome"/><br><br>

        <label>Data de nascimento:</label>
        <input type="date" id="dataNascimento" name="dataNascimento" class="data"/><br><br>

        <label>Salário:</label>
        <input type="number" id="salario" name="salario"/><br><br>

        <label>Código:</label>
        <input type="text" id="codigo" name="codigo"/><br><br>

        <label>Telefone:</label>
        <input type="text" id="telefone" name="telefone"/><br><br>

        <label>Endereço:</label>
        <input type="text" id="endereco" name="endereco"/><br><br>

        <label>Cargo:</label>
        <input type="text" id="cargo" name="cargo"/><br><br>



        <button>Cadastrar
        <?php
            session_start();
            try{
                $_SESSION['nome'] = $_POST['nome'];
                $_SESSION['dataNascimento']  = $_POST['dataNascimento'];
                $_SESSION['salario']   = $_POST['salario'];
                $_SESSION['codigo']    = $_POST['codigo'];
                $_SESSION['telefone']  = $_POST['telefone'];
                $_SESSION['endereco']  = $_POST['endereco'];
                $_SESSION['cargo']     = $_POST['cargo'];
            }catch(Exception $erro){
                echo $erro;
            } //fim do try_catch


        ?>
        </button><br><br>         

     

    </form>
</body>
</HTML>
