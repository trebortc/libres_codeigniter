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
    <div class="row text-right">
        <div class="col-11">
            <?php
                if(isset ($_SESSION ['usuario' ])){
                    echo "<a class='btn btn-info' role='button'>Nuevo</a>";
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col p-3">
            <h1><span class='badge badge-dark'>Direcciones</span></h1>
            <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                <table class="table table-hover table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Direccion 1</th>
                            <th scope="col">Direccion 2</th>
                            <th scope="col">Email</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Movil</th>
                            <th scope="col">Fax</th>
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
                                "<td>".$contacto->direccion1."</td>".
                                "<td>".$contacto->direccion2."</td>".
                                "<td>".$contacto->email."</td>".
                                "<td>".$contacto->telefono."</td>".
                                "<td>".$contacto->movil."</td>".
                                "<td>".$contacto->fax."</td>".
                                "<td>";
                                if(isset ($_SESSION ['usuario' ])){ 
                                    echo "<a href='".base_url()."Contactos/editar/".$contacto->id."'>Editar</a>";
                                }    
                                echo "</td>".
                                "</tr>";    
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


