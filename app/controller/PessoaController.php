<?php


namespace app\controller;
use app\core\Controller;
use app\models\Pessoa;


class PessoaController extends Controller{
    
    public function index(){
        $pessoa = new Pessoa;
        $dados["pessoas"] = $pessoa->listarPessoas();
        $dados["view"] = "pessoa/Index";
        $this->load('template', $dados);
    }
    
}
