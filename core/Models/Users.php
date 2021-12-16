<?php

namespace core\Models;

use core\Classes\Conexao;
use core\Classes\Carregador;
use Exception;

session_start();

class Users
{

    public function registrar_cliente()
    {
        try {
            //registra o novo cliente no banco de dados
            $bd = new Conexao();

            //parametros
            $params = [
                ':nome' => (trim($_POST['nome'])),
                ':email' => strtolower(trim($_POST['text_email'])),
                ':senha' => (trim($_POST['text_senha_1'])),
                ':cidade' => (trim($_POST['text_cidade'])),
                ':telefone' => (trim($_POST['text_telefone']))

                //criptografia de senha: password_hash, PASSWORD_DEFAULT

            ];

            $bd->insert("INSERT INTO cliente VALUES (0, 
            :nome,
            :email,
            :senha,
            :cidade,
            :telefone
            )
            ", $params);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function verificar_lista($email, $senha)
    {

        //Verifica se o login é válido 
        $parametros = [
            ':email' => $email,
            ':senha' => $senha
        ];
        
        $bd = new Conexao();
        $resultado = $bd->select("SELECT * FROM cliente WHERE email = :email AND senha = :senha", $parametros);

        if (count($resultado) != 1) {
            echo "Não está cadastrado";
            return false;
            
        } else {
            return true;
            
        }
    }
}