<?php

class Receita {
    private $idreceita;
    private $nome;
    
    public function __construct() {
        ;
    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name = $value;
    }
}
?>