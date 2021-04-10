<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function bloggeneral() {
        $data['action']="Blog";
        $data['title'] = 'Blog - Bawu Batealit Jepara';
        $data['banner_name'] = 'You can expand students access to learning';
        $data['content'] = 'blog/bloggeneral/index.php';
        $data['script'] = 'blog/blogdetail/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function blogdetail() {
        $data['action']="Blog";
        $data['title'] = 'Blog - Bawu Batealit Jepara';
        $data['banner_name'] = 'You can expand students access to learning';
        $data['content'] = 'blog/blogdetail/index.php';
        $data['script'] = 'blog/bloggeneral/script.php';
        $this->load->view('layout/index.php', $data);
    }
    
}
