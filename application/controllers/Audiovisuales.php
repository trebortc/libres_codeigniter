<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audiovisuales extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('AudiovisualesModel');
        $this->load->model('ImagenModel');
    }

    //Cargar la vista de todos los banners creados
    public function index($mensaje = "BIENVENIDO")
    {
        $audiovisuales = $this->AudiovisualesModel->getAudiovisualess();
        $this->load->view('template/cabecera_admin');
        $this->load->view('audiovisuales/index',compact('audiovisuales','mensaje'));
        $this->load->view('template/piedepagina_admin');
    }

    //Carga el formulario para crear [NUEVA AUDIOVISUALES]
    public function nuevo()
    {
        $this->load->view('template/cabecera_admin');
        $this->load->view('audiovisuales/nuevo');
        $this->load->view('template/piedepagina_admin');
    }
    
    public function ver($id)
    {   
        $audiovisuales = $this->AudiovisualesModel->ver($id);
        $this->load->view('template/cabecera');
		$this->load->view('audiovisuales/ver_proyecto', compact('audiovisuales'));
		$this->load->view('template/piedepagina');	
    }

    public function eliminar($id)
    {
        $this->AudiovisualesModel->eliminar($id);
        $audiovisuales = $this->AudiovisualesModel->getAudiovisualess();
        $mensaje = "Dato eliminado con exito";
        $this->load->view('template/cabecera_admin');
        $this->load->view('audiovisuales/index',compact('audiovisuales','mensaje'));
        $this->load->view('template/piedepagina_admin'); 
    }
    
    public function guardar()
    {
        $this->form_validation->set_rules('url','Url','required');
        
        if($this->form_validation->run() == TRUE)
        {         
            try{
                    $url = $this->input->post('url');
                    $this->AudiovisualesModel->guardar($url);
                    $this->index("Dato creado con exito");
            }catch(Exception $e){   
                $this->index("Error al guardar información");
            }   
        }else{
            $this->index("Debe llenar todos los campos");
        }

    }

    public function editar($id)
    {
        $audiovisuales = $this->AudiovisualesModel->ver($id);       
        $this->load->view('template/cabecera_admin');
        $this->load->view('audiovisuales/editar',compact('audiovisuales'));
        $this->load->view('template/piedepagina_admin');
    }

    public function actualizar($id)
    {
        $this->form_validation->set_rules('url','Url','required');
        
        if($this->form_validation->run() == TRUE)
        {            
            $url = $this->input->post('url');
            $this->AudiovisualesModel->actualizar($id, $url);
            $this->index("Dato actualizado con exito"); 
        }else{
            $this->index("Debe llenar todos los campos");
        }
    }

}