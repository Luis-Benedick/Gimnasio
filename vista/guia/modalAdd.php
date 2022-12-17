  <div class="modal" id="myModal_<?php echo $row['codguia']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Desea agregarlo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form method="POST" action="../guia/enviardatos2.php?id=<?php echo $row['codguia']; ?>">
			<div class="row form-group" style="display:none;">
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codguia" value="<?php echo $row['codguia']; ?>">
					</div>
			</div>
			
			<div class="row form-group" style="display:none;">
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fechare" value="<?php echo date("Y-m-d");?>">
					</div>
			</div>
			
			
			
			<div class="row form-group" style="display:none;">
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_clien" value="<?php echo ucfirst($_SESSION['id']); ?>">
					</div>
			</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
			<button type="button" title="Cancelar" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-remove"></span> </button>
			<button type="submit" name="agregar"  title="Agregar" class="btn btn-primary"><span class="fa fa-check"></span> </button>
		</form>
			
		</div>
        
      </div>
    </div>
  </div>