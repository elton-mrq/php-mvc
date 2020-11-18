<?php

namespace app\core;
/**
 * Classe responsável por gerenciar o carregamento
 * das Views e dados das models
 *
 * @author Elton Marques
 */
class Controller {
    
    public function load($viewName, $viewData = []){
        extract($viewData);
        require 'app/views/' . $viewName . '.php';
    }
    
}
