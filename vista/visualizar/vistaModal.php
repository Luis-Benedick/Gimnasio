<!-- Ventana Editar Registros CRUD -->

<div class="modal fade" id="exampleModalLong_<?php echo $row["id_produc"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
			<form>
			
					<div class="row form-group">
						 
							<div class="col-12 col-md-9">
						<img src="../assets/images/subi_produc/<?php echo $row['foto']; ?>" alt="" style="margin-left:250px;" width="190px" height="200px">

							<br />
							
							</div>
							
					</div>
					<div class="row form-group">
						<div class="col-sm-16">
							<label class="control-label" style="font-size: 31px;line-height: 35px;letter-spacing: 0.073em;font-weight: 600; margin-left:200px;"><?php echo $row['nomprod']; ?></label>
						</div>
					
					</div>
					<hr>
					
					<div class="row form-group">
						<div class="col-sm-16">
							<label class="control-label" style="font-size: 31px;line-height: 35px;letter-spacing: 0.073em;font-weight: 600; margin-left:90px;" style="position:relative; top:7px;">S/.<?php echo $row['preciop']; ?></label>
						</div>
					
					</div>
					
				<div class="row form-group">
					<div class="col-sm-16">
						<label class="control-label" style="position:relative; top:7px; margin-left:30px; color:green;font-weight: 600;">Estado: <?php echo $row['canti']; ?> disponibles</label>
					</div>
					
				</div>
							
							<!--<h4><label style="font-size: 28px;" class="control-label"></label></h4>-->
					
				</div> 
				</div>
				<div class="modal-footer">
					
					<button type="submit" name="" class="btn btn-warning" style="font-weight: 700;">Añadir al carrito</a></button>
					
					 <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                  <span class="fa fa-minus"></span>
                </button>
                </span>
				 <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
				 
				  <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                  <span class="fa fa-plus"></span>
                </button>
                </span>
					
					
					
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->




<div class="modal fade" id="vista_<?php echo $row["id_produc"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
			<form>
			
					<div class="row form-group">
						 
							<div class="col-12 col-md-9">
						<img src="../../assets/images/subi_produc/<?php echo $row['foto']; ?>" alt="" style="margin-left:250px;" width="190px" height="200px">

							<br />
							
							</div>
							
					</div>
					<div class="row form-group">
						<div class="col-sm-16">
							<label class="control-label" style="font-size: 31px;line-height: 35px;letter-spacing: 0.073em;font-weight: 600; margin-left:200px;"><?php echo $row['nomprod']; ?></label>
						</div>
					
					</div>
					<hr>
					
					<div class="row form-group">
						<div class="col-sm-16">
							<label class="control-label" style="font-size: 31px;line-height: 35px;letter-spacing: 0.073em;font-weight: 600; margin-left:90px;" style="position:relative; top:7px;">S/.<?php echo $row['preciop']; ?></label>
						</div>
					
					</div>
					
				<div class="row form-group">
					<div class="col-sm-16">
						<label class="control-label" style="position:relative; top:7px; margin-left:30px; color:green;font-weight: 600;">Estado: <?php echo $row['canti']; ?> disponibles</label>
					</div>
					
				</div>
							
							<!--<h4><label style="font-size: 28px;" class="control-label"></label></h4>-->
					
				</div> 
				</div>
				<div class="modal-footer">
					
					<button type="submit" name="" class="btn btn-warning" style="font-weight: 700;">Añadir al carrito</a></button>
					
					 <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                  <span class="fa fa-minus"></span>
                </button>
                </span>
				 <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
				 
				  <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                  <span class="fa fa-plus"></span>
                </button>
                </span>
					
					
					
			</form>
            </div>

        </div>
    </div>
</div>




















