<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function toko() {
        $data['action']="Toko";
        $data['title'] = 'Toko - Bawu Batealit Jepara';
        $data['banner_name'] = 'Toko';
        $data['content'] = 'produk/toko/index.php';
        $data['script'] = 'produk/toko/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function keranjang() {
        $data['action']="Keranjang";
        $data['title'] = 'Keranjang - Bawu Batealit Jepara';
        $data['banner_name'] = 'Keranjang';
        $data['content'] = 'produk/keranjang/index.php';
        $data['script'] = 'produk/keranjang/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function checkout() {
        $data['action']="Checkout";
        $data['title'] = 'Checkout - Bawu Batealit Jepara';
        $data['banner_name'] = 'Checkout';
        $data['content'] = 'produk/checkout/index.php';
        $data['script'] = 'produk/checkout/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function detailproduk() {
        $data['action']="DetailProduk";
        $data['title'] = 'Produk Detail- Bawu Batealit Jepara';
        $data['banner_name'] = 'Detail Produk';
        $data['content'] = 'produk/detailproduk/index.php';
        $data['script'] = 'produk/detailproduk/script.php';
        $this->load->view('layout/index.php', $data);
    }
    
}
