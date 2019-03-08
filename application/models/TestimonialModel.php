<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TestimonialModel extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function guardar($titulo, $descripcion, $url, $texto, $tipo, $fecha, $imagen1)
    {
        $datos = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'url' => $url,
            'texto' => $texto,
            'tipo' => $tipo,
            'fecha' => $fecha,
            'imagen1' => $imagen1
        );
        
        return $this->db->insert('testimonial', $datos);
    }

    public function eliminar($id)
    {
        $dato = array('id' => $id);
        $this->db->delete('testimonial',$dato);
    }
    
    public function getTestimonials()
    {
        return $this->db->query('select * from testimonial')->result();
    }

    public function getTestimonial($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('testimonial');
        return $query->row_array();
    }

    public function actualizar($id, $titulo, $descripcion, $url, $texto, $tipo, $fecha)
    {
        $datos = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'url' => $url,
            'texto' => $texto,
            'tipo' => $tipo,
            'fecha' => $fecha
        );

        $this->db->where('id',$id);
        $this->db->update('testimonial',$datos);
    }

    public function ver($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get("testimonial");
        return $query->row_array();
    }

}