<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fin CSRF Token -->

        <title>LIBRES</title>
        <!-- Styles -->
            <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
            <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
            <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link href="<?php echo base_url();?>assets/css/hover.css" rel="stylesheet" type="text/css">
            <link rel="icon" type="image/x-icon" href="<?php echo base_url()?>assets/libres.ico" />
        <!-- FinStyles -->
    </head>
    <body>
        <!-- Navegación -->
        <?php
            if(isset ($_SESSION ['usuario' ])){
                echo "<ul class='nav nav-tabs bg-light flex-row fixed-top p-4'>".
                "<li class='nav-item active'>".
                    "<h5 class=''>".
                        "<a class='' href='".base_url()."Inicio/'>";
                                echo "<img src='".base_url()."/assets/img/libres_peq.png' alt='Logo libres' class='pr-3n' width='200'>";
                        echo "</a>".
                    "</h5>".
                "</li>".
                "<li class='nav-item'>".
                    "<a class='p-4 nav-link  font-weight-bold' href='".base_url()."Banner/'>Banner</a>".
                "</li>".
                "<li class='nav-item'>".
                    "<a class='p-4 nav-link font-weight-bold' href='".base_url()."Libros/'>Herramientas Didácticas</a>".
                "</li>".
                "<li class='nav-item'>".
                    "<a class='p-4 nav-link font-weight-bold' href='".base_url()."Blog/'>Blog</a>".
                "</li>".
                "<li class='nav-item'>".
                    "<a class='p-4 nav-link font-weight-bold' href='".base_url()."Contacto/'>Contacto</a>".
                "</li>".
                "<li class='nav-item'>".
                    "<a class='p-4 nav-link font-weight-bold' href='".base_url()."Audiovisuales/'>Audiovisuales</a>".
                "</li>".
                "<li class='nav-item'>".
                    "<a class='p-4 nav-link font-weight-bold' href='".base_url()."Contactos/'>Direcciones</a>".
                "</li>".
                "<li class='nav-item'>".
                    "<a class='p-4 nav-link font-weight-bold' href='".base_url()."Estudios/'>Estudios</a>".
                "</li>".
                "<li class='nav-item'>".
                    "<a class='p-4 nav-link font-weight-bold' href='".base_url()."Organizaciones/'>Organizaciones</a>".
                "</li>".
                "<li class='nav-item'>".
                    "<a class='p-4 nav-link font-weight-bold' href='".base_url()."Testimonial/'>Testimonial</a>".
                "</li>".
                "<li class='nav-item'>".
                    "<a class='p-4 nav-link font-weight-bold' href='".base_url()."Inicio/cerrar'>Cerrar</a>".
                "</li>".
                "</ul>"; 
            }else{
                echo "<!DOCTYPE html>".
                "<html>".
                "<head>".
                    "<title>403 Forbidden</title>".
                "</head>".
                "<body>".
                "<p>Directory access is forbidden.</p>".
                "</body>".
                "</html>";
            }
        ?>
        
       
        <!-- FinNavegacion -->

        <!-- Contenido -->

        <!-- FinContenido -->
