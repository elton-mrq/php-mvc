<?php

namespace app\core;
/**
 * Classe responsável por gerenciar o carregamento
 * das Views e dados das models
 *
 * @author Elton Marques
 */
class Controller {
    
    public function load($view, $viewDados = []){
        extract($viewDados);
        require 'app/views/' . $view . '.php';
    }
    
}
