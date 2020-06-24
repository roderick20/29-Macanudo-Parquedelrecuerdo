<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><i class="far fa-images"></i> Galeria</h6>
        <div class="dropdown no-arrow">
            <a href="/index.php/galleries/create" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Agregar</a>
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
                    <?php foreach ($galleries as $gallery) { ?>
                        <tr>
                            <td><?php echo $gallery->Name; ?></td> 
                           
                            <td>
                                <a href="/index.php/galleries/update?id=<?php echo $gallery->GalleryID; ?>"><i class="far fa-edit"></i> Editar</a> | 
                                <a href="/index.php/galleries/delete?id=<?php echo $gallery->GalleryID; ?>"><i class="far fa-trash-alt"></i> Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


