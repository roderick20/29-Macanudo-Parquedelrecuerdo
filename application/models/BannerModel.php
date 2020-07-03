<?php

class BannerModel extends CI_Model {

    public $DataId;
    public $UniqueId;
    public $Category;
    public $Title;
    public $Description;
    public $Sumary;
    public $Imagen_p;
    public $Imagen_g;
    public $Slug;
    //public $Slug;
    public $Created;

    function __construct() {
        parent::__construct();
    }

    function getAllData($category) {
        $query = $this->db->get_where('Data', array('Category' => $category));
        return $query->result_array();
    }

    public function save() {
        /* if(!isset($this->UniqueId)){
          
          } */
        
        $this->UniqueId = $this->GUID();
        
        $data = array(
            'UniqueId' => $this->UniqueId, 
            'Category' => $this->Category,
            'Title' => $this->Title,
            'Description' => $this->Description,
            'Sumary' => $this->Sumary,
            'Imagen_g' => $this->UniqueId."_g.jpg",
            'Slug' =>  '',//url_title($this->Title, 'dash', true),
            'Created' => date('Y-m-d H:i:s') //'GETDATE()'
        );
        $this->db->insert('Data', $data);
    }

    public function getData($id) {
        $query = $this->db->get_where('Data', array('DataId' => $id));
        return $query->row_array();
    }
    
    public function getDataBySlug($slug) {
        $query = $this->db->get_where('Data', array('Slug' => $slug));
        return $query->row_array();
    }

    public function update() {
        $this->db->set('Title', $this->Title);
        $this->db->set('Description', $this->Description);
        $this->db->set('Sumary', $this->Sumary);
        $this->db->set('Slug', $this->Slug);
        $this->db->where('DataId', $this->DataId);
        $this->db->update('Data');
    }

    public function update_imagen($type) {
        $this->db->where('UniqueId', $this->UniqueId);
        if ($type == 'p') {
            $this->db->set('Imagen_p', $this->Imagen_p);            
        }
        if ($type == 'g') {
            $this->db->set('Imagen_g', $this->Imagen_g);            
        }
        $this->db->update('Data');
    }

    public function delete() {
        $this->db->where('DataId', $this->DataId);
        $this->db->delete('Data');
    }

    function GUID() {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

}

