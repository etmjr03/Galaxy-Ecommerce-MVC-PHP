<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Page{

    /**
     * Método responsável por retornar o conteúdo (view) da nossa home
     * @return string
     */
    public static function getHome(){
        $variaveisHome = [
            'titulo'    => 'Galaxy e-commerce',
            'descricao' => 'Essa loja é de outro planeta!'
        ];

        //VIEW DA HOME
        $viewHome = View::renderizar('Pages/home', $variaveisHome);

        //VIEW DA PÁGINA
        return parent::getPage('Galaxy ecommerce - Home', $viewHome);
    }
}