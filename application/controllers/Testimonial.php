<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('TestimonialModel');
        $this->load->model('ImagenModel');
    }

    //Cargar la vista de todos los banners creados
    public function index($mensaje = "BIENVENIDO")
    {
        $testimoniales = $this->TestimonialModel->getTestimonials();
        $this->load->view('template/cabecera_admin');
        $this->load->view('testimonial/index',compact('testimoniales','mensaje'));
        $this->load->view('template/piedepagina_admin');
    }

    //Carga el formulario para crear [NUEVA NOTICIA]
    public function nuevo()
    {
        $this->load->view('template/cabecera_admin');
        $this->load->view('testimonial/nuevo');
        $this->load->view('template/piedepagina_admin');
    }
    
    public function ver($id)
    {   
        $testimonial = $this->TestimonialModel->ver($id);
        $this->load->view('template/cabecera');
		$this->load->view('testimonial/ver_testimonial',compact('testimonial'));
		$this->load->view('template/piedepagina');	
    }

    public function eliminar($id)
    {
        $this->TestimonialModel->eliminar($id);
        $testimoniales = $this->TestimonialModel->getTestimonials();
        $mensaje = "Dato eliminado con exito";
        $this->load->view('template/cabecera_admin');
        $this->load->view('testimonial/index',compact('testimoniales','mensaje'));
        $this->load->view('template/piedepagina_admin'); 
    }

    public function guardar()
    {
        $this->form_validation->set_rules('titulo','Titulo','required');
        $this->form_validation->set_rules('descripcion','Descripcion','required');
        $this->form_validation->set_rules('url','Url','required');
        //$this->form_validation->set_rules('texto','Texto','required');
        //$this->form_validation->set_rules('tipo','Tipo','required');
        //$this->form_validation->set_rules('fecha','Fecha','required');
        //$this->form_validation->set_rules('imagen1','Imagen1','required');
        
        if($this->form_validation->run() == TRUE)
        {         
            //try{
                $imagen1 = $this->ImagenModel->cargarImagenServidor('imagen1');
                if(is_null($imagen1))
                {
                    $this->index("Error al cargar imagenes"); 
                }
                else{
                    $titulo = $this->input->post('titulo');
                    $descripcion = $this->input->post('descripcion');
                    $url = $this->input->post('url');
                    $texto = "";
                    $tipo = $this->input->post('tipo');
                    $fecha = "";
                    $this->TestimonialModel->guardar($titulo, $descripcion, $url, $texto, $tipo, $fecha, $imagen1);
                    $this->index("Dato creado con exito");
                }
            /*}catch(Exception $e){   
                $this->index("Error en subir imagen");
            } */  
        }else{
            echo "no vale el formulario";
            $this->index("Debe llenar todos los campos");
            
        }

    }

    public function editar($id)
    {
        $testimonial = $this->TestimonialModel->ver($id);       
        $this->load->view('template/cabecera_admin');
        $this->load->view('testimonial/editar',compact('testimonial'));
        $this->load->view('template/piedepagina_admin');
    }

    public function actualizar($id)
    {
        $this->form_validation->set_rules('titulo','Titulo','required');
        $this->form_validation->set_rules('descripcion','Descripcion','required');
        $this->form_validation->set_rules('url','Url','required');
        $this->form_validation->set_rules('texto','Texto','required');
        $this->form_validation->set_rules('tipo','Tipo','required');
        $this->form_validation->set_rules('fecha','Fecha','required');

        if($this->form_validation->run() == TRUE)
        {            
            $titulo = $this->input->post('titulo');
            $descripcion = $this->input->post('descripcion');
            $url = $this->input->post('precio');
            $texto = $this->input->post('texto');
            $tipo = $this->input->post('tipo');
            $fecha = $this->input->post('tipo');
            $this->TestimonialModel->actualizar($id, $titulo, $descripcion, $url, $texto, $tipo, $fecha);
            $this->index("Dato creado con exito"); 
        }else{
            $this->index("Debe llenar todos los campos");
        }
    }

}