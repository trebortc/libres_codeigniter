<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class OrganizacionesModel extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function guardar($descripcion, $url)
    {
        $datos = array(
            'descripcion' => $descripcion,
            'url' => $url
        );
        
        return $this->db->insert('organizaciones', $datos);
    }

    public function eliminar($id)
    {
        $dato = array('id' => $id);
        $this->db->delete('organizaciones',$dato);
    }
    
    public function getOrganizacioness()
    {
        return $this->db->query('select * from organizaciones')->result();
    }

    public function getOrganizaciones($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('organizaciones');
        return $query->row_array();
    }

    public function actualizar($id, $descripcion, $url)
    {
        $datos = array(
            'descripcion' => $descripcion,
            'url' => $url
        );

        $this->db->where('id',$id);
        $this->db->update('organizaciones',$datos);
    }

    public function ver($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get("organizaciones");
        return $query->row_array();
    }

}