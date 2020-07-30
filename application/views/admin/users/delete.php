<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Eliminar Usuario</h6>
    </div>
    <div class="card-body">

        <?php
        echo form_open('/users/do_delete', array('id' => 'frmUser'));
        ?>
        <input type="hidden" name="UserId" value="<?php echo $user['UserId']; ?>">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Name" name="Name" required="" value="<?php echo $user['Name']; ?>" disabled="">
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




