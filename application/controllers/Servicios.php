<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Template');
    }

    public function index() {
        $this->load->model('TextModel', 'Text', TRUE);
        $data = array(
            'texts' => $this->Text->getAllByCategory('Servicios')
        );
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/index', $data);
    }

    public function necesidad_futura() {
        $this->load->model('TextModel', 'Text', TRUE);
        $data = array(
            'texts' => $this->Text->getAllByCategory('ServiciosCompraAnticipada')
        );
        
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/necesidad_futura', $data);
    }

    public function necesidad_inmediata() {
        $this->load->model('TextModel', 'Text', TRUE);
        $data = array(
            'texts' => $this->Text->getAllByCategory('ServiciosCompraInaplazable')
        );
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/necesidad_inmediata', $data);
    }

    public function cremacion() {
        $this->load->model('TextModel', 'Text', TRUE);
        $data = array(
            'texts' => $this->Text->getAllByCategory('ServiciosCremacion')
        );
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/cremacion', $data);
    }

    public function sepelio() {
        $this->load->model('TextModel', 'Text', TRUE);
        $data = array(
            'texts' => $this->Text->getAllByCategory('ServiciosSepelio')
        );
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/sepelio', $data);
    }

    public function velatorios() {
        $this->load->model('TextModel', 'Text', TRUE);
        $data = array(
            'texts' => $this->Text->getAllByCategory('ServiciosVelatorios')
        );
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/velatorios', $data);
    }

    public function otros_servicios() {
        $this->load->model('TextModel', 'Text', TRUE);
        $data = array(
            'texts' => $this->Text->getAllByCategory('ServiciosOtrosServicios')
        );
        $this->template->set('title', 'Servicios');
        $this->template->load('template', 'contents', 'public/servicios/otros_servicios', $data);
    }

}
