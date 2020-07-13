<?php

class TextModel extends CI_Model {

    public $DataId;
    public $UniqueId;
    public $Category;
    public $Title;
    public $Description;
    public $Imagen;
    public $Created;

    function __construct() {
        parent::__construct();
    }
    
    function getAllByCategory($category) {
        $sql = "SELECT [Category], [Description] FROM [Parque].[dbo].[Data] WHERE Category LIKE ".$this->db->escape($category."%");
        
        //$query = $parque->query($sql);
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function getDataByCategory($category) {
        $query = $this->db->get_where('Data', array('Category' => $category));
        return $query->row_array();
    }
    
    function getDataById($id) {
        $query = $this->db->get_where('DataId', array('Category' => $id));
        return $query->row_array();
    }
    
    public function save() {
        $data = array(
            'UniqueId' => $this->GUID(),
            'Category' => $this->Category,
            'Title' => $this->Title,
            'Description' => $this->Description,
            'Imagen_p' => '',
            'Imagen_g' => '',
            'Created' => date('Y-m-d H:i:s') //'GETDATE()'
        );
        $this->db->insert('Data', $data);
    }
    
    public function update() {
        $this->db->set('Description', $this->Description);
        $this->db->where('DataId', $this->DataId);
        $this->db->update('Data');
    }    
    
    
    
    //---------------------------------------------------------
    function buscar($nombre) {
        $parque = $this->load->database('parque', TRUE);
        
        $sql = "SELECT 
                wp.[IdPersona]
                ,wp.[NombreCompleto]      
                ,wp.[Ubicacion]      
                ,wp.[FechaNacimiento]
                ,wp.[FechaDefuncion]
                ,wp.[IdPlataforma]
                ,(SELECT [Descripcion] FROM [Parque].[dbo].[Web_PlataformaSepultura] WHERE [IdCamposanto] = 5 AND [IdPlataformaSepultura] = wp.[IdPlataforma]) Plataforma     
                FROM [dbo].[Web_Persona] wp WHERE wp.[IdCamposanto] = 5 AND wp.NombreCompleto LIKE ".$this->db->escape("%".$nombre."%");
        
        $query = $parque->query($sql);
        
       
        return $query->result_array();
    }

    function getAllData($category) {
        $query = $this->db->get_where('Data', array('Category' => $category));
        return $query->result_array();
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

//    public function createXML() {
////        $title = $data['title'];
////        $rowCount = count($data['users']);
//        //create the xml document
//        $xml = new DOMDocument();
//
//        $xml->createElement("Track", "The ninth symphony");
//
//        //$root = $xmlDoc->appendChild($xmlDoc->createElement("user_info"));
//        //$root->appendChild($xmlDoc->createElement("title", 'title'));
////        $root->appendChild($xmlDoc->createElement("totalRows", $rowCount));
////        $tabUsers = $root->appendChild($xmlDoc->createElement('rows'));
////
////        foreach ($data['users'] as $user) {
////            if (!empty($user)) {
////                $tabUser = $tabUsers->appendChild($xmlDoc->createElement('user'));
////                foreach ($user as $key => $val) {
////                    $tabUser->appendChild($xmlDoc->createElement($key, $val));
////                }
////            }
////        }
////
////        header("Content-Type: text/plain");
////
////        //make the output pretty
////        $xmlDoc->formatOutput = true;
////
////        //save xml file
////        $file_name = str_replace(' ', '_', $title) . '_' . time() . '.xml';
////        $xmlDoc->save("files/" . $file_name);
//        //return xml file name
//        //return $file_name;
//        return $xml->saveXML();
//    }
}
