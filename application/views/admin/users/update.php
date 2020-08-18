<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Modificar Usuario</h6>
    </div>
    <div class="card-body">


        <?php
        echo form_open('/users/do_update', array('id' => 'frmUserCreate', 'method' => 'post'));
        ?>

        <input type="hidden" name="UserId" value="<?php echo $user['UserId']; ?>">

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Name" name="Name" required="" value="<?php echo $user['Name']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Email" name="Email" required="" value="<?php echo $user['Email']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Password" name="Password" required="" value="<?php echo $user['Password']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Habilitado</label>
            <div class="col-sm-10">
                <?php if ($user['Enabled'] == 1) { ?>
                    <input type="checkbox" id="Enabled" name="Enabled" value="1" checked>
                <?php } else { ?>
                    <input type="checkbox" id="Enabled" name="Enabled" value="1">
                <?php } ?>

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




