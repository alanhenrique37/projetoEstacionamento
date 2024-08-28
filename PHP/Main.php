<?php
    //Conectando a classe ao projeto
    namespace projetoEstacionamento2\PHP;
    //Colocar qual classe eu utilizar
    require_once("Mensalista.php");
    require_once("ControleEntrada.php");
    require_once("Funcionario.php");
   
    //Mostrar quem eu vou usar - reforço
    Use projetoEstacionamento2\PHP\Mensalista;
    Use projetoEstacionamento2\PHP\Controle;

    //Instanciar

    /*
    $mensalista1 = new Mensalista("Jetta",
                        "1",
                        "1",
                        "a",
                        "d",
                        "15",
                        "1500",
                    "8");

                        echo $mensalista1->imprimir();



   $controleEntrada1 = new ControleEntrada (
    111,
    "Alan",
    "121221",
    "122",
    "222",
    "asass"
   );
   echo $controleEntrada1->imprimir();


$funcionario1 = new Funcionario (
    "111",
    "Alan",
    1,
    "122",
    "1",
    "asass",
    "1212"
   );
   echo $funcionario1->imprimir();
*/


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


   

               

    

