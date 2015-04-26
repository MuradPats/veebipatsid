<?php
class MY_Controller extends CI_Controller {
    function sisselogimine(){
        if(! $this->input->is_ajax_request()) {
            redirect('404');
        }
        else {
        $this->session->set_userdata('logged_in', TRUE);
        }
    }
    function valjalogimine(){
        if(! $this->input->is_ajax_request()) {
            redirect('404');
        }
        else {
        $this->session->set_userdata('logged_in', FALSE);
        }
    }
    public function test(){
        if(! $this->input->is_ajax_request()) {
            echo 'tere1';
        }
        echo 'tere';
    }
}