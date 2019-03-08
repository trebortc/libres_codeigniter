<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('ContactosModel');
    }

    //Cargar la vista de todos los contactos creados
    public function index($mensaje = "BIENVENIDO")
    {
        $contactos = $this->ContactosModel->getContactos();
        $this->load->view('template/cabecera_admin');
        $this->load->view('contactos/index',compact('contactos','mensaje'));
        $this->load->view('template/piedepagina_admin');
    }

    //Carga el formulario para crear [NUEVA NOTICIA]
    public function nuevo()
    {
        $this->load->view('template/cabecera_admin');
        $this->load->view('contactos/nuevo');
        $this->load->view('template/piedepagina_admin');
    }
    
    public function ver($id)
    {   
        $contacto = $this->ContactosModel->ver($id);
        $this->load->view('template/cabecera');
		$this->load->view('contactos/ver_proyecto',compact('contacto'));
		$this->load->view('template/piedepagina');	
    }

    public function eliminar($id)
    {
        $this->ContactosModel->eliminar($id);
        $contactos = $this->ContactosModel->getContactos();
        $mensaje = "Dato eliminado con exito";
        $this->load->view('template/cabecera_admin');
        $this->load->view('contactos/index',compact('contactos','mensaje'));
        $this->load->view('template/piedepagina_admin'); 
    }

    public function guardar()
    {
        $this->form_validation->set_rules('direccion1','Direccion1','required');
        $this->form_validation->set_rules('direccion2','Direccion2','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('telefono','Telefono','required');
        $this->form_validation->set_rules('movil','Movil','required');
        $this->form_validation->set_rules('fax','Fax','required');
        
        if($this->form_validation->run() == TRUE)
        {         
            try{
                $direccion1 = $this->input->post('direccion1');
                $direccion2 = $this->input->post('direccion2');
                $email = $this->input->post('email');
                $telefono = $this->input->post('telefono');
                $movil = $this->input->post('movil');
                $fax = $this->input->post('fax');
                $this->ContactosModel->guardar($direccion1, $direccion2, $email, $telefono, $movil, $fax);
                $this->index("Dato creado con exito");

            }catch(Exception $e){   
                $this->index("Error en guardar los datos");
            }   
        }else{
            $this->index("Debe llenar todos los campos");
        }

    }

    public function editar($id)
    {
        $contacto = $this->ContactosModel->ver($id);       
        $this->load->view('template/cabecera_admin');
        $this->load->view('contactos/editar',compact('contacto'));
        $this->load->view('template/piedepagina_admin');
    }

    public function actualizar($id)
    {
        $this->form_validation->set_rules('direccion1','Direccion1','required');
        $this->form_validation->set_rules('direccion2','Direccion2','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('telefono','Telefono','required');
        $this->form_validation->set_rules('movil','Movil','required');
        $this->form_validation->set_rules('fax','Fax','required');
        
        if($this->form_validation->run() == TRUE)
        {            
            $direccion1 = $this->input->post('direccion1');
            $direccion2 = $this->input->post('direccion2');
            $email = $this->input->post('email');
            $telefono = $this->input->post('telefono');
            $movil = $this->input->post('movil');
            $fax = $this->input->post('fax');
            $this->ContactosModel->actualizar($id, $direccion1, $direccion2, $email, $telefono, $movil, $fax);
            $this->index("Datos actualizado con exito"); 
        }else{
            $this->index("Debe llenar todos los campos");
        }
    }

}