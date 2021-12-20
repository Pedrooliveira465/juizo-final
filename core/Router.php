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

$router['Editar'] = [
    'rota' => '/Editar',
    'controller' => 'Main',
    'action' => 'Editar'
];

$router['Editar_Sucesso'] = [
    'rota'=> '/Editar_Sucesso',
    'controller' => 'Main',
    'action' => 'editar_cliente'
];

$router['Delete'] = [
    'rota' => '/Delete',
    'controller' => 'Main',
    'action' => 'delete'
];

$router['Deletar'] = [
    'rota' => '/Deletar',
    'controller' => 'Main',
    "action" => 'deletar'
];


$router['Detalhes'] = [
    'rota' => '/Detalhes',
    'controller' => 'Main',
    'action' => 'Detalhes'
];

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
foreach ($router as $rota) :
    if ($url === $rota['rota']) :
        $carregador = 'core\\controller\\' . ucfirst($rota['controller']);
        $metodo = $rota['action'];

        $header = base64_encode('{"alg": "HS256", "typ": "JWT"}'); 
        $payload = base64_encode('{"sub": "'.md5(time()).'", "name": "Pedro Oliveira", "iat": '.time().'}');
        $signature = base64_encode(
            hash_hmac('sha256', $header.'.'.$payload, 'segredo', true)
        );

        echo $header.'.'.$payload.'.'.$signature;

        $ctr = new $carregador();
        $ctr->$metodo();
        return;
    endif;
endforeach;

$ctr = new Main();
$ctr->login();
return;