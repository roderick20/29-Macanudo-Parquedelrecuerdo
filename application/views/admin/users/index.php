<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-users"></i> Usuarios</h6>
        <div class="dropdown no-arrow">
            <a href="/users/create" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Agregar</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Habilitado</th>
                        <th></th>
                    </tr>
                </thead>                
                <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?php echo $user['Name']; ?></td>
                            <td><?php echo $user['Email']; ?></td>
                            <td><?php
                                if ($user['Enabled'] == 1) {
                                    echo '<i class="far fa-check-square"></i>';
                                } else {
                                    echo '<i class="far fa-square"></i>';
                                }
                                ?>
                            </td>
                            <td>
                                <a href="/users/update?id=<?php echo $user['UserId']; ?>"><i class="far fa-edit"></i> Editar</a> | 
                                <a href="/users/delete?id=<?php echo $user['UserId']; ?>"><i class="far fa-trash-alt"></i> Eliminar</a>
                            </td>
                        </tr>
<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>