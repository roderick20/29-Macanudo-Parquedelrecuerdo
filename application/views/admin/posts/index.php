<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-blog"></i> Post</h6>
        <div class="dropdown no-arrow">
            <a href="/posts/create" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Agregar</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>      
                        <th>Slug</th> 
                        <th>Imagen pequeño 700x450</th>
                        <th>Imagen grnade 1160x580</th>
                        <th></th>
                    </tr>
                </thead>                
                <tbody>
                    <?php foreach ($list as $item) { ?>
                        <tr>
                            <td><?php echo $item['Title']; ?></td>   
                            <td><?php echo $item['Slug']; ?></td>  
                            <td>
                                <img src="/uploads/post/<?php echo $item['UniqueId']; ?>_p.jpg" style="width: 140px;" />
                                <a href="/posts/upload_imagen?uniqueid=<?php echo $item['UniqueId']; ?>&type=p"><i class="fas fa-upload"></i> Cargar</a>
                            </td>
                            <td>
                                <img src="/uploads/post/<?php echo $item['UniqueId']; ?>_g.jpg" style="width: 232px;" />
                                <a href="/posts/upload_imagen?uniqueid=<?php echo $item['UniqueId']; ?>&type=g"><i class="fas fa-upload"></i> Cargar</a>
                            </td>
                            <td>
                                <a href="/posts/update?id=<?php echo $item['DataId']; ?>"><i class="far fa-edit"></i> Editar</a> | 
                                <a href="/posts/delete?id=<?php echo $item['DataId']; ?>"><i class="far fa-trash-alt"></i> Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


