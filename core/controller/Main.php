<?php

namespace core\controller;

use core\Classes\carregador;

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

    public function lista(){
        carregador::layout([
            'lista',
        ]);
    }

    public function cadastro_sucesso(){
        carregador::layout([
            'cadastro_sucesso',
        ]);
    }
}