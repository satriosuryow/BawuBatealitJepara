<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah extends CI_Controller {

    public function index() {
        $data['action']="Sejarah";
        $data['title'] = 'Sejarah - Bawu Batealit Jepara';
        $data['banner_name'] = 'Sejarah';
        $data['content'] = 'sejarah/index.php';
        $data['script'] = 'sejarah/script.php';
        $this->load->view('layout/index.php', $data);
    }
    
}
