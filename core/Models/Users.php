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
                ':senha' => password_hash(trim($_POST['text_senha_1']), PASSWORD_DEFAULT),
                ':cidade' => (trim($_POST['text_cidade'])),
                ':telefone' => (trim($_POST['text_telefone']))

            ];
           /* echo "<pre>";
            print_r($params);
            echo "</pre>";  */

            $bd->insert("INSERT INTO cliente VALUES (0, 
            :nome,
            :email,
            :senha,
            :cidade,
            :telefone
            )
            ", $params);
            //die("DEU BOM PORRAAAA");

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function verificar_lista($email, $senha)
    {

        //Verificar se o login é válido 
        $parametros = [
            ':email' => $email,
            ':senha' => $senha
        ];
        
        $bd = new Conexao();
        $resultado = $bd->select("SELECT * FROM cliente WHERE email = :email AND senha = :senha", $parametros);

        if (count($resultado) != 1) {
            echo "caneco";
            return false;
            
        } else {
            echo "deu bom";
            die();

            //Verificar a senha do usuário
            //$usuario = $resultado[0];

            /*if (!password_verify($senha, $usuario->$senha)) {
                //Senha inválida
                return false;
            } else {
                //login válido. Coloca os dados na sessão
                $_SESSION['cliente'] = $resultado->id_cliente;
                $_SESSION['email'] = $resultado->email;
                $_SESSION['nome'] = $resultado->nome;

                //redirecionar para o inicio da loja
                Carregador::redirect();
            }*/
        }
    }
}