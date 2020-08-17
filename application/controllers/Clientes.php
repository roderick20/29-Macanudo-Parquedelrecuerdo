<?php

class Clientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Template');
       // $this->load->library('session');
        $this->load->helper('form');

        $action = $this->router->fetch_method();
        $class = $this->router->fetch_method();
//        if (!isset($_SESSION['user'])) {
//            if ($action == strtolower("login") || strtolower($action) == "do_login") {
//                
//            } else {
//                redirect("/admin/login");
//            }
//        }
    }

    public function index() {
        $this->template->set('javascript', '');
        $this->template->load('template_clientes', 'contents', 'clientes/index');
    }
    
    public function datos_personales() {
        $this->template->set('javascript', '');
        $this->template->load('template_clientes', 'contents', 'clientes/datos_personales');
    }
    
    public function contratos() {
        $this->template->set('javascript', '');
        $this->template->load('template_clientes', 'contents', 'clientes/contratos');
    }
    
    public function estado_abono() {
        $this->template->set('javascript', '');
        $this->template->load('template_clientes', 'contents', 'clientes/estado_abono');
    }
    
    public function cronograma_abono() {
        $this->template->set('javascript', '');
        $this->template->load('template_clientes', 'contents', 'clientes/cronograma_abono');
    }
       
    
    public function estipedios_contrato() {
        $this->template->set('javascript', '');
        $this->template->load('template_clientes', 'contents', 'clientes/estipedios_contrato');
    }
    
    public function estipedios_pagados() {
        $this->template->set('javascript', '');
        $this->template->load('template_clientes', 'contents', 'clientes/estipedios_pagados');
    }
    
    public function confirmar_abono() {
        $this->template->set('javascript', '');
        $this->template->load('template_clientes', 'contents', 'clientes/confirmar_abono');
    }

}
