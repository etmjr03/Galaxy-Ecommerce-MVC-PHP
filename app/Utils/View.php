<?php

namespace App\Utils;

class View{

    /**
     * Método responsável por retornar o conteúdo de uma view
     * @param string $view
     * @return string
     */
    private static function getConteudoView($view){
        $arquivo = __DIR__.'/../../resources/view/'.$view.'.html';

        return file_exists($arquivo) ? file_get_contents($arquivo) : '';
    }

    /**
     * Método responsável por retornar o conteúdo renderizado de uma view
     * @param string $view
     * @param array $variaveis (string/number)
     * @return string
     */
    public static function renderizar($view, $variaveis = []){
        //CONTEÚDO DA VIEW
        $contenteudoView = self::getConteudoView($view);

        //NOMES DAS KEY DO ARRAY COMO NOME DE VARIÁVEIS
        $chavesArray = array_keys($variaveis);
        $chavesArray = array_map(function($item){
            return '{{'.$item.'}}';
        },$chavesArray);

        //NOMES DOS VALORES DO ARRAY COMO CONTEÚDO DAS VARIÁVEIS
        $valoresArray = array_values($variaveis);

        //RETORNA O CONTEÚDO RENDERIZADO
        return str_replace($chavesArray, $valoresArray, $contenteudoView);
    }
}