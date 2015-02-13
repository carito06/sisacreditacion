
</script>
<style>
	 #ola .tnota{
		padding: 0px;
		width: 38px; 
		
	}
	#ola .tnota input{
		font-size: 10px;
		padding: 1px 8px;
		height: 30px;
		border: none;
	}
</style>
<div class="row">
    <div class="col-md-12" id="aumentar">
		<div class='container-fluid' id="grande">
			<form id="formnotas" method="post">
				<table class="table table-hover table-bordered" id="ola" >
					<thead>   
						<tr style="background-color:#eaf8fc;" > 
							<th>#</th>
							<th>Código</th>
							<th >NOMBRE</th>
							

							<?php $cont=0;foreach ($rows2 as $key => $value) { $idU= $value[9]; ?>
							
							<?php foreach ($rows4 as $key => $value44) {?>
							
								<?php 
									if ($idU== $value44[9]) { ?>
									<th>
									<?php $new_array=explode(' ',$value44[7]);
									$acr='';
									$contad=count($new_array);
									if($contad>1){
										foreach($new_array as $key=>$val){											
											echo $val[0];
										}
									}else{
											echo substr($value44[7],0,3);	
									} ?>
									</th> 
									<?php }			
								}
							?>	
													
							<th>
								<?php 
									echo $cont+1;
								?>
							</th>
							<?php $cont=$cont+1;}?>
							<th padding="25px 20px" >Promedio</th>
						</tr>
       
					</thead>
					<tbody style="width:100%;">
	
						<?php $cont=1; $i=1; foreach ($rows as $key => $value) { ?>
						<tr> 
							<td><?php echo $cont; $cont++;?></td>
							<td>
								<?php echo strtoupper(utf8_encode($value[2]));?>
								<input type="hidden" name="idalumno[]" value="<?php echo $value[0] ?>" >
							</td>   
							<td style="font-size:11px;" align="left">
								<?php echo strtoupper(utf8_encode($value[1]));?>
							</td>

							<?php $alum= $value[0];
								if (isset($rows2)){ $j=1;
									foreach ($rows2 as $key => $value) {   $idU= $value[9]; ?>
										
											<?php if (isset($rows4)){$ev=1;
												foreach ($rows4 as $key => $value5) {$ie= $value5[3]; $ponderado= $value5[2]; 
													//echo $value5[9]; 
													if ($idU== $value5[9]) { ?>
													<td class="tnota U<?php echo $j;?> U<?php echo $j.'-'.$i.'-'.$ev; $ev++;?>">
													<?php if (isset($rows3)){ 
													 foreach ($rows3 as $key => $value) { ?>
																	<?php if (($value[0]==$alum) && ($value[2]==$ie)){ ?>
																 		<input type='text' maxlength='2'  pattern='{0-9}+'  class='form-control nota' name="<?php echo $alum;?>,<?php echo $ie;?>" id = "<?php echo ($value[1]*$ponderado)/100;?>"value="<?php echo (int)$value[1];?>" onblur='hi(this)'/>	
																	<?php }?>
													<?php } ?>
														<input type="hidden" id="0"/>
													<?php } } ?>

													</td>
											<?php }}?>
										
										<td bgcolor="#eaf8fc" class="Uni"  id="<?php echo $i.','.$j ?>"><?php echo $i.','.$j ?></td>
								<?php   $j++; } ?>

							<?php }?>
							<td id="<?php echo $i.','.($j-1).'p'; ?>">
								<?php echo $i.','.($j-1).'p'; ?>
							</td>
						</tr>
					<?php $i++;} ?>
					</tbody>
					<!---
					<tfoot style="display: inline-block;width:100%">
						<tr>
							<td style="border:0;">
								<div class="button" id="enviarn">Enviar</div>
							</td>
						</tr>
					</tfoot>
   					-->
				</table>
			</form>
		</div>
    </div>             
</div>
<script>
nroFilas= $("#ola tbody tr:nth-child(1) td").length-3;
nroColumnas= $("#ola tbody tr").length;
nroUnidades= $("#ola tbody tr:nth-child(1) .Uni").length;
	var n = [];
	alert(nroFilas-nroUnidades);
//for (var f = 1; f < (nroFilas-nroUnidades); f++) {
	for (var c = 1; c <= nroColumnas; c++) {
		//n[c]=[];
		for (var u = 1; u <= nroUnidades; u++) {
			tam= $('#ola tbody tr:nth-child(1) .U'+u).length;
			n[c]=[];
			if(tam==1){
				n[c]=$('.U'+u+'-'+c+'-'+tam+' input').attr('id');
			}else{
				for (var t = 1; t <= tam; t++) {
					n[c].push($('.U'+u+'-'+c+'-'+t+' input').attr('id'));
				}
			}
			//n[c].push(n[u]);
		}
		
	}
//}
	console.log(n);
	//alert(n.length);
//alert(parseFloat($('.U1-1-1 input').attr('id'))+parseFloat($('.U1-1-2 input').attr('id')));

	function hi(control){
		//alert(control.value);
		cl2= $(control).attr('name');
		myArray = cl2.split(',');
		idAlumno=myArray[0];
		idTipEvaluacion=myArray[1];
		campoInput= $(control).val();

		$.post('index.php', 'controller=cursosemestre&action=editarNota&CodAlumno=' +idAlumno+'&CodTipEvaluacion='+idTipEvaluacion+'&campo='+campoInput, function(data) {
			alertify.log("se inserto nota");
        });

       //curso= $('#tablaevaluaciones .pn4 .codcurso').val();
       //VerRegistro(curso);
    
		/*
        $.post('index.php','controller=cursosemestre&action=getCalificaciones&idsemestre='+codsemestre+'&idcurso='+codcurso+'&idalumno='+idAlumno, function(data) {
        $(".vernot").empty().append(data);
        $(".vernot input[type=number]").css("display","");
	    });*/
	}
/*
	$('#ola .tnota').click(function(){
		cl= $(this).attr('id');
		$('input[type=text]').attr('id',''+cl);
		$('<div class="vernot"></div>').appendTo(''+this);

	});
*/
</script>


    