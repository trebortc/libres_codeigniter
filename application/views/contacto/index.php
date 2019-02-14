<div class="container-fluid pt-0 pb-5 pr-5 pl-5">
    <div class="row">
        <div class="col">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>MENSAJE: </strong> <?=$mensaje;?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class="row">
        <div class="col p-3">
            <h1><span class='badge badge-dark'>Contacto</span></h1>
            <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                <table class="table table-hover table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Mensaje</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $n=1;
                            foreach ($contactos as $contacto)
                            {
                                echo "<tr>".
                                "<th scope='row'>".$n++."</th>".
                                "<td>".$contacto->nombre."</td>".
                                "<td>".$contacto->apellido."</td>".
                                "<td>".$contacto->email."</td>".
                                "<td>".$contacto->telefono."</td>".
                                "<td>".$contacto->mensaje."</td>".
                                "<td>". 
                                    "<a href='".base_url()."Contacto/eliminar/".$contacto->id."'>Eliminar</a>".
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


