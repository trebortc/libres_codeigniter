<div class="container-fluid pt-0 pb-5 pr-5 pl-5">
    <div class="row">
        <div class="col">
            <h3>Actualizar Testimonial</h3>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row">
        <div class="col">
            <form method="post" action='<?php echo base_url();?>testimonial/actualizar/<?php echo $testimonial['id'];?>' enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value='<?php echo $testimonial['titulo'];?>' placeholder="Ingrese um titulo">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value='<?php echo $testimonial['descripcion'];?>' placeholder="Ingrese una breve descripción">
                </div>
                <div class="form-group">
                    <label for="texto">Url</label>
                    <input type="text" class="form-control" id="url" name="url" value='<?php echo $testimonial['url'];?>' placeholder="Ingrese una url">
                </div>
                <div class="form-group">
                    <label for="texto">Texto</label>
                    <input type="text" class="form-control" id="url" name="url" value='<?php echo $testimonial['tipo'];?>' placeholder="Ingrese un tipo">
                </div>
                <div class="form-group">
                    <label for="imagen1">Imagen pequeña</label>
                    <input type="file" class="form-control-file" id="imagen1" name="imagen1">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
