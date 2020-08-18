<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Eliminar Categoria</h6>
    </div>
    <div class="card-body">
        <?php
        echo form_open('/categories/do_delete', array('id' => 'frmDelete', 'method' => 'post'));
        ?>
        <input type="hidden" name="DataId" value="<?php echo $data['DataId']; ?>">            
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Title" name="Title" readonly value="<?php echo$data['Title']; ?>" >
            </div>
        </div> 
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>




