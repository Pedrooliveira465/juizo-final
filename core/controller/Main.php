<?php

namespace core\controller;

use core\Classes\Conexao;
use core\Classes\Carregador;
use core\Models\Users;

class Main{

    public function login(){
    Carregador::layout([
            //Header que contém a navegação do header
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

    /*public function login_cliente(){
        $sla = new Users();
        $sla -> login_cliente();
    }*/

    public function lista(){
        carregador::layout([
            'lista',
        ]);
    }
}
