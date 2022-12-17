


<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id_intr']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<br>
				<img src ="../assets/images/user02.png" style="max-width: 110px; margin-left:30px;">
				<h2 class="text-center"><?php echo $row['nomintr'].' '; ?> </h2>
			</div>
			
           <div class="modal-footer">
                
				
                <a href="../vista/instruc/BorrarRegistro.php?id=<?php echo $row['id_intr']; ?>" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
			
			
			
        </div>
    </div>
</div>


<!-- EDITAR CLIENTE -->


<div class="modal fade" id="edit_<?php echo $row['id_intr']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Instructor</h4></center>
				<br>
				<img src ="../assets/images/user02.png" style="max-width: 110px; margin-left:30px;">
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form  method="POST" autocomplete="off" action="../vista/instruc/editarinstruc.php?id=<?php echo $row['id_intr']; ?>">
			
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Nombre del instructor:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}"  name="nomintr" value="<?php echo $row['nomintr']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">DNI del instructor:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="8"  name="dnistr" value="<?php echo $row['dnistr']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Correo del instructor:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control"  name="email" value="<?php echo $row['email']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Teléfono del instructor:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="9"  name="teelf" value="<?php echo $row['teelf']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Edad del instructor:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="2"  name="edad" value="<?php echo $row['edad']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Fecha de inicio:</label>
					</div>
					<div class="col-sm-14">
						<input type="date" class="form-control"  name="fech_ini" value="<?php echo $row['fech_ini']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Fecha de fin:</label>
					</div>
					<div class="col-sm-14">
						<input type="date" class="form-control"  name="fech_fin" value="<?php echo $row['fech_fin']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Genéro:</label>
					</div>
					<div class="col-sm-14">
						<select name="gener" class="form-control" value="<?php echo $row['gener']; ?>">
						  <option readonly value="<?php echo $row['gener']; ?>"><?php echo $row['gener']; ?></option>
						  <option value="Masculino">Femenino</option>
						  <option value="Femenino">Masculino</option>
						</select>
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