<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('session');
		$this->load->model('BannerModel');
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		

		
		$banners = $this->BannerModel->getBanners();
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();
		
		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];
		
		$this->load->view('template/cabecera');
		$this->load->view('template/carousel',compact('banners'));
		$this->load->view('template/proyectos_card',compact('proyectos'));
		$this->load->view('template/noticias_card',compact('noticias'));
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');
	}

	public function quienesomos()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();

		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];

		$this->load->view('template/cabecera');
		$this->load->view('template/quienesomos');
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');			
	}

	public function financiamiento()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();

		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];

		$this->load->view('template/cabecera');
		$this->load->view('template/financiamiento');
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');		
	}

	public function contacto()
	{
		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];

		$this->load->view('template/cabecera');
		$this->load->view('template/contactos', compact('contacto'));
		$this->load->view('template/piedepagina');		
	}

	public function nuestrosproyectos()
	{
		$this->load->model('ProyectosModel');
		$proyectos = $this->ProyectosModel->getProyectos();
		$this->load->view('template/cabecera');
		$this->load->view('template/nuestrosproyectos',compact('proyectos'));
		$this->load->view('template/piedepagina');
	}

	public function blog()
	{
		$this->load->model('NoticiasModel');
		$noticias = $this->NoticiasModel->getNoticias();
		$this->load->view('template/cabecera');
		$this->load->view('template/blog',compact('noticias'));
		$this->load->view('template/piedepagina');
	}

	public function login()
	{
		$this->load->view('template/cabecera');
		$this->load->view('template/login');
		$this->load->view('template/piedepagina');
	}
	
	public function admin()
	{
		$this->load->view('template/cabecera_admin');
        $this->load->view('template/piedepagina_admin');
	}

	public function ingresar()
	{
		$this->form_validation->set_rules('usuario','Usuario','required');  
		$this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run() == TRUE)
        {   
			$usuario = $this->input->post('usuario');
			$password = $this->input->post('password');
			if($usuario == "admin_libres" && $password == "adminLibres"){
				$datos  =  array ( 
					'usuario'   =>  $usuario
				);
				$this->session->set_userdata ( $datos );
				$this->admin();
			}
			else{
				$this->index();	
			}

        }else{
            $this->login();
        }	
	}

	public function teayudamos()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();

		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];

		$this->load->view('template/cabecera');
		$this->load->view('template/teayudamos');
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');			
	}

	public function talleresdesensibilizacion()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();

		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];

		$this->load->view('template/cabecera');
		$this->load->view('template/talleresdesensibilizacion');
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');			
	}

	public function asistenciapsicologica()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();

		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];

		$this->load->view('template/cabecera');
		$this->load->view('template/asistenciapsicologica');
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');			
	}

	public function gruposdeautoapoyo()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();

		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];

		$this->load->view('template/cabecera');
		$this->load->view('template/gruposdeautoapoyo');
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');			
	}
	
	public function organizacionesdeapoyo()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		$this->load->model('OrganizacionesModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();
		$organizaciones = $this->OrganizacionesModel->getOrganizacioness();

		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];

		$this->load->view('template/cabecera');
		$this->load->view('template/organizacionesdeapoyo', compact('organizaciones'));
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');			
	} 

	public function recursos()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();

		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];

		$this->load->view('template/cabecera');
		$this->load->view('template/recursos');
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');			
	}

	public function librotestimonial()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		$this->load->model('TestimonialModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();
		$testimoniales = $this->TestimonialModel->getTestimonials();
		

		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];

		$this->load->view('template/cabecera');
		$this->load->view('template/libroguia',compact('testimoniales'));
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');			
	}

	public function herramientasdidacticas()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();

		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];

		$this->load->view('template/cabecera');
		$this->load->view('template/herramientasdidacticas',compact('proyectos'));
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');			
	}

	public function herramientasaudiovisuales()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		$this->load->model('AudiovisualesModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();
		$audiovisuales = $this->AudiovisualesModel->getAudiovisualess();

		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];

		$this->load->view('template/cabecera');
		$this->load->view('template/herramientasaudiovisuales',compact('audiovisuales'));
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');			
	}

	public function estudios()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		$this->load->model('EstudiosModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();
		$estudios = $this->EstudiosModel->getEstudioss();

		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];


		$this->load->view('template/cabecera');
		$this->load->view('template/estudios' ,compact('estudios'));
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');			
	}

	public function asesoriaeducativaylegal()
	{
		$this->load->model('NoticiasModel');
		$this->load->model('ProyectosModel');
		
		$noticias = $this->NoticiasModel->getNoticias();
		$proyectos = $this->ProyectosModel->getProyectos();

		$this->load->model('ContactosModel');
		$contactos = $this->ContactosModel->getContactos();
		$contacto = $contactos[0];

		$this->load->view('template/cabecera');
		$this->load->view('template/asesoriaeducativaylegal');
		$this->load->view('template/footer',compact('proyectos','noticias','contacto'));
		$this->load->view('template/piedepagina');			
	}

	public function cerrar()
	{
		unset ($_SESSION['usuario']);
		$this->index();
	}

	

}
