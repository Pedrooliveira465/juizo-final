<?php

use core\Classes\Conexao;

//$edit = new Conexao();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

    <form action="/Editar_Sucesso" method="POST" id="form">
    <div>
            <h2>EDITAR</h2>
            <P>COLOQUE CERTO DESSA VEZ!!!</P>
            <input type="hidden" name="id" value="">
            Nome:
            <input type="text" name="nome" id= "nome" placeholder="Pedro" value="">
            <br>
            Cidade:
            <input type="text" name="cidade" id="cidade" placeholder="Fortaleza" value="">
            <br>
            <input type="submit" value="Editar" onclick ="" id ="editar">
        </div>
    </form>
    <!--<script>
        document.getElementById("salvar").onclick = function clicar(){
    alert("Editado com sucesso!")
}
    </script>-->
</body>
</html>