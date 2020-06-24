<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public $category = 'Blog.Category';

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Template');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->model('DataModel', 'Data', TRUE);

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

        $this->template->set('javascript', '<link href="' . base_url() . 'theme/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>'
                . '<script src="' . base_url() . 'theme/vendor/datatables/jquery.dataTables.min.js"></script>'
                . '<script src="' . base_url() . 'theme/vendor/datatables/dataTables.bootstrap4.min.js"></script> '
                . '<script src="' . base_url() . 'theme/js/datatables-work.js"></script>');

        $this->template->load('template_admin', 'contents', '/admin/categories/index', $data);
    }

    public function create() {
        $this->template->load('template_admin', 'contents', '/admin/categories/create');
    }

    public function do_create() {
        $this->Data->Title = $this->input->post('Title');
        $this->Data->Category = $this->category;
        $this->Data->Save();
        redirect('/categories');
    }

    public function update() {
        $data = array("data" => $this->Data->getData($this->input->get('id')));
        $this->template->set('javascript', '');
        $this->template->load('template_admin', 'contents', 'admin/categories/update', $data);
    }

    public function do_update() {       
        $this->Data->DataId = $this->input->post('DataId');
        $this->Data->Title = $this->input->post('Title');
        $this->Data->Update();
        redirect('/categories');
    }

    public function delete() {
        $data = array("data" => $this->Data->getData($this->input->get('id')));
        $this->template->set('javascript', '');
        $this->template->load('template_admin', 'contents', 'admin/categories/delete', $data);
    }

    public function do_delete() {
        $this->Data->DataId = $this->input->post('DataId');
        $this->Data->delete();
        redirect('/categories');
    }
}
