
<!-- EDITAR CONTRASEÑAS -->



<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id_grup']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<br>
				<img src ="../assets/images/chat-de-video.png" style="max-width: 110px; margin-left:30px;">
				<h2 class="text-center"><?php echo $row['nomgru'].' '; ?> </h2>
			</div>
			
           <div class="modal-footer">
                
				
                <a href="../vista/groups/BorrarRegistro.php?id=<?php echo $row['id_grup']; ?>" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
			
			
			
        </div>
    </div>
</div>


<!-- EDITAR CATEGORIA ------------------------------------------>


<div class="modal fade" id="edit_<?php echo $row['id_grup']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar grupo</h4></center>
				<br>
				<img src ="../assets/images/chat-de-video.png" style="max-width: 110px; margin-left:30px;">
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form  method="POST" autocomplete="off" action="../vista/groups/editargroup.php?id=<?php echo $row['id_grup']; ?>">
			
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Nombre del grupo:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ-_]{1,50}"  name="nomgru" value="<?php echo $row['nomgru']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Salón :</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" readonly  name="id_salon" value="<?php echo $row['nomsalo']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Cliente :</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" readonly  name="id_clien" value="<?php echo $row['nomcli']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Fecha de entrada :</label>
					</div>
					<div class="col-sm-14">
						<input type="date" class="form-control"   name="fech_entr" value="<?php echo $row['fech_entr']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Fecha de salida :</label>
					</div>
					<div class="col-sm-14">
						<input type="date" class="form-control"   name="fech_salid" value="<?php echo $row['fech_salid']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Hora de entrada :</label>
					</div>
					<div class="col-sm-14">
						<input type="time" class="form-control"   name="hora_entr" value="<?php echo $row['hora_entr']; ?>">
					</div>
				</div>
				
				
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Hora de salida :</label>
					</div>
					<div class="col-sm-14">
						<input type="time" class="form-control"  name="hora_salid" value="<?php echo $row['hora_salid']; ?>">
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







