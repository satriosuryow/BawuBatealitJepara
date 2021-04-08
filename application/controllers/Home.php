<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data['action']="Home";
        $data['title'] = 'Home - Bawu Batealit Jepara';
        $data['content'] = 'home/index.php';
        $data['script'] = 'home/script.php';
        $this->load->view('layout/index.php', $data);
    }
    
}
