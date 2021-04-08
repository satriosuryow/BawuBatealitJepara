<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

    public function aboutus()
    {
        $data['action'] = 'AboutUs';
        $data['title'] = 'Pages - Bawu Batealit Jepara';
        $data['banner_name'] = 'About Us';
        $data['content'] = 'pages/aboutus/index.php';
        $data['script'] = 'pages/aboutus/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function contactus()
    {
        $data['action'] = 'ContactUs';
        $data['title'] = 'Pages - Bawu Batealit Jepara';
        $data['banner_name'] = 'Contact Us';
        $data['content'] = 'pages/contactus/index.php';
        $data['script'] = 'pages/contactus/script.php';
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
