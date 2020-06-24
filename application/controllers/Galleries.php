<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galleries extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Template');
        $this->load->library('session');
        $this->load->helper('form');

        $action = $this->router->fetch_method();
        $class = $this->router->fetch_method();
        if (!isset($_SESSION['user'])) {
            if ($action == strtolower("login") || strtolower($action) == "do_login") {
                
            } else {
                redirect("/admin/login");
            }
        }
    }

    public function index() {
        $this->load->helper('url');
        $this->load->model('GalleryModel');

        $model = new GalleryModel();
        $data = array('galleries' => $model->GetAll());

        $this->template->set('javascript', '<link href="' . base_url() . 'theme/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>'
                . '<script src="' . base_url() . 'theme/vendor/datatables/jquery.dataTables.min.js"></script>'
                . '<script src="' . base_url() . 'theme/vendor/datatables/dataTables.bootstrap4.min.js"></script> '
                . '<script src="' . base_url() . 'theme/js/datatables-work.js"></script>');

        $this->template->load('template_admin', 'contents', 'galleries/index', $data);
    }

    public function create() {
        $this->load->helper('url');
        $data = array();
        $this->template->load('template_admin', 'contents', 'galleries/create', $data);
    }

    public function do_create() {

        $this->load->helper('url');
        $this->load->model('GalleryModel');

        $this->load->model('GalleryModel');
        $model = new GalleryModel();
        $model->Name = $this->input->post('Name');
        $model->Save();
        redirect('/Galleries/Index');



        //$this->template->load('template_admin', 'contents', 'galleries/create', $data);
    }

    public function update() {
        $this->load->helper('url');
        $this->load->model('GalleryModel');

        $model = new GalleryModel();
        $model->GalleryID = $this->input->get('id');
        $data = array("gallery" => $model->Get());

        $this->template->load('template_admin', 'contents', 'galleries/update', $data);
    }

    public function do_update() {
        $this->load->helper('url');
        $this->load->model('GalleryModel');
        $model = new GalleryModel();
        $model->GalleryID = $this->input->post('GalleryID');
        $model->Name = $this->input->post('Name');
        $model->Update();
        redirect('/Galleries/Index');
    }

    public function delete() {
        $this->load->helper('url');
        $this->load->model('GalleryModel');

        $model = new GalleryModel();
        $model->GalleryID = $this->input->get('id');
        $data = array("gallery" => $model->Get());

        $this->template->load('template_admin', 'contents', 'galleries/delete', $data);
    }

    public function do_delete() {
        $this->load->helper('url');
        $this->load->model('GalleryModel');

        $model = new GalleryModel();
        $model->GalleryID = $this->input->post('GalleryID');
        $model->Delete();

        redirect('/Galleries/Index');
    }

}
