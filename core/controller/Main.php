<?php

namespace core\controller;

use core\Classes\carregador;
use core\Models\Users;

class Main{

    public function login(){
        carregador::layout([
            'login',
        ]);
    }

    public function cadastro(){
        carregador::layout([
            'cadastro',
        ]);
    }

    public function cadastro_user(){
        $ql = new Users();
        $ql->registrar_cliente();
    }
    public function lista(){
        carregador::layout([
            'lista',
        ]);
    }
}
