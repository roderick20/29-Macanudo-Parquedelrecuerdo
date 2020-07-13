<?php

class Admin extends CI_Controller {

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
        $this->template->set('javascript', '');
        $this->template->load('template_admin', 'contents', 'admin/admin/index');
    }

    public function login() {
        $user = $this->session->userdata('user_data');
        $data = array('message' => $user);
        $this->template->load('template_login', 'contents', 'admin/admin/login', $data);
    }

    public function do_login() {
        $this->load->model('UserModel', 'User', TRUE);
        $this->User->Email = $this->input->post('Email');
        $this->User->Password = $this->input->post('Password');
        $user = $this->User->login();

        if (isset($user)) {
            $_SESSION['user'] = $user;
            redirect('/Admin/Index');
        } else {
            $data = array('message' => "Error usuario o password incorrecto");
            $this->template->load('template_login', 'contents', 'admin/admin/login', $data);
        }
    }

    public function logout() {
        $_SESSION['user'] = null;
        session_destroy();
        redirect("/admin/login");
    }

}
