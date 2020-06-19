<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Template');
    }

    public function index() {
        $data = array();
        $this->template->set('title', 'Camposanto Católico que pone a su disposición un ambiente de respeto, solemnidad y calidez');
        $this->template->load('template', 'contents', 'public/pages/index', $data);
    }
    
    public function crematorio() {
        $data = array();
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/pages/crematorio', $data);
    }
    
    public function sepulturas() {
        $data = array();
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/pages/sepulturas', $data);
    }
    
    public function galeria() {
        $data = array();
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/pages/galeria', $data);
    }
    
    public function preguntas_frecuentes() {
        $data = array();
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/pages/preguntas_frecuentes', $data);
    }
    
    public function contacto() {
        $data = array();
        $this->template->set('title', 'Servicios');
        //$this->template->set('active', 'Home');
        $this->template->load('template', 'contents', 'public/pages/contacto', $data);
    }
    

}
