<?php

class Item {
    private $iditem;
    private $nome;
    private $validade;
    private $valor;
    private $idingrediente;
    
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
