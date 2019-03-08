<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organizaciones extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('OrganizacionesModel');
    }

    //Cargar la vista de todos los banners creados
    public function index($mensaje = "BIENVENIDO")
    {
        $organizaciones = $this->OrganizacionesModel->getOrganizacioness();
        $this->load->view('template/cabecera_admin');
        $this->load->view('organizaciones/index',compact('organizaciones','mensaje'));
        $this->load->view('template/piedepagina_admin');
    }

    //Carga el formulario para crear [NUEVA NOTICIA]
    public function nuevo()
    {
        $this->load->view('template/cabecera_admin');
        $this->load->view('organizaciones/nuevo');
        $this->load->view('template/piedepagina_admin');
    }
    
    public function ver($id)
    {   
        $organizaciones = $this->OrganizacionesModel->ver($id);
        $this->load->view('template/cabecera');
		$this->load->view('organizaciones/ver_organizaciones',compact('organizaciones'));
		$this->load->view('template/piedepagina');	
    }

    public function eliminar($id)
    {
        $this->OrganizacionesModel->eliminar($id);
        $organizaciones = $this->OrganizacionesModel->getOrganizacioness();
        $mensaje = "Dato eliminado con exito";
        $this->load->view('template/cabecera_admin');
        $this->load->view('organizaciones/index',compact('organizaciones','mensaje'));
        $this->load->view('template/piedepagina_admin'); 
    }

    public function guardar()
    {
        $this->form_validation->set_rules('descripcion','Descripcion','required');
        $this->form_validation->set_rules('url','Url','required');
        
        if($this->form_validation->run() == TRUE)
        {         
            try{
                $url = $this->input->post('url');
                $descripcion = $this->input->post('descripcion');
                $this->OrganizacionesModel->guardar($descripcion, $url);
                $this->index("Dato creado con exito");
            }catch(Exception $e){   
                $this->index("Error en subir imagen");
            }   
        }else{
            $this->index("Debe llenar todos los campos");
        }

    }

    public function editar($id)
    {
        $organizaciones = $this->OrganizacionesModel->ver($id);       
        $this->load->view('template/cabecera_admin');
        $this->load->view('organizaciones/editar',compact('organizaciones'));
        $this->load->view('template/piedepagina_admin');
    }

    public function actualizar($id)
    {
        $this->form_validation->set_rules('descripcion','Descripcion','required');
        $this->form_validation->set_rules('url','Url','required');
        
        if($this->form_validation->run() == TRUE)
        {            
            $url = $this->input->post('url');
            $descripcion = $this->input->post('descripcion');
            $this->OrganizacionesModel->actualizar($id, $descripcion, $url);
            $this->index("Dato creado con exito"); 
        }else{
            $this->index("Debe llenar todos los campos");
        }
    }

}