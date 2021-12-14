<?php

namespace core\Models;

use core\Classes\Conexao;
use core\Classes\Carregador;
use Exception;

class Users
{
    public function registrar_cliente()
    {
        try {
            //registra o novo cliente no banco de dados
            $bd = new Conexao();

            //cria uma hash pro registro do cliente
            //parametros
            $params = [
                ':email' => strtolower(trim($_POST['text_email'])),
                ':senha' => password_hash(trim($_POST['text_senha_1']), PASSWORD_DEFAULT),
                ':nome_completo' => (trim($_POST['nome_completo'])),
                ':cidade' => (trim($_POST['text_cidade'])),
                ':telefone' => (trim($_POST['text_telefone']))

            ];
            echo "<pre>";
            print_r($params);
            echo "</pre>";  

            /*$bd->insert("INSERT INTO cliente VALUES (0, 
            :email,
            :senha,
            :nome_completo,
            :morada,
            :cidade,
            :telefone,
            NOW(),
            NOW(),
            NULL
            )
            ", $params);

            //retorna o purl criado
            return true;*/
        } catch (Exception $e) {
            return false;
        }
    }
}