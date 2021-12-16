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

    public function erro_login(){
        Carregador::layout([
            'Erro_login',
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
        Carregador::layout([
            'Listagem',
        ]);
        
        $email = ($_POST['email']);
        $senha = ($_POST['senha']);

        $sla = new Users();
        $sla -> verificar_lista($email, $senha);
    }

    public function editar(){
        Carregador::layout([
            'Editar',
        ]);

    }

    public function Editar2(){
        $nome = ($_POST['nome']);
        $cidade = ($_POST['cidade']);

        $edit = new Users();
        $edit -> editar($nome, $cidade);
    }

    public function delete(){
        Carregador::layout([
            'Delete',
        ]);
    }

    public function detalhes(){
        Carregador::layout([
            'Detalhes',
        ]);
    }
    
}
