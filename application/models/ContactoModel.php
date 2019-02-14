<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ContactoModel extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function guardar($nombre, $apellido, $email, $telefono, $mensaje)
    {
        $datos = array(
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'telefono' => $telefono,
            'mensaje' => $mensaje
        );
        
        return $this->db->insert('contactos', $datos);
    }

    public function eliminar($id)
    {
        $dato = array('id' => $id);
        $this->db->delete('contactos',$dato);
    }
    
    public function getContactos()
    {
        return $this->db->query('select * from contactos')->result();
    }

    public function getContacto($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('contactos');
        return $query->row_array();
    }

    public function ver($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get("contactos");
        return $query->row_array();
    }

}