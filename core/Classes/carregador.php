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

        //Apresnetar as views da aplicação
        foreach ($estrutura as $sla) {
            include("core/Views/$sla.php");
        }
    }

    public static function clientelog()
    {
        //Verifica se existe um cliente com sessão iniciada
        return isset($_SESSION['cliente']);
    }

    /*public static function criarhash($num_caracter = 12)
    {
        //criar hash
        $chars = '01234567890123456789abcdefghijklmnopqrstuvxwyzabcdefghijklmnopqrstuvxwyzABCDEFGHIJKLMNOPQRSTUVXWYZABCDEFGHIJKLMNOPQRSTUVXWYZ';
        return substr(str_shuffle($chars), 0, $num_caracter);
    }

    public static function redirect($rota = ''){

        //faz o redirecionamento para a URL desejada (rota)
        //header("Location: " . 'http://localhost:8000' . "/$rota");
    }*/
}