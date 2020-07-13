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
        $this->load->model('DataModel', 'Data', TRUE);
        $data = array('list' => $this->Data->buscar($this->input->post('nombre')));
        $this->template->set('title', 'Buscador');
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

    var $email = '<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
                <div class="vc_row wpb_row vc_inner vc_row-fluid contacto-footer">
                    <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-1">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <h2 style="text-align: center; line-height: 1.5; font-size: 30px;">Si deseas obtener más información acerca de nuestros servicios, completa el siguiente formulario y te contactaremos</h2>
                                    </div>
                                </div>
                                <div role="form" class="wpcf7" id="wpcf7-f193-p131-o1" lang="es-ES" dir="ltr">
                                    <div class="screen-reader-response" aria-live="polite"></div>
                                    <form action="/#wpcf7-f193-p131-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                        
                                        <div class="formulario-contacto">
                                            <div class="form-50">
                                                <span class="wpcf7-form-control-wrap nombre"><input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="*Nombres" /></span>
                                            </div>
                                            <div class="form-50">
                                                <span class="wpcf7-form-control-wrap apellido"><input type="text" name="apellido" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="*Apellidos" /></span></div>
                                        </div>
                                        <div class="formulario-contacto">
                                            <div class="form-50">
                                                <p><span class="wpcf7-form-control-wrap tel-993"><input type="tel" name="tel-993" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="*Celular" /></span>
                                                </p>
                                            </div>
                                            <div class="form-50">
                                                <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="*Correo electrónico" /></span></div>
                                        </div>
                                        <div class="formulario-contacto">
                                            <div class="form-100">
                                                <span class="wpcf7-form-control-wrap mensaje"><textarea name="mensaje" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="*Mensaje"></textarea></span></div>
                                        </div>
                                        <div class="form-100 terminos"><span class="wpcf7-form-control-wrap terminos-condiciones"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="terminos-condiciones[]" value="He leído y estoy de acuerdo" /><span class="wpcf7-list-item-label">He leído y estoy de acuerdo</span></label>
                                                    </span>
                                                </span>
                                            </span> <span><a href="/politica-privacidad/" target="_blank"> con los términos y condiciones</a>.</span>
                                        </div>
                                        <div class="form-100 btn_enviar_of"><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></div>
                                        <div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
            </div>
        </div>
    </div>
</div>';

//    public function form_contacto($slug) {
////        $this->load->model('PostModel', 'Data', TRUE);
//        $data = array('item' => '');
//        $this->template->load('template', 'contents', 'public/pages/form_contacto', $data);
//    }
}
