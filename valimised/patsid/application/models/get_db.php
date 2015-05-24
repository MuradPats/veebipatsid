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
    function getAll3(){
        $query = $this->db->query("SELECT * FROM erakon1");
        return $query->result();
    }
    function getAll4(){
        $query = $this->db->query("SELECT * FROM ringkon1");
        return $query->result();
    }
    function getAll5(){
        $query = $this->db->query("SELECT * FROM lol3");
        return $query->result();
    }
    

    
    function insert($data){
        $this->db->insert("Kandidaadid", $data);
    }
    function insert2($data){
        $this->db->insert("Haaled", $data);
    }
    function delete($data){
        $this->db->query("DELETE FROM Haaled WHERE Valija='$data'");
    }

}

?>