<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EstudiosModel extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function guardar($tema, $url, $fecha)
    {
        $datos = array(
            'tema' => $tema,
            'url' => $url,
            'fecha' => $fecha
        );
        
        return $this->db->insert('estudios', $datos);
    }

    public function eliminar($id)
    {
        $dato = array('id' => $id);
        $this->db->delete('estudios',$dato);
    }
    
    public function getEstudioss()
    {
        return $this->db->query('select * from estudios order by fecha desc')->result();
    }

    public function getEstudios($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('estudios');
        return $query->row_array();
    }

    public function actualizar($id, $tema, $url, $fecha)
    {
        $datos = array(
            'tema' => $tema,
            'url' => $url,
            'fecha' => $fecha
        );

        $this->db->where('id',$id);
        $this->db->update('estudios',$datos);
    }

    public function ver($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get("estudios");
        return $query->row_array();
    }

}