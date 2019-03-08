<div class="container-fluid">
    <div class="esp-bloq-2">
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.604579371744!2d-78.46193871694943!3d-0.16241901794476624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x494de438292c29b3!2sUDLA+Sede+Udlapark!5e0!3m2!1ses!2sec!4v1551976673846" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>     
        </div>
    </div>
</div>

<div class="container-fluid p-5" id="contactos">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
            <div class="row pt-3 pl-5 pb-3 justify-content-center" style='background-color: rgb(103, 69, 122);' >
                <div class="col-12 col-sm-10 col-lg-6 col-xl-6">
                    <center>
                        <?php 
                            echo "<img src='".base_url()."/assets/img/libres_peqb.png' alt='financiamiento' class='pr-3 img-fluid' width='200'>";
                        ?>
                    </center>
                </div>
            </div>
            <div class="row pt-5 pl-5 pr-5 justify-content-center" style='background-color: rgb(103, 69, 122);'>
                <div class="col-12 col-sm-12 col-md-10 col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-10 col-lg-12 col-xl-12">
                            <form method="post" action="<?php echo base_url();?>contacto/guardar">
                                <div class="form-row">
                                    <div class="form-group col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre:">
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
                                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido:">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email:">
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
                                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono:">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <textarea class="form-control" rows="6" name="mensaje" id="mensaje" placeholder="Mensaje:"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-10 col-lg-12 col-xl-12 pt-5 pb-5">
                                            <button class="btn" type="submit">Enviar</button>
                                        </div>
                                    </div>
                            </form>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-11 text-white">
                    <div class="row pl-4">
                        <div class="col">
                            <p class="lead font-size-1"> <i class="fa fa-building fa-lg" aria-hidden="true"></i> <?php echo "".$contacto->direccion1.""; ?></p>
                        </div>
                    </div>
                    <div class="row pl-4">
                        <div class="col">
                            <p class="lead font-size-1"><i class="fa fa-road fa-lg" aria-hidden="true"></i> <?php echo "".$contacto->direccion2.""; ?></p>
                        </div>
                    </div>
                    <div class="row pl-4">
                        <div class="col">
                            <p class="lead font-size-1"><i class="fa fa-fax fa-lg" aria-hidden="true"></i>  <?php echo "".$contacto->fax.""; ?> </p>
                        </div>
                    </div>
                    <div class="row pl-4">
                        <div class="col">
                            <p class="lead font-size-1"><i class="fa fa-phone fa-lg" aria-hidden="true"></i> <?php echo "".$contacto->telefono.""; ?> </p>
                        </div>
                    </div>
                    <div class="row pl-4">
                        <div class="col">
                            <p class="lead font-size-1"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i>  <?php echo "".$contacto->movil.""; ?> </p>
                        </div>
                    </div>
                    <div class="row pl-4">
                        <div class="col">
                            <p class="lead font-size-1"><i class="fa fa fa-envelope fa-lg" aria-hidden="true"></i>  <?php echo "".$contacto->email.""; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>