<?php

require_once 'DB.php';

class ReceitaDAO {
    public function list($id = null) {
        $where = ($id ? "where idreceita = $id":'');
        $query = "SELECT * FROM receita $where";
        $conn = DB::getInstancia()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
    public function insert(Receita $obj) {
        $query = "INSERT INTO receita (idreceita, nome) VALUES (null,:nome)";
        $conn = DB::getInstancia()->prepare($query);
        $conn->execute(array(':nome'=>$obj->nome));
        return $conn->rowCount()>0;
    }
    
    public function update(Receita $obj) {
        $query = "UPDATE receita set nome = :p_nome where idreceita = :p_idreceita";
        $conn = DB::getInstancia()->prepare($query);
        $conn->execute(array(':p_nome'=>$obj->nome, ':p_idreceita'=>$obj->idreceita));
        return $conn->rowCount()>0;
    }
    
    public function delete($id) {
        $query = "DELETE from receita where idreceita = :p_id";
        $conn = DB::getInstancia()->prepare($query);
        $conn->execute(array(':p_id'=>$id));
        return $conn->rowcount()>0;
    }
}
