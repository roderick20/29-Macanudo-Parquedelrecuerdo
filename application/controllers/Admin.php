<?php

//session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Template');

        //$this->load->library('session');
        //$this->load->helper('url');

        $this->load->model('UserModel', 'User', TRUE);

        $this->User->save();

        //$action = $this->router->fetch_method();

        /* $user = $this->session->userdata('user_data');
          if (!isset($user)) {
          if ($action != "Login" && strtolower($action) != "do_login") {
          redirect("/admin/login");
          }
          } else {
          return true;
          } */
    }

    public function login() {
        $this->load->helper('url');

        $data = array();
        $this->template->set('title', 'Home');
        $this->template->load('template_login', 'contents', 'admin/admin/login', $data);
    }

    public function do_login() {
        $this->load->library('session');
        $this->load->helper('url');

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = array('user_data' => array(
                'admin' => 'admin',
                'id' => 1,
            )
        );
        $this->session->set_userdata($data);

        redirect('/Admin/Index');
    }

    public function logout() {


        //removing session  
        $this->session->unset_userdata('user');
        redirect("Login");
    }

    public function index() {
        $this->load->helper('url');
        $data = array();
        $this->template->load('template_admin', 'contents', 'admin/index', $data);
    }

}
