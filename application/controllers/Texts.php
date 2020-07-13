<?php

class Texts extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Template');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->model('TextModel', 'Data', TRUE);

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
        $data = array();

        $this->template->set('javascript', '<link href="/assets/theme_admin/vendor/jstree/themes/default/style.min.css" rel="stylesheet" type="text/css"/>
        <script src="/assets/theme_admin/vendor/jstree/jstree.min.js" type="text/javascript"></script>
        <script> $(function () { $("#html1").jstree().bind("select_node.jstree", function (e, data) { var href = data.node.a_attr.href; document.location.href = href;}); });</script>');

        $this->template->load('template_admin', 'contents', '/admin/texts/index', $data);
    }

    public function update() {
        
        
        $this->template->set('javascript', '<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
            <script> $(function () { $("#Description").summernote({tabsize: 2,height: 300}); }); </script>');
        

        $text = $this->Data->getDataByCategory($this->input->get('id'));

        if (!isset($text)) {
            $this->Data->Title = $this->input->get('title');
            $this->Data->Description = "";
            $this->Data->Sumary = "";
            $this->Data->Category = $this->input->get('id');
            $this->Data->Save();
            
            $text = $this->Data->getDataByCategory($this->input->get('id'));
        }

        $data = array("data" => $text);


        $this->template->load('template_admin', 'contents', '/admin/texts/update', $data);
    }
    
    public function do_update() {       
        
        
        $this->Data->DataId = $this->input->post('DataId');
        $this->Data->Description = $this->input->post('Description');
        $this->Data->Update();
        redirect('/texts');
    }

}
