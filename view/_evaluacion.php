<h4>EVALUACIÓN</h4>
<table class="table">
	<thead>
		<tr>
			<th>tipo Evaluacion</th>
			<th>Descripcion</th>
			<th>fecha</th>
			<th>ponderado</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($rows as $key => $value) { ?>
			<tr>
				<td >
				 <?php 
                mysql_connect("localhost", "root", "");
                mysql_select_db("sisacreditacion");
               $consulta=mysql_query("SELECT idtipo_evaluacion,descripcion from tipo_evaluacion  ");
               echo "<select style='border:none; background:#EAF8FC; width:300px;' class='form-control' id='descripcion'>";
                   while($registro=mysql_fetch_row($consulta)){
                   	 if ($value[0] != $registro[0] ) {
                       echo "<option value='".$value[0]."'>".$registro[1]."</option>";
                   }else{
                   		echo "<option selected value='".$registro[0]."'>".$registro[1]."</option>";
                   }
                    }
                echo "</select>";   
         ?>    
				</td>
				<td>
				<?php echo (utf8_encode($value[1]));?>
				</td>
				<td>
				<?php echo (utf8_encode($value[2]));?>
				</td>
				<td>
				<?php echo (utf8_encode($value[3]));?>
				</td>
			</tr>
<?php } ?>
	</tbody>
</table>