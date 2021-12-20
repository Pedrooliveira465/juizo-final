<?php

namespace core\Models;

use core\Classes\Conexao;
use core\Classes\Carregador;
use core\controller\Main;
use Exception;

session_start();

class Users
{

    //Cadastra o cliente
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

            //Segundo parametro
            $paramss = [
                ':email' => strtolower(trim($_POST['text_email'])),
                ':senha' => password_hash(trim($_POST['text_senha_1']), PASSWORD_DEFAULT),
                ':telefone' => (trim($_POST['text_telefone']))
            ];

            //Segundo insert
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
        $resultado = $bd->select("SELECT * FROM dados_sensiveis WHERE email = :email AND senha = :senha", $paramss);

        if (count($resultado) != 1) {
            //echo "n deu certo";
            
        } else {
            return true;

        }
    }

    //Edita o cliente
    public function editar_cliente(){

        $bd = new Conexao();

        $parm = [
    
            ':nome' => (trim($_POST['nome'])),
            ':cidade' => (trim($_POST['cidade']))
        ];

        //  echo "<pre>";
        //  print_r($parm);
        //  echo "</pre>";
        $bd -> Update("UPDATE cliente SET nome = :nome , cidade = :cidade", $parm); 
        

    }

    //Deleta o cliente 
    public function delete_cliente(){
        $bd = new Conexao();

        $parametros = [

            ':nome' => (trim($_POST['nome'])),
            ':cidade' => (trim($_POST['cidade']))

        ];

        $bd -> delete("DELETE FROM cliente WHERE nome = :nome AND cidade = :cidade", $parametros);

    }

}