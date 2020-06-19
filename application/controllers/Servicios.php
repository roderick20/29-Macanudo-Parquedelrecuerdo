<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Template');
    }

    public function index() {
        $data = array();
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/index', $data);
    }

    public function necesidad_futura() {
        $data = array();
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/necesidad_futura', $data);
    }

    public function necesidad_inmediata() {
        $data = array();
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/necesidad_inmediata', $data);
    }

    public function cremacion() {
        $data = array();
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/cremacion', $data);
    }

    public function sepelio() {
        $data = array();
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/sepelio', $data);
    }

    public function velatorios() {
        $data = array();
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/velatorios', $data);
    }

    public function otros_servicios() {
        $data = array();
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/otros_servicios', $data);
    }

}
