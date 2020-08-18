<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

    public $category = 'Blog.Posts';

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Template');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->model('PostModel', 'Data', TRUE);

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

        $this->template->set('javascript', '<link href="' . base_url() . 'assets/theme_admin/vendor/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>'
                . '<script src="' . base_url() . 'assets/theme_admin/vendor/datatables/jquery.dataTables.min.js"></script>'
                . '<script src="' . base_url() . 'assets/theme_admin/vendor/datatables/dataTables.bootstrap.min.js"></script> '
                . '<script src="' . base_url() . 'assets/theme_admin/js/datatables-work.js"></script>');

        $this->template->load('template_admin', 'contents', '/admin/posts/index', $data);
    }

    public function create() {
        $this->template->set('javascript', '<link href="' . base_url() . 'assets/theme_admin/vendor/summernote/summernote-bs4.css" rel="stylesheet" type="text/css"/>'
                . '<script src="' . base_url() . 'assets/theme_admin/vendor/summernote/summernote-bs4.js" type="text/javascript"></script> '
                . '<script src="' . base_url() . 'assets/theme_admin/js/summernote-work.js" type="text/javascript"></script> ');

        $this->template->load('template_admin', 'contents', '/admin/posts/create');
    }

    public function do_create() {
        $this->Data->Title = $this->input->post('Title');
        $this->Data->Description = $this->input->post('Description');
        $this->Data->Sumary = $this->input->post('Sumary');
        $this->Data->Slug = $this->input->post('Slug');
        $this->Data->Category = $this->category;
        $this->Data->Save();
        redirect('/posts');
    }

    public function upload_imagen() {
        $data = array("UniqueId" => $this->input->get('uniqueid'), "Type" => $this->input->get('type'));
        //$this->template->set('javascript', '');
        $this->template->load('template_admin', 'contents', '/admin/posts/upload_imagen', $data);
    }

    public function do_upload_imagen() {
        $type = $this->input->post('Type');
        $config['upload_path'] = 'uploads/post/';
        $config['allowed_types'] = 'gif|jpg|png';
        if ($type == 'p') {
            $config['file_name'] = $this->input->post('UniqueId') . "_p.jpg";
            $this->Data->Imagen_p = $this->input->post('UniqueId') . "_p.jpg";
            $this->load->library('upload', $config);
            $data = array("error" => $this->upload->display_errors());
            $this->template->load('template_admin', 'contents', '/admin/posts/upload_imagen', $data);
            
        }
        if ($type == 'g') {
            $config['file_name'] = $this->input->post('UniqueId') . "_g.jpg";
            $this->Data->Imagen_g = $this->input->post('UniqueId') . "_g.jpg";
            $this->load->library('upload', $config);
        }
        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }
        $this->Data->UniqueId = $this->input->post('UniqueId');
        $this->Data->update_imagen($type);
        redirect('/posts');
    }

    public function update() {
        $this->template->set('javascript', '<link href="' . base_url() . 'assets/theme_admin/vendor/summernote/summernote-bs4.css" rel="stylesheet" type="text/css"/>'
                . '<script src="' . base_url() . 'assets/theme_admin/vendor/summernote/summernote-bs4.js" type="text/javascript"></script> '
                . '<script src="' . base_url() . 'assets/theme_admin/js/summernote-work.js" type="text/javascript"></script> ');

        $data = array("data" => $this->Data->getData($this->input->get('id')));
        $this->template->load('template_admin', 'contents', 'admin/posts/update', $data);
    }

    public function do_update() {
        $this->Data->DataId = $this->input->post('DataId');
        $this->Data->Title = $this->input->post('Title');
        $this->Data->Description = $this->input->post('Description');
        $this->Data->Sumary = $this->input->post('Sumary');
        $this->Data->Slug = $this->input->post('Slug');
        $this->Data->Category = $this->category;
        $this->Data->Update();
        redirect('/posts');
    }

    public function delete() {
        $data = array("data" => $this->Data->getData($this->input->get('id')));
        $this->template->set('javascript', '');
        $this->template->load('template_admin', 'contents', 'admin/posts/delete', $data);
    }

    public function do_delete() {
        $this->Data->DataId = $this->input->post('DataId');
        $this->Data->delete();
        redirect('/posts');
    }

}
