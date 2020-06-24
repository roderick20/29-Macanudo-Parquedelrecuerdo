<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agregar Categoria</h6>
    </div>
    <div class="card-body">
        <?php
        echo form_open('/categories/do_create', ['id' => 'frmCreate']);
        ?>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Title" name="Title" required="">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Grabar</button>
            </div>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>

