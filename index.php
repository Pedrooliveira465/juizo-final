<?php

use core\controller\Main;
use core\Classes\Carregador;
use core\Classes\Conexao;

session_start();

require_once('vendor/autoload.php');

require_once('core/Router.php');

/*$a = new Conexao();
$clientes = $a->select("SELECT * FROM clientes");
echo "<prev>";
print_r($clientes);*/

//require_once("core/Controller/Main.php");

//echo Main::login();