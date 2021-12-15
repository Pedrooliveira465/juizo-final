<?php

namespace core\controller;

use core\Classes\Conexao;
use core\Classes\Carregador;
use core\Models\Users;

class Main{

    public function login(){
    Carregador::layout([
        'login',
    ]);

    }
    public function cadastro(){
        Carregador::layout([
            'cadastro',
        ]);
    }

    public function cadastro_cliente(){
        Carregador::layout([
            'Cadastro_Sucesso',
        ]);
           $sla = new Users();
           $sla -> registrar_cliente();
    }

    public function lista(){
        $email = ($_POST['email']);
        $senha = ($_POST['senha']);

        $sla = new Users();
        $sla -> verificar_lista($email, $senha);
    }
    
}
