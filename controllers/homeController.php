<?php
class homeController extends controller {

    public function index(){
        $dados = array(
            'quantidade' => 5,
            'nome' => 'Jefferson',
            'idade' => 99
        );
       
        $this->loadTemplate('home', $dados);
    }
}