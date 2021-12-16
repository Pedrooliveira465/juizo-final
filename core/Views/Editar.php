<?php

use core\Classes\Conexao;

$edit = new Conexao();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

    <form action="/Editar2" method="POST" id="form">
    <div class="formEditar">
            <h2>EDITAR</h2>
            <P>NÃO PERCA A OPORTUNIDADE DE GANHAR UM PS5 POR CONTA DE DADOS ERRADOS, COLOQUE CERTO DESSA VEZ!!!</P>
            <input type="hidden" name="id" value="">
            Nome:
            <input type="text" name="nome" id= "nome" placeholder="Pedro Neto Marques" value="">
            <br>
            Cidade:
            <input type="text" name="cidade" id="numero" placeholder="4" value="">
            <br>
            <input type="submit" value="Salvar" onclick ="" id ="salvar">
        </div>
    </form>
    <script>
        document.getElementById("salvar").onclick = function clicar(){
    alert("Editado com sucesso!")
}
    </script>
</body>
</html>