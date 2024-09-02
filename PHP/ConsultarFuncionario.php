<?php
    //Conectando a classe ao projeto
    namespace projetoEstacionamento2\PHP;
    //Colocar qual classe eu utilizar
  
    require_once("Funcionario.php");
    
   
    //Mostrar quem eu vou usar - reforço
    Use projetoEstacionamento2\PHP\ConsultarFuncionario;
    ?>
    <Doctype HTML>
    <HTML lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/controller.css">
    
    </head>
    <body>
            <img src="../assets/images/logo.png" width="200px">
                    <h1>Relatório de Funcionários</h1>
    <?php


session_start();

echo"<br><br>";
echo "Nome do funcionario:"; 
echo $_SESSION['nome'];
echo "<br>";
echo "Data de nascimento do funcionario:"; 
echo $_SESSION['dataNascimento'];
echo "<br>";
echo "Salario do funcionario:"; 
echo $_SESSION['salario'];
echo "<br>";
echo "Código do funcionario:"; 
echo $_SESSION['codigo'];
echo "<br>";
echo "Telefone do funcionario:"; 
echo $_SESSION['telefone'];
echo "<br>";
echo "Endereço do funcionario:"; 
echo $_SESSION['endereco'];
echo "<br>";
echo "Cargo do funcionario:"; 
echo $_SESSION['cargo'];
echo "<br><br><br><br>";

?>



    

