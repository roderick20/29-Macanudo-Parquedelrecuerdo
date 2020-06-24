<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
        $this->load->model('UserModel', 'User', TRUE);

        $model = new UserModel();
        $data = array('users' => $this->User->getUsers());

        $this->template->set('javascript', '<link href="' . base_url() . 'theme/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>'
                . '<script src="' . base_url() . 'theme/vendor/datatables/jquery.dataTables.min.js"></script>'
                . '<script src="' . base_url() . 'theme/vendor/datatables/dataTables.bootstrap4.min.js"></script> '
                . '<script src="' . base_url() . 'theme/js/datatables-work.js"></script>');

        $this->template->load('template_admin', 'contents', 'admin/users/index', $data);
    }

    public function create() {

        $data = array();
        $this->template->load('template_admin', 'contents', 'admin/users/create', $data);
    }

    public function do_create() {
        $this->load->model('UserModel', 'User', TRUE);

        $this->User->Name = $this->input->post('Name');
        $this->User->Email = $this->input->post('Email');
        $this->User->Password = $this->input->post('Password');
        $this->User->Enabled = $this->input->post('Enabled');


        $this->User->Save();

        redirect('/users');
    }

    public function update() {
        $this->load->model('UserModel', 'User', TRUE);

        $data = array("user" => $this->User->getUser($this->input->get('id')));
        $this->template->set('javascript', '');
        $this->template->load('template_admin', 'contents', 'admin/users/update', $data);
    }

    public function do_update() {
        $this->load->model('UserModel', 'User', TRUE);

        $this->User->Name = $this->input->post('Name');
        $this->User->Email = $this->input->post('Email');
        $this->User->Password = $this->input->post('Password');
        $this->User->Enabled = $this->input->post('Enabled');
        $this->User->UserId = $this->input->post('UserId');

        $this->User->Update();

        redirect('/users');
    }

    public function delete() {
        $this->load->model('UserModel', 'User', TRUE);

        $data = array("user" => $this->User->getUser($this->input->get('id')));

        $this->template->set('javascript', '');

        $this->template->load('template_admin', 'contents', 'admin/users/delete', $data);
    }

    public function do_delete() {

        $this->load->model('UserModel', 'User', TRUE);
        $this->User->delete($this->input->post('UserId'));
        redirect('/users');
    }

}
