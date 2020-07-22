<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Template');
        //$this->load->library('email');
        $this->load->helper('form');
    }

    public function index() {
        $this->load->model('BannerModel', 'Data', TRUE);
        $this->load->model('TextModel', 'Text', TRUE);



        $data = array(
            'list' => $this->Data->getAllData('Home.Banner'),
            'texts' => $this->Text->getAllByCategory('Inicio'),
        );

        $this->template->set('title', 'Camposanto Católico que pone a su disposición un ambiente de respeto, solemnidad y calidez');
        $this->template->load('template', 'contents', 'public/pages/index', $data);
    }

    public function crematorio() {
        $this->load->model('TextModel', 'Text', TRUE);
        $data = array(
            'texts' => $this->Text->getAllByCategory('Crematorio'),
        );
        $this->template->set('title', 'Crematório');
        $this->template->load('template', 'contents', 'public/pages/crematorio', $data);
    }

    public function ubicacion() {
        $data = array(
            'NombreCompleto' => $this->input->get('NombreCompleto'),
            'FechaNacimiento' => $this->input->get('FechaNacimiento'),
            'FechaDefuncion' => $this->input->get('FechaDefuncion'),
            'Plataforma' => $this->input->get('Plataforma'),
            'Ubicacion' => $this->input->get('Ubicacion'),
            'IdPlataforma' => $this->input->get('IdPlataforma')
        );

        $this->template->set('title', 'Ubicación');
        $this->template->load('template', 'contents', 'public/pages/ubicacion', $data);
    }

    public function sepulturas() {
        $this->load->model('TextModel', 'Text', TRUE);
        $data = array(
            'texts' => $this->Text->getAllByCategory('Sepulturas'),
        );
        $this->template->set('title', 'Sepulturas');
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

    public function politica_privacidad() {
        $data = array();
        $this->template->set('title', 'Servicios');
        //$this->template->set('active', 'Home');
        $this->template->load('template', 'contents', 'public/pages/politica_privacidad', $data);
    }

    public function buscador() {
        $data = array('list' => null);
        $this->template->set('title', 'Buscador');
        //$this->template->set('active', 'Home');
        $this->template->load('template', 'contents', 'public/pages/buscador', $data);
    }

    public function do_buscador() {
        $getCsrfName = $this->security->get_csrf_token_name();
        $getCsrfHash = $this->security->get_csrf_hash();
        $csrfToken = $this->input->post($getCsrfName);

        if ($getCsrfHash == $csrfToken) {

            if ($this->input->post('action') == 'tumbas') {
                $this->load->model('DataModel', 'Data', TRUE);
                $data = array('list' => $this->Data->buscar($this->input->post('nombre')), 'type' => 'tumbas');
                $this->template->set('title', 'Buscador');
                $this->template->load('template', 'contents', 'public/pages/buscador', $data);
            }
            if ($this->input->post('action') == 'sepelios') {
                $this->load->model('DataModel', 'Data', TRUE);
                $data = array('list' => $this->Data->buscar_sepelios($this->input->post('nombre')), 'type' => 'sepelios');
                $this->template->set('title', 'Buscador');
                $this->template->load('template', 'contents', 'public/pages/buscador', $data);
            }
        } else {
            $data = array('list' => null);
            $this->template->set('title', 'Buscador');
            $this->template->load('template', 'contents', 'public/pages/buscador', $data);
        }
    }

    public function blog() {
        $this->template->set('title', 'Blog');
        $this->load->model('PostModel', 'Data', TRUE);
        $data = array('list' => $this->Data->getAllData('Blog.Posts'));
        $this->template->load('template', 'contents', 'public/pages/blog', $data);
    }

    public function post($slug) {
        $this->load->model('PostModel', 'Data', TRUE);
        $data = array('item' => $this->Data->getDataBySlug($slug));
        $this->template->load('template', 'contents', 'public/pages/post', $data);
    }

    public function ContactenosForm() {
        $getCsrfName = $this->security->get_csrf_token_name();
        $getCsrfHash = $this->security->get_csrf_hash();
        $csrfToken = $this->input->post($getCsrfName);

        if ($getCsrfHash == $csrfToken) {
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'agile.sendmail@gmail.com',
                'smtp_pass' => 'Aladino?09',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1'
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            $this->email->from('agile.sendmail@gmail.com');
            $this->email->to($this->input->post('email'));
            $this->email->subject('Informacion desde pagina Web');

            $mensaje = '<style>table, th, td { border: 1px solid black; }</style>'
                    . '<table >'
                    . '<tr><td>Nombre</td><td>' . $this->input->post('nombre') . '</td></tr>'
                    . '<tr><td>Apellido</td><td>' . $this->input->post('apellidos') . '</td></tr>'
                    . '<tr><td>Telefono</td><td>' . $this->input->post('telefono') . '</td></tr>'
                    . '<tr><td>Email</td><td>' . $this->input->post('email') . '</td></tr>'
                    . '<tr><td>Pagina</td><td>' . $this->input->post('pagina') . '</td></tr>'
                    . '<tr><td>Mensaje</td><td>' . $this->input->post('mensaje') . '</td></tr>'
                    . '</table>';

            $this->email->message($mensaje);

            if ($this->email->send()) {
                $reponse = array(
                    'csrfName' => $this->security->get_csrf_token_name(),
                    'csrfHash' => $this->security->get_csrf_hash(),
                    'rultado' => 'ok'
                );

                echo json_encode($reponse);
            } else {
                $reponse = array(
                    'csrfName' => $this->security->get_csrf_token_name(),
                    'csrfHash' => $this->security->get_csrf_hash(),
                    'rultado' => 'mal'
                );

                echo json_encode($reponse);
            }
        } else {
            $reponse = array(
                'csrfName' => $this->security->get_csrf_token_name(),
                'csrfHash' => $this->security->get_csrf_hash(),
                'rultado' => 'mal'
            );

            echo json_encode($reponse);
        }
    }

//    public function form_contacto($slug) {
////        $this->load->model('PostModel', 'Data', TRUE);
//        $data = array('item' => '');
//        $this->template->load('template', 'contents', 'public/pages/form_contacto', $data);
//    }
}
