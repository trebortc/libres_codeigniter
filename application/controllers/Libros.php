<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libros extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('ProyectosModel');
        $this->load->model('ImagenModel');
    }

    //Cargar la vista de todos los banners creados
    public function index($mensaje = "BIENVENIDO")
    {
        $proyectos = $this->ProyectosModel->getProyectos();
        $this->load->view('template/cabecera_admin');
        $this->load->view('libros/index',compact('proyectos','mensaje'));
        $this->load->view('template/piedepagina_admin');
    }

    //Carga el formulario para crear [NUEVA NOTICIA]
    public function nuevo()
    {
        $this->load->view('template/cabecera_admin');
        $this->load->view('libros/nuevo');
        $this->load->view('template/piedepagina_admin');
    }
    
    public function ver($id)
    {   
        $proyecto = $this->ProyectosModel->ver($id);
        $this->load->view('template/cabecera');
		$this->load->view('libros/ver_proyecto',compact('proyecto'));
		$this->load->view('template/piedepagina');	
    }

    public function eliminar($id)
    {
        $this->ProyectosModel->eliminar($id);
        $proyectos = $this->ProyectosModel->getProyectos();
        $mensaje = "Dato eliminado con exito";
        $this->load->view('template/cabecera_admin');
        $this->load->view('libros/index',compact('proyectos','mensaje'));
        $this->load->view('template/piedepagina_admin'); 
    }

    public function guardar()
    {
        $this->form_validation->set_rules('titulo','Titulo','required');
        $this->form_validation->set_rules('descripcion','Descripcion','required');
        $this->form_validation->set_rules('tipo','Tipo','required');
        
        if($this->form_validation->run() == TRUE)
        {         
            try{
                $imagen1 = $this->ImagenModel->cargarImagenServidor('imagen1');
                if(is_null($imagen1))
                {
                    $this->index("Error al cargar imagenes"); 
                }
                else{
                    $titulo = $this->input->post('titulo');
                    $descripcion = $this->input->post('descripcion');
                    $precio = $this->input->post('precio');
                    $tipo = $this->input->post('tipo');
                    $this->ProyectosModel->guardar($titulo, $descripcion, $precio, "", $tipo, "", $imagen1, "", "", "", "", "");
                    $this->index("Dato creado con exito");
                }
            }catch(Exception $e){   
                $this->index("Error en subir imagen");
            }   
        }else{
            $this->index("Debe llenar todos los campos");
        }

    }

    public function editar($id)
    {
        $proyecto = $this->ProyectosModel->ver($id);       
        $this->load->view('template/cabecera_admin');
        $this->load->view('libros/editar',compact('proyecto'));
        $this->load->view('template/piedepagina_admin');
    }

    public function actualizar($id)
    {
        $this->form_validation->set_rules('titulo','Titulo','required');
        $this->form_validation->set_rules('descripcion','Descripcion','required');
        $this->form_validation->set_rules('tipo','Tipo','required');
        $this->form_validation->set_rules('precio','Precio','required');
        
        if($this->form_validation->run() == TRUE)
        {            
            $titulo = $this->input->post('titulo');
            $descripcion = $this->input->post('descripcion');
            $precio = $this->input->post('precio');
            $tipo = $this->input->post('tipo');
            $this->ProyectosModel->actualizar($id, $titulo, $descripcion, $precio, "", $tipo, "");
            $this->index("Dato creado con exito"); 
        }else{
            $this->index("Debe llenar todos los campos");
        }
    }

}