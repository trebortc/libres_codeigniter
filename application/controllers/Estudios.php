<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudios extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('EstudiosModel');
    }

    //Cargar la vista de todos los banners creados
    public function index($mensaje = "BIENVENIDO")
    {
        $estudios = $this->EstudiosModel->getEstudioss();
        $this->load->view('template/cabecera_admin');
        $this->load->view('estudios/index',compact('estudios','mensaje'));
        $this->load->view('template/piedepagina_admin');
    }

    //Carga el formulario para crear [NUEVA NOTICIA]
    public function nuevo()
    {
        $this->load->view('template/cabecera_admin');
        $this->load->view('estudios/nuevo');
        $this->load->view('template/piedepagina_admin');
    }
    
    public function ver($id)
    {   
        $estudio = $this->EstudiosModel->ver($id);
        $this->load->view('template/cabecera');
		$this->load->view('estudios/ver_estudio',compact('estudio'));
		$this->load->view('template/piedepagina');	
    }

    public function eliminar($id)
    {
        $this->EstudiosModel->eliminar($id);
        $estudios = $this->EstudiosModel->getEstudioss();
        $mensaje = "Dato eliminado con exito";
        $this->load->view('template/cabecera_admin');
        $this->load->view('estudios/index',compact('estudios','mensaje'));
        $this->load->view('template/piedepagina_admin'); 
    }

    public function guardar()
    {
        $this->form_validation->set_rules('tema','Tema','required');
        $this->form_validation->set_rules('url','Url','required');
        $this->form_validation->set_rules('fecha','Fecha','required');
        
        if($this->form_validation->run() == TRUE)
        {         
            try{
                    $tema = $this->input->post('tema');
                    $url = $this->input->post('url');
                    $fecha = $this->input->post('fecha');
                    $this->EstudiosModel->guardar($tema, $url, $fecha);
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
        $estudio = $this->EstudiosModel->ver($id);       
        $this->load->view('template/cabecera_admin');
        $this->load->view('estudios/editar',compact('estudio'));
        $this->load->view('template/piedepagina_admin');
    }

    public function actualizar($id)
    {
        $this->form_validation->set_rules('tema','Tema','required');
        $this->form_validation->set_rules('url','Url','required');
        $this->form_validation->set_rules('fecha','Fecha','required');
        
        if($this->form_validation->run() == TRUE)
        {            
            $tema = $this->input->post('tema');
            $url = $this->input->post('url');
            $fecha = $this->input->post('fecha');
            $this->EstudiosModel->actualizar($id, $tema, $url, $fecha);
            $this->index("Dato creado con exito"); 
        }else{
            $this->index("Debe llenar todos los campos");
        }
    }

}