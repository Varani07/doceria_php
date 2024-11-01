<?php

require_once 'DB.php';

class ItemDAO {
    public function list($id = null) {
        $where = ($id ? "where it.iditem = $id":'');
        $query = "SELECT it.iditem, it.nome, ig.descricao, it.validade, it.valor FROM ingredientes ig INNER JOIN item it ON it.idingredientes = ig.idingredientes $where";
        $conn = DB::getInstancia()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
    public function insert(Item $obj) {
        $query = "INSERT INTO item (iditem, nome, validade, valor, idingredientes) VALUES (null,:p_nome, :p_validade, :p_valor, :p_idingredientes)";
        $conn = DB::getInstancia()->prepare($query);
        $conn->execute(array(':p_nome'=>$obj->nome, ':p_validade'=>$obj->validade, ':p_valor'=>$obj->valor, ':p_idingredientes'=>$obj->idingredientes));
        return $conn->rowCount()>0;
    }
    
    public function update(Item $obj) {
        $query = "UPDATE item set nome = :p_nome, validade = :p_validade, valor = :p_valor, idingredientes = :p_idingredientes  where iditem = :p_iditem";
        $conn = DB::getInstancia()->prepare($query);
        $conn->execute(array(':nome'=>$obj->nome, ':p_validade'=>$obj->validade, ':p_valor'=>$obj->valor, ':p_idingredientes'=>$obj->idingredientes, ':p_iditem'=>$obj->iditem));
        return $conn->rowCount()>0;
    }
    
    public function delete($id) {
        $query = "DELETE from receita where iditem = :p_id";
        $conn = DB::getInstancia()->prepare($query);
        $conn->execute(array(':p_id'=>$id));
        return $conn->rowcount()>0;
    }
}
