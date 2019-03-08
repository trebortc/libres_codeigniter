<div class="container-fluid pt-0 pb-5 pr-5 pl-5">
    <div class="row">
        <div class="col">
            <h3>Actualizar Dirrecciones</h3>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row">
        <div class="col">
            <form method="post" action='<?php echo base_url();?>Contactos/actualizar/<?php echo $contacto['id'];?>' enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titulo">Direccion 1</label>
                    <input type="text" class="form-control" id="direccion1" name="direccion1" value='<?php echo $contacto['direccion1'];?>' placeholder="Ingrese una dirección">
                </div>
                <div class="form-group">
                    <label for="titulo">Direccion 2</label>
                    <input type="text" class="form-control" id="direccion2" name="direccion2" value='<?php echo $contacto['direccion2'];?>' placeholder="Ingrese una dirección">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value='<?php echo $contacto['email'];?>' placeholder="Ingrese una email">
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value='<?php echo $contacto['telefono'];?>' placeholder="Ingrese una telefono">
                </div>
                <div class="form-group">
                    <label for="movil">Celular</label>
                    <input type="movil" class="form-control" id="movil" name="movil" value='<?php echo $contacto['movil'];?>' placeholder="Ingrese un celular">
                </div>
                <div class="form-group">
                    <label for="fax">Fax</label>
                    <input type="fax" class="form-control" id="fax" name="fax" value='<?php echo $contacto['fax'];?>' placeholder="Ingrese una fax">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>