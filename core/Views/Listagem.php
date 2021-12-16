<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DO CADASTRO</title>
</head>
<body>

</body>
</html>

<?php
use core\Classes\Conexao;
use core\Models\Users;
use core\controller\Main;

   try{
       
        $conexao = new Conexao();

       $consulta = $conexao -> select("SELECT * FROM cliente");
       
   }
   catch(PDOException $erro){
       echo "Deu ruim" .$erro -> getMessage();
   }
   try {
    //$teste = array_keys($consulta);
       $linha = $conexao -> select("SELECT * FROM cliente");
           echo "<div><table border='1'><tr><td>Email</td><td>Senha</td></tr>";

           $email = ($_POST['email']);
           $senha = ($_POST['senha']);

            foreach ($linha as $key => $value) {
                echo "<tr><td>$email</td><td>$senha</td>";
            }

               /*while ($linha = $consulta ->fetch(PDO::FETCH_ASSOC)) {
                   echo "<tr><td>$linha[email]</td><td>$linha[senha]</td>";
                    
               }*/

               echo "</table>";
    }catch (PDOException $erro) {
        echo "Erro: " .$erro->getMessage();
        }
    
 ?>

