<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DO CADASTRO</title>
</head>
<body>

<h1>DEU BOM</h1>

</body>
</html>

<?php
//require_once("Conexao.php");
use core\Classes\Conexao;
use core\Models\Users;
use core\controller\Main;

   /*try{
        $conexao = new Conexao();

       $consulta = $conexao -> select("SELECT * FROM cliente");
       echo "<button><a href = 'index.php'> PÁGINA INICIAL</a></button>";
   }
   catch(PDOException $erro){
       echo "Deu ruim" .$erro -> getMessage();
   }
   try {
       $stmt = $conexao -> select("SELECT * FROM cliente");
           echo "<div><table border='1'><tr><td>Email</td><td>Senha</td></tr>";

               /*while ($linha = $consulta ->fetch(PDO::FETCH_ASSOC)) {
                   echo "<tr><td>$linha[email]</td><td>$linha[senha]</td>";
                    
               }
               echo "</table>";
    }               catch (PDOException $erro) {
                       echo "Erro: " .$erro->getMessage();
                   }*/
    
        $sla = new Conexao();
        $consulta = $sla->select("SELECT * FROM cliente");

        echo "<pre>";
        print_r($consulta);
        echo "</pre>";
    ?>

