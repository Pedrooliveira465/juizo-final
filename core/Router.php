<?php

use core\controller\Main;

$router = array();

$router['login'] = [
    'rota' => '/login',
    'controller' => 'Main',
    'action' => 'login'
];

$router['cadastro'] = [
    'rota' => '/cadastro',
    'controller' => 'Main',
    'action' => 'cadastro'
];

$router['Cadastro_Sucesso'] = [
    'rota'=> '/Cadastro_Sucesso',
    'controller' => 'Main',
    'action' => 'cadastro_cliente'
];

$router['cadastro_cliente'] = [
    'rota' => '/cadastro_cliente',
    'controller' => 'Main',
    'action' => 'cadastro_cliente'
];

$router['lista'] = [
    'rota' => '/lista',
    'controller' => 'Main',
    'action' => 'lista'
];

$router['Listagem'] = [
    'rota' => '/Listagem',
    'controller' => 'Main',
    'action' => 'Listagem'
];

/*$router['Conexao'] = [
    'rota' => '/Conexao',
    'controller' => 'Main',
    'action' => 'cadastro_sucesso'
];*/

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
foreach ($router as $rota) :
    if ($url === $rota['rota']) :
        $carregador = 'core\\controller\\' . ucfirst($rota['controller']);
        $metodo = $rota['action'];

        $ctr = new $carregador();
        $ctr->$metodo();
        return;
    endif;
endforeach;

$ctr = new Main();
$ctr->login();
return;