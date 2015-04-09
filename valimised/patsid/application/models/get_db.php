<?php

class Get_db extends CI_Model{
    function getAll(){
        $query = $this->db->query("SELECT * FROM kandid");
        return $query->result();
    }
    function getAll2(){
        $query = $this->db->query("SELECT * FROM counter");
        return $query->result();
    }

    
    function insert($data){
        $this->db->insert("Kandidaadid", $data);
    }
    function insert2($data){
        $this->db->insert("Haaled", $data);
    }

}

?>