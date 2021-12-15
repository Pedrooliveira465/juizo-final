<?php

namespace core\controller;

use core\Classes\Conexao;
use core\Classes\Carregador;
use core\Models\Users;

class Main{

    public function login(){
       //Verifica se já existe uma sessão iniciada
       if (Carregador::clientelog()) {
        $this->login();
        return;
    }

    Carregador::layout([
            //Header que contém a navegação do header
        'login',
    ]);

    }
    public function cadastro(){
        if(Carregador::layout([
            'cadastro',
        ]));
    }

    public function cadastro_cliente(){
        
           $sla = new Users();
           $sla -> registrar_cliente();
    }

    /*public function cadastro_user(){
        $ql = new Users();
        $ql->registrar_cliente();
    }*/
    public function lista(){
        carregador::layout([
            'lista',
        ]);
    }
}
