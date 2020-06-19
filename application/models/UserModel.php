<?php

class UserModel extends CI_Model {

    public $UserId;
    public $Name;
    public $Email;
    public $Password;
    public $Enabled;
    public $Created;

    function __construct() {
        parent::__construct();
    }

    function getUsers() {
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('User');
        $response = $q->result_array();
        return $response;
    }

    public function save() {
        $data = array(
            'Name' => $this->Name,
            'Email' => $this->Email,
            'Password' => $this->Password,
            'Enabled' => $this->Enabled,
            'Created' => date('Y-m-d H:i:s') //'GETDATE()'
        );
        $this->db->insert('User', $data);
    }
    
     public function update() {
        $data = array(
            'Name' => $this->Name,
            'Email' => $this->Email,
            'Password' => $this->Password,
            'Enabled' => $this->Enabled,
            'Created' => date('Y-m-d H:i:s') //'GETDATE()'
        );
        $this->db->where('UserId', $this->UserId);
        $this->db->update('User', $data);
        
        
    
    }
    
    
    

    public function getUser($id) {
        $query = $this->db->get_where('User', array('UserId' => $id));
        return $query->row_array();
    }

    public function delete($id) {
        $this->db->where('UserId', $id);
        $this->db->delete('User');
        //return $query->row_array();
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
