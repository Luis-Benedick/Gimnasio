


<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id_produc']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<br>
				<img src ="../assets/images/paquete.png" style="max-width: 110px; margin-left:30px;">
				<h2 class="text-center"><?php echo $row['nomprod'].' '; ?> </h2>
			</div>
			
           <div class="modal-footer">
                
				
                <a href="../vista/producto/BorrarRegistro.php?id=<?php echo $row['id_produc']; ?>" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
			
			
			
        </div>
    </div>
</div>


<!-- EDITAR PRODUCTO -->


<div class="modal fade" id="edit_<?php echo $row['id_produc']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar producto</h4></center>
				<br>
				<img src ="../assets/images/paquete.png" style="max-width: 110px; margin-left:30px;">
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form  method="POST" autocomplete="off" action="../vista/producto/editarproducto.php?id=<?php echo $row['id_produc']; ?>">
			
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Nombre del producto:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control"   name="nomprod" value="<?php echo $row['nomprod']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Categoria:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" readonly  name="id_cate" value="<?php echo $row['nomcate']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Descripción:</label>
					</div>
					<div class="col-sm-14">
						
						<textarea  name="descrp" rows="10" cols="50"><?php echo $row['descrp']; ?></textarea>
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Precio:</label>
					</div>
					<div class="col-sm-14">
						
					<input type="text"  class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="2"  name="preciop" value="<?php echo $row['preciop']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Cantidad:</label>
					</div>
					<div class="col-sm-14">
						
					<input type="text"  class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="2"  name="canti" value="<?php echo $row['canti']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Fecha:</label>
					</div>
					<div class="col-sm-14">
						
					<input type="date"  class="form-control"  name="fechare" value="<?php echo $row['fechare']; ?>">
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


<!-- VER PRODUCTO -->

<div class="modal fade" id="ver_<?php echo $row['id_produc']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Ver producto</h4></center>
				<br>
				<img src ="../assets/images/paquete.png" style="max-width: 110px; margin-left:30px;">
            </div>
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Nombre del producto:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" readonly pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}"  name="nomprod" value="<?php echo $row['nomprod']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Categoria:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" readonly class="form-control"   name="nomcate" value="<?php echo $row['nomcate']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Descripción del producto:</label>
					</div>
					<div class="col-sm-14">
						
						<textarea  readonly name="descrp" rows="10" cols="50"><?php echo $row['descrp']; ?></textarea>
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Precio del producto:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" readonly class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"   name="preciop" value="<?php echo $row['preciop']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Stock del producto:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" readonly class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"   name="canti" value="<?php echo $row['canti']; ?>">
					</div>
				</div>
				
				
				
				
				
            </div> 
			</div>
			
        </div>
    </div>
</div>


<!---VALORAR---------------------------------------->


<div class="modal fade" id="valorar_<?php echo $row['id_produc']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Valorar producto</h4></center>
				<br>
				<img src ="../assets/images/paquete.png" style="max-width: 110px; margin-left:30px;">
            </div>
           
	<div class="row">
        <div id="content" class="col-lg-12">
            <form action="../vista/producto/registrovalor.php" method="post">
                
				
				<div class="valoracion">
				    <input name="rate"  type="radio" value="1">
					<label for="radio1">⭐</label>
					<input name="rate" type="radio" value="2">
					<label for="radio2">⭐</label>
					<input name="rate"  type="radio" value="3">
					<label for="radio3">⭐</label>
					<input name="rate"  type="radio" value="4">
					<label for="radio4">⭐</label>
					<input name="rate"  type="radio" value="5">
					<label for="radio5">⭐</label>
				</div>
				
				
				<div class="row form-group" style="display:none;">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Producto:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" readonly  name="id_produc" value="<?php echo $row['id_produc']; ?>">
					</div>
				</div>
                <button type="submit" name="enviar" class="btn btn-success">Enviar</button>
            </form>
			
			
			
        </div>
    </div>
	
	
	
	
          
			
			
        </div>
    </div>
</div>

