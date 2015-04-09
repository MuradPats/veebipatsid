<?php
class Insert extends CI_Controller {
    function insertValues(){
        $this->load->model("get_db");
        $newRow = array(
            "Name" => $_POST["Name"];
            "Erakond" => $_POST["Erakond"];
            "Ringkond" =>$_POST["Ringkond"];
        )
        $this->get_db->insert($newRow);
    }
}
>