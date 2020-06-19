<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agregar Usuario</h6>
    </div>
    <div class="card-body">
        <form action="/index.php/users/do_create" method="POST" >
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Name" name="Name" required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Email" name="Email" required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Password" name="Password" required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Habilitado</label>
                <div class="col-sm-10">
                    <input type="checkbox" id="Enabled" name="Enabled" value="1">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Es Administrador</label>
                <div class="col-sm-10">
                    <input type="checkbox" id="IsAdmin" name="IsAdmin" value="1">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                </div>
            </div>
        </form>
    </div>
</div>




