<meta charset="UTF-8">
<script src="../web/js/app/evt_form_edit_silabo.js"></script>
  <button id="biblio" type="button" class="btn btn-default" onClick="bib()">Agregar</button>
  <br>
   <table id="bibl" class='table table-hover table-bordered'>
            <thead>
            <tr style='background-color:#EAF8FC;font-size:12px;text-transform:uppercase;color:#000'>
            <th>tipo de bibliografía</th>
            <th>Descripción</th>
            <th></th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($rows22 as $key => $value) { ?>
              <tr class="dtp">
              <td > 

              <?php 
                mysql_connect("localhost", "root", "");
                mysql_select_db("sisacreditacion");
               $consulta=mysql_query("SELECT descripcion_tipobibliografia from tipo_bibliografia ");
               echo "<select name='descripcion_tipobibliografia' style='width:300px;' class='form-control' id='descripcion_tipobibliografia'>";
                   while($registro=mysql_fetch_row($consulta)){
                       if ($value[4] != $registro[0] ) {
                          echo "<option value='".$value[4]."'> ".$registro[0]."</option>";
                       } else { 
                        echo "<option selected='selected' value='".$registro[0]."'> ".$registro[0]."</option>";
                       }
                    }
                echo "</select>";   
                echo '<br/>';
                ?>      
              </td>

                <td><input type='text' id='descripcion' name='descripcion[]' value="<? echo strtolower(utf8_encode($value[2])) ?>"
                  class='text ui-widget-content ui-corner-all' style='width: 100%; text-align: left;'/>
                </td>
                <td class="eliminar">
                  <button type="button" class="btn btn-default " >
                    <span class="glyphicon glyphicon-remove"></span>
                  </button>
                </td>
              </tr>
        <?php }?>
            </tbody>
    </table>            
