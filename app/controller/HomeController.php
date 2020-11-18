<?php

namespace app\controller;
use app\core\Controller;

/**
 * Controller Padrão
 *
 * @author Elton Marques
 */
class HomeController extends Controller {
    
    public function index(){
        
        $dados["view"] = "home";
        $this->load('template', $dados);
        
    }
    
}
