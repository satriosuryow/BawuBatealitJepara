<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index() {
        $data['action']="Blog";
        $data['title'] = 'Blog - Bawu Batealit Jepara';
        $data['banner_name'] = 'You can expand students access to learning';
        $data['content'] = 'blog/index.php';
        $data['script'] = 'blog/script.php';
        $this->load->view('layout/index.php', $data);
    }
    
}
