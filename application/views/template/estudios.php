<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-10 col-lg-9 col-xl-9">
            <div class="jumbotron" style="background:transparent !important">
                <h1 class="tam-letra-3 font-weight-bold">Estudios</h1><br>
                <p class="lead text-justify tam-letra-0">El conocimiento es poder. Nuestra propuesta de prevención se basa en comprender la realidad de las personas con experiencia de bullying homo y transfóbico. Lee aquí una base de diversas publicaciones académicas al respecto alrededor del mundo.</p>
                <hr class="my-4">
                <p class="lead text-justify tam-letra-0">Te invitamos a fomentar nuestra base de estudios académicas.</p>
                <a class="btn btn-danger font-weight-bold btn-lg float-right" href="<?php echo base_url();?>inicio/contacto" role="button">CONTACTENOS</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-10 col-lg-9 col-xl-9">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr class="table-primary">
                            <th scope="col">Año</th>
                            <th scope="col">Tema</th>
                            <th scope="col" class="text-center">Recurso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($estudios as $estudio)
                            {
                                echo "<tr>".
                                    "<td>".$estudio->fecha."</td>".
                                    "<td>".$estudio->tema."</td>".
                                    "<td class='text-center'>".
                                        "<a href='".$estudio->url."' target='_blank'><span class='fas fa-file fa-lg'></span></a>".
                                    "</td>".
                                "</tr>";    
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>