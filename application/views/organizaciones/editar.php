<div class="container-fluid pt-0 pb-5 pr-5 pl-5">
    <div class="row">
        <div class="col">
            <h3>Actualizar Organización</h3>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row">
        <div class="col">
            <form method="post" action='<?php echo base_url();?>organizaciones/actualizar/<?php echo $organizaciones['id'];?>' enctype="multipart/form-data">
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value='<?php echo $organizaciones['descripcion'];?>' placeholder="Ingrese una breve descripción">
                </div>
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" value='<?php echo $organizaciones['url'];?>' placeholder="Ingrese una url">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>