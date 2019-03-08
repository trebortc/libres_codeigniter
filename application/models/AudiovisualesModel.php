<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AudiovisualesModel extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function guardar($url)
    {
        $datos = array(
            'url' => $url
        );
        
        return $this->db->insert('audiovisuales', $datos);
    }

    public function eliminar($id)
    {
        $dato = array('id' => $id);
        $this->db->delete('audiovisuales',$dato);
    }
    
    public function getAudiovisualess()
    {
        return $this->db->query('select * from audiovisuales')->result();
    }

    public function getAudiovisuales($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('audiovisuales');
        return $query->row_array();
    }

    public function actualizar($id, $url)
    {
        $datos = array(
            'url' => $url,
        );

        $this->db->where('id',$id);
        $this->db->update('audiovisuales',$datos);
    }

    public function ver($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get("audiovisuales");
        return $query->row_array();
    }

}