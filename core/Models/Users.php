<?php

namespace core\Models;

use core\Classes\Conexao;
use core\Classes\Carregador;
use core\controller\Main;
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
                ':cidade' => (trim($_POST['text_cidade']))
                
                //criptografia de senha: password_hash, PASSWORD_DEFAULT
            ];

            $bd->insert("INSERT INTO cliente VALUES (0, 
            :nome,
            :cidade
            )
            ", $params);

            $paramss = [
                ':email' => strtolower(trim($_POST['text_email'])),
                ':senha' => password_hash(trim($_POST['text_senha_1']), PASSWORD_DEFAULT),
                ':telefone' => (trim($_POST['text_telefone']))
            ];

            $bd->insert("INSERT INTO dados_sensiveis VALUES (0,
            :email,
            :senha,
            :telefone
            )
            ", $paramss);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function verificar_lista($email, $senha)
    {

        //Verifica se o login é válido 
        $paramss = [
            ':email' => $email,
            ':senha' => $senha
        ];
        
        $bd = new Conexao();
        $login = new Main();
        $resultado = $bd->select("SELECT * FROM dados_sensiveis WHERE email = :email AND senha = :senha", $paramss);

        if (count($resultado) != 1) {
            //echo "n deu certo";
            //return $login -> erro_login();
            
        } else {
            return true;

        }
    }

    public function editar($nome, $cidade){
        $parm = [
            ':nome' => $nome,
            ':cidade' => $cidade
        ];

        echo "<pre>";
        print_r($parm);
        echo "</pre>";
        $bd = new Conexao();
        $bd->Update("UPDATE cliente SET nome = :nome , cidade = :cidade, $parm");  

    }

}