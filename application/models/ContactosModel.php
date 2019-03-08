<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ContactosModel extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function guardar($direccion1, $direccion2, $email, $telefono, $movil, $fax)
    {
        $datos = array(
            'direccion1' => $direccion1,
            'direccion2' => $direccion2,
            'email' => $email,
            'telefono' => $telefono,
            'movil' => $movil,
            'fax' => $fax
        );
        
        return $this->db->insert('contacto', $datos);
    }

    public function eliminar($id)
    {
        $dato = array('id' => $id);
        $this->db->delete('contacto',$dato);
    }
    
    public function getContactos()
    {
        return $this->db->query('select * from contacto')->result();
    }

    public function getContacto($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('contacto');
        return $query->row_array();
    }

    public function actualizar($id, $direccion1, $direccion2, $email, $telefono, $movil, $fax)
    {
        $datos = array(
            'direccion1' => $direccion1,
            'direccion2' => $direccion2,
            'email' => $email,
            'telefono' => $telefono,
            'movil' => $movil,
            'fax' => $fax
        );

        $this->db->where('id',$id);
        $this->db->update('contacto',$datos);
    }

    public function ver($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get("contacto");
        return $query->row_array();
    }

}