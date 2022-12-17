
<!-- EDITAR CONTRASEÑAS -->



<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id_salon']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<br>
				<img src ="../assets/images/salon.png" style="max-width: 110px; margin-left:30px;">
				<h2 class="text-center"><?php echo $row['nomsalo'].' '; ?> </h2>
			</div>
			
           <div class="modal-footer">
                
				
                <a href="../vista/salon/BorrarRegistro.php?id=<?php echo $row['id_salon']; ?>" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
			
			
			
        </div>
    </div>
</div>


<!-- EDITAR CATEGORIA ------------------------------------------>


<div class="modal fade" id="edit_<?php echo $row['id_salon']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Salón</h4></center>
				<br>
				<img src ="../assets/images/salon.png" style="max-width: 110px; margin-left:30px;">
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form  method="POST" autocomplete="off" action="../vista/salon/editarsalon.php?id=<?php echo $row['id_salon']; ?>">
			
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Nombre del salón:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control"   name="nomsalo" value="<?php echo $row['nomsalo']; ?>">
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

<div class="modal fade" id="ver_<?php echo $row['id_salon']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Ver Salón</h4></center>
				<br>
				<img src ="../assets/images/salon.png" style="max-width: 110px; margin-left:30px;">
            </div>
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Nombre del salón:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" readonly pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}"  name="nomsalo" value="<?php echo $row['nomsalo']; ?>">
					</div>
				</div>
				
            </div> 
			</div>
			
        </div>
    </div>
</div>







