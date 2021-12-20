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

    public function editar_cliente(){
        Carregador::layout([
            'Editar_Sucesso',
        ]);

        $edit = new Users();
        $edit -> editar_cliente();
    }

    public function delete(){
        Carregador::layout([
            'Delete',
        ]);

    }

    public function deletar(){

        Carregador::layout([
            'Deletar',
        ]);

        $delete = new Users();
        $delete -> delete_cliente();

    }

    public function detalhes(){
        Carregador::layout([
            'Detalhes',
        ]);
    }
    
}
