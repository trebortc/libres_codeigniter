<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('ContactoModel');
    }

    //Cargar la vista de todos los banners creados
    public function index($mensaje ="BIENVENIDO")
    {
        $contactos = $this->ContactoModel->getContactos();
        $this->load->view('template/cabecera_admin');
        $this->load->view('contacto/index',compact('contactos','mensaje'));
        $this->load->view('template/piedepagina_admin');
    }

    public function ver($id)
    {   
        $banner = $this->ContactoModel->ver($id);
        $this->load->view('template/cabecera');
		$this->load->view('contacto/ver_contacto',compact('banner'));
		$this->load->view('template/piedepagina');	
    }
    
    
    public function guardar()
    {
        $this->form_validation->set_rules('nombre','nombre','required');
        $this->form_validation->set_rules('apellido','apellido','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('telefono','telefono','required');
        $this->form_validation->set_rules('mensaje','mensaje','required');
        
        if($this->form_validation->run() == TRUE)
        {            
            try{
                    $nombre = $this->input->post('nombre');
                    $apellido = $this->input->post('apellido');
                    $email = $this->input->post('email');
                    $telefono = $this->input->post('telefono');
                    $mensaje = $this->input->post('mensaje');
                    $this->ContactoModel->guardar($nombre, $apellido, $email, $telefono, $mensaje);
                    //$this->index("Dato creado con exito");
                    redirect('/Inicio/contacto');            
            }catch(Exception $e){
                $this->index("Error en subir imagen");
            }
        }else{

            $this->index("Debe llenar todos los campos");
        }
    }

    public function eliminar($id)
    {
        $this->ContactoModel->eliminar($id);
        $contactos = $this->ContactoModel->getContactos();
        $mensaje = "Dato eliminado con exito";
        $this->load->view('template/cabecera_admin');
        $this->load->view('contacto/index',compact('contactos','mensaje'));
        $this->load->view('template/piedepagina_admin'); 
    }

    public function editar($id)
    {
        $banner = $this->BannerModel->getBanner($id);       
        $this->load->view('template/cabecera_admin');
        $this->load->view('banner/editar',compact('banner'));
        $this->load->view('template/piedepagina_admin');
    }

}