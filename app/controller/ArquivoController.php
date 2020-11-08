<?php


namespace app\controller;
use app\core\Controller;

/**
 * Description of ArquivoController
 *
 * @author Elton Marques
 */
class ArquivoController extends Controller{
   
    public function index(){
        $dados = [
            'codigo' => '123456',
            'nome'   => 'ELTON MARQUES'
        ];
        $this->load('v_arquivo', $dados);
    }
    
}
