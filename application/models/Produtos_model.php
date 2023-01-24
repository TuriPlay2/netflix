<?php

class Produtos_model extends CI_Model{

    public $table = "produtos";

    public function list(){
        return $this->db->get('produtos')->result_array();
    }

    public function insert($dados){
        return $this->db->insert("produtos", $dados);
    }
    public function update($dados, $id){
        $this->db->where("id", $id);
        return $this->db->update("produtos", $dados);
    }
    public function delete($id){
        $this->db->where("id", $id);
        return $this->db->delete("produtos");
    }
}