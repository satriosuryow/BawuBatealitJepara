<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller {

    public function index() {
        $data['action']="Beranda";
        $data['title'] = 'Beranda - Bawu Batealit Jepara';
        $data['content'] = 'beranda/index.php';
        $data['script'] = 'beranda/script.php';
        $this->load->view('layout/index.php', $data);
    }
    
}
