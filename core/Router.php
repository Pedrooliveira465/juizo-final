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

$router['lista'] = [
    'rota' => '/lista',
    'controller' => 'Main',
    'action' => 'lista'
];

$router['cadastro_sucesso'] = [
    'rota' => '/cadastro_sucesso',
    'controller' => 'Main',
    'action' => 'cadastro_sucesso'
];

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