<div class="container-fluid pt-0 pb-5 pr-5 pl-5">
<br><br><br><br><br><br><br>
    <div class="row">
        <div class="col">
            <h3>Nueva Organización</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="<?php echo base_url();?>organizaciones/guardar" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una breve descripción">
                </div>
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Ingrese una Url">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
