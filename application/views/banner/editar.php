<div class="container-fluid pt-0 pb-5 pr-5 pl-5">
    <div class="row">
        <div class="col">
            <h3>Actualizar Banner</h3>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row">
        <div class="col">
            <form method="post" action='<?php echo base_url();?>Banner/actualizar/<?php echo $banner['id'];?>' enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value='<?php echo $banner['titulo'];?>' placeholder="Ingrese um titulo">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value='<?php echo $banner['descripcion'];?>' placeholder="Ingrese una breve descripción">
                </div>
                <div class="form-group">
                    <label for="imagen1">Imagen 1</label>
                    <input type="file" class="form-control-file" id="imagen1" name="imagen1" value='<?php echo $banner['imagen1'];?>'>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.js" type="text/javascript" charset="utf-8" ></script>