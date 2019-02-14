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
    <body class="pt-2 pb-2 pl-3 pr-3">
        <!-- Navegación -->
        <div class="container-fluid">
            <div class="row">
                <div class="col esp-bloq-0">
                </div>
            </div>
        </div>   
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="row mx-auto">
                    <a class="navbar-brand js-scroll-trigger pr-5" href="<?php echo base_url();?>">
                        <img src="<?php echo base_url();?>assets/img/libres_peq.png" class="img-fluid" alt="Responsive image" width="200">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav font-weight-bold">
                            <div class="btn-group pl-4 pr-4">
                                <a type="" href="<?php echo base_url();?>" class="btn btn-light tam-letra-1 font-weight-bold">INICIO</a>
                            </div>
                            <div class="btn-group pl-4 pr-4">
                                <a type="" href="<?php echo base_url();?>inicio/teayudamos" class="btn btn-light tam-letra-1 font-weight-bold">TE AYUDAMOS</a>
                                <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php echo base_url();?>inicio/talleresdesensibilizacion">TALLERES DE SENSIBILIZACIÓN</a>
                                    <a class="dropdown-item" href="<?php echo base_url();?>inicio/asesoriaeducativaylegal">ASESORÍA EDUCATIVA Y LEGAL</a>
                                    <a class="dropdown-item" href="<?php echo base_url();?>inicio/asistenciapsicologica">ASISTENCIA PSICOLÓGICA</a>
                                    <a class="dropdown-item" href="<?php echo base_url();?>inicio/gruposdeautoapoyo">GRUPOS DE AUTO-APOYO</a>
                                </div>
                            </div>
                            <div class="btn-group pl-4 pr-4">
                                <a type="" href="<?php echo base_url();?>inicio/recursos" class="btn btn-light tam-letra-1 font-weight-bold">RECURSOS</a>
                                <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo base_url();?>inicio/libroguia">LIBRO GUIA</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>inicio/herramientasdidacticas">HERRAMIENTAS DIDÁCTICAS</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>inicio/herramientasaudiovisuales">HERRAMIENTAS AUDIOVISUALES</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>inicio/estudios">ESTUDIOS</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>inicio/organizacionesdeapoyo">ORGANIZACIONES DE APOYO</a>
                                </div>
                            </div>
                            <div class="btn-group pl-4 pr-4">
                                <a type="" href="<?php echo base_url();?>inicio/blog" class="btn btn-light tam-letra-1 font-weight-bold">BLOG</a>
                            </div>
                            <div class="btn-group pl-4 pr-4">
                                <a type="" href="<?php echo base_url();?>inicio/contacto" class="btn btn-light tam-letra-1 font-weight-bold">CONTACTO</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col esp-bloq-0">
                </div>
            </div>
        </div>
        <!-- FinNavegacion -->

        <!-- Contenido -->

        <!-- FinContenido -->
