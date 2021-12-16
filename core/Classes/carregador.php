<?php

namespace core\Classes;

use Exception;

class Carregador
{
    //===================================================
    public static function layout($estrutura, $dados = null)
    {

        //Verifica se as estruturas é um array
        if (!is_array($estrutura)) {
            throw new Exception("Coleção de estruturas inválidas", 1);
        }

        //Variáveis
        if (!empty($dados) && is_array($dados)) {
            extract($dados);
        }

        //Apresenta as views da aplicação
        foreach ($estrutura as $sla) {
            include("core/Views/$sla.php");
        }
    }

    public static function clientelog()
    {
        //Verifica se existe um cliente com sessão iniciada
        return isset($_SESSION['cliente']);
    }

}