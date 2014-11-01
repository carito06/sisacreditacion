<style>
	 #ola .tnota{
		padding: 0px;
		width: 32px; 
		
	}
	#ola .tnota input{
		font-size: 12px;
		padding: 1px 8px;
		height: 30px;
	}
</style>
<div class="row">
    <div class="col-md-12" id="aumentar">
		<div class='container-fluid' id="grande">
			<form id="formnotas" method="post">
				<table class="table table-hover table-bordered" id="ola" >
					<thead>   
						<tr style="background-color:#eaf8fc;" > 
							<th>Código</th>
							<th >NOMBRE</th>
							<?php $cont=0;foreach ($rows2 as $key => $value) { ?>
							<th>
								<?php 
									/*$new_array=explode(' ',$value[7]);
									$acr='';
									$contad=count($new_array);
									if($contad>1){
										foreach($new_array as $key=>$val){											
											echo $val[0];
										}
									}else{
										echo substr($value[7],0,3);
									}*/
									echo $cont+1;
								?>
							</th>
							<?php $cont=$cont+1;}?>
							<th padding="25px 20px" >Promedio</th>
						</tr>
       
					</thead>
					<tbody style="width:100%;">
						<?php foreach ($rows as $key => $value) { ?>
						<tr> 
							<td><?php echo strtoupper(utf8_encode($value[2]));?></td>   
							<td style="font-size:11px;" align="left">
								<?php echo strtoupper(utf8_encode($value[1]));?>
							</td>
							<?php 
								if (isset($rows2)){
									foreach ($rows2 as $key => $value) { ?>
										<td class="campo<?php echo $value[3];?> tnota" name="<?php echo $value[3];?>">
											<?php 
												foreach ($rows3 as $key => $value2) { 
													if($alumI==$value[0]){
														echo $value2[1];
													}
												}
											?>
											<input type="hidden" class="codevento" name="idevaluacion"value="<?php echo $value[3];?>" style=""/>
											<input type="hidden" class="codcurso" value="<?php echo $value[4];?>"/>
											<input type="hidden" class="codsemestre" value="<?php echo $value[5];?>"/>
				
											<div class="editarnota<?php echo $value[3];$notita="notita".$value[3];?>"></div>           
										</td>
							<?php   }
								}else {
								
								}
							?>
							<td>Promedio</td>
						</tr>
					<?php } ?>
					</tbody>
					<tfoot style="display: inline-block;width:100%">
						<tr>
							<td style="border:0;">
								<div class="button" id="enviarn">Enviar</div>
							</td>
						</tr>
					</tfoot>
   
				</table>
			</form>
		</div>
    </div>             
</div>
