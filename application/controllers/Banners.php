<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Banners extends CI_Controller {

    public $category = 'Home.Banner';

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Template');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->model('BannerModel', 'Data', TRUE);

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
        $data = array('list' => $this->Data->getAllData($this->category));

        $this->template->set('javascript', '<link href="' . base_url() . 'theme/vendor/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>'
                . '<script src="' . base_url() . 'theme/vendor/datatables/jquery.dataTables.min.js"></script>'
                . '<script src="' . base_url() . 'theme/vendor/datatables/dataTables.bootstrap.min.js"></script> '
                . '<script src="' . base_url() . 'theme/js/datatables-work.js"></script>');

        $this->template->load('template_admin', 'contents', '/admin/banners/index', $data);
    }

    public function create() {
        $this->template->load('template_admin', 'contents', '/admin/banners/create');
    }

    public function do_create() {
        $this->Data->Title = utf8_encode($this->input->post('Title'));
        $this->Data->Description = utf8_encode($this->input->post('Description'));
        $this->Data->Sumary = utf8_encode($this->input->post('Sumary'));
        $this->Data->Category = $this->category;
        $this->Data->Save();

        $config['upload_path'] = 'uploads/banner/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->Data->UniqueId . "_g.jpg";
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
        } else {


            redirect('/Banners/Index');
        }

        $data = array("error" => $error);
        $this->template->load('template_admin', 'contents', '/admin/banners/create', $data);
    }

    public function delete() {
        $data = array("data" => $this->Data->getData($this->input->get('id')));
        $this->template->set('javascript', '');
        $this->template->load('template_admin', 'contents', 'admin/banners/delete', $data);
    }

    public function do_delete() {
        $this->Data->DataId = $this->input->post('DataId');
        $this->Data->delete();
        redirect('/banners');
    }

}
