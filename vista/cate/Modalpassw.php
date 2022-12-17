
<!-- EDITAR CONTRASEÑAS -->



<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id_cate']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<br>
				<img src ="../assets/images/paquete.png" style="max-width: 110px; margin-left:30px;">
				<h2 class="text-center"><?php echo $row['nomcate'].' '; ?> </h2>
			</div>
			
           <div class="modal-footer">
                
				
                <a href="../vista/cate/BorrarRegistro.php?id=<?php echo $row['id_cate']; ?>" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
			
			
			
        </div>
    </div>
</div>


<!-- EDITAR CATEGORIA ------------------------------------------>


<div class="modal fade" id="edit_<?php echo $row['id_cate']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Categoria</h4></center>
				<br>
				<img src ="../assets/images/paquete.png" style="max-width: 110px; margin-left:30px;">
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form  method="POST" autocomplete="off" action="../vista/cate/editarcate.php?id=<?php echo $row['id_cate']; ?>">
			
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Nombre de la categoria:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ-]{1,50}"  name="nomcate" value="<?php echo $row['nomcate']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Fecha :</label>
					</div>
					<div class="col-sm-14">
						<input type="date" class="form-control"  name="fecha_create" value="<?php echo $row['fecha_create']; ?>">
					</div>
				</div>
				
				
				
            </div> 
			</div>
			
            <div class="modal-footer">
			 <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
			<button type="submit" name="editar" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Aplicar cambios</a>
                </button>
			</form>
            </div>

        </div>
    </div>
</div>


<!-- VER CATEGORIA -->

<div class="modal fade" id="ver_<?php echo $row['id_cate']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Ver categoria</h4></center>
				<br>
				<img src ="../assets/images/paquete.png" style="max-width: 110px; margin-left:30px;">
            </div>
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Nombre de la categoria:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" readonly pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}"  name="nomcate" value="<?php echo $row['nomcate']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Fecha de inicio:</label>
					</div>
					<div class="col-sm-14">
						<input type="date" readonly class="form-control"  name="fecha_create" value="<?php echo $row['fecha_create']; ?>">
					</div>
				</div>
				
				
            </div> 
			</div>
			
           

        </div>
    </div>
</div>







