<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Template');
    }

    public function index() {
        $this->load->model('BannerModel', 'Data', TRUE);
        $data = array('list' => $this->Data->getAllData('Home.Banner'));

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

    public function buscador() {
        $data = array();
        $this->template->set('title', 'Buscador');
        //$this->template->set('active', 'Home');
        $this->template->load('template', 'contents', 'public/pages/buscador', $data);
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

}
