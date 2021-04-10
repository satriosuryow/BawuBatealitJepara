<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

    public function tentangkami()
    {
        $data['action'] = 'tentangkami';
        $data['title'] = 'Pages - Bawu Batealit Jepara';
        $data['banner_name'] = 'Tentang Kami';
        $data['content'] = 'pages/tentangkami/index.php';
        $data['script'] = 'pages/tentangkami/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function hubungikami()
    {
        $data['action'] = 'hubungikami';
        $data['title'] = 'Pages - Bawu Batealit Jepara';
        $data['banner_name'] = 'Hubungi Kami';
        $data['content'] = 'pages/hubungikami/index.php';
        $data['script'] = 'pages/hubungikami/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function gallery()
    {
        $data['action'] = 'Gallery';
        $data['title'] = 'Pages - Bawu Batealit Jepara';
        $data['banner_name'] = 'Gallery';
        $data['content'] = 'pages/gallery/index.php';
        $data['script'] = 'pages/gallery/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function login()
    {
        $data['action'] = 'Login';
        $data['title'] = 'Pages - Bawu Batealit Jepara';
        $data['banner_name'] = 'Login';
        $data['content'] = 'pages/login/index.php';
        $data['script'] = 'pages/login/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function privacy()
    {
        $data['action'] = 'Privacy';
        $data['title'] = 'Pages - Bawu Batealit Jepara';
        $data['banner_name'] = 'Privacy';
        $data['content'] = 'pages/privacy/index.php';
        $data['script'] = 'pages/privacy/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function terms()
    {
        $data['action'] = 'Terms';
        $data['title'] = 'Pages - Bawu Batealit Jepara';
        $data['banner_name'] = 'Terms & Conditions';
        $data['content'] = 'pages/terms/index.php';
        $data['script'] = 'pages/terms/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function faqs()
    {
        $data['action'] = 'Faqs';
        $data['title'] = 'Pages - Bawu Batealit Jepara';
        $data['banner_name'] = 'FAQs';
        $data['content'] = 'pages/faqs/index.php';
        $data['script'] = 'pages/faqs/script.php';
        $this->load->view('layout/index.php', $data);
    }
    
}
