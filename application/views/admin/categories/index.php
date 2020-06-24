<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-blog"></i> Categoria</h6>
        <div class="dropdown no-arrow">
            <a href="/categories/create" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Agregar</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>                        
                        <th></th>
                    </tr>
                </thead>                
                <tbody>
                    <?php foreach ($list as $item) { ?>
                        <tr>
                            <td><?php echo $item['Title']; ?></td>                             
                            <td>
                                <a href="/categories/update?id=<?php echo $item['DataId']; ?>"><i class="far fa-edit"></i> Editar</a> | 
                                <a href="/categories/delete?id=<?php echo $item['DataId']; ?>"><i class="far fa-trash-alt"></i> Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


