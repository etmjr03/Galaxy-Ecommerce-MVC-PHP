<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page{

    /**
     * Método responsável por retornar o conteúdo (view) da nossa Page (página genérica)
     * @param titulo string
     * @param conteudo html
     * @return string
     */
    public static function getPage($titulo, $conteudo){
        $variaveisHome = [
            'tituloPagina'    => $titulo,
            'conteudo' => $conteudo
        ];

        return View::renderizar('Pages/page', $variaveisHome);
    }
}