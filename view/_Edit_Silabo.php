<!--Partes del  silabo-->
<style>
    .nav a{
        color:#428bca; 
    }
</style>
<!--ALUMNO Comienza-->

<?php if (isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == 'PROFESOR')) { ?>
    <script type="text/javascript" src="js/app/evt_form_cursosemestre.js" ></script>
    
    <script type="text/javascript" src="lib/alertify.js"></script>
    <link rel="stylesheet" href="../web/themes/alertify.core.css" />
    <link rel="stylesheet" href="../web/themes/alertify.default.css" />
    <link rel="stylesheet" href="../web/css/css.css">
    <!--INICIO foreach-->
    <div id="ampliar">
    <ul class="nav nav-tabs" id="myTab" >
        <li class="active"><a href="#competencia" data-toggle="tab" class="ecp" >Competencia</a></li>
        <li><a  href="#metodologia" data-toggle="tab" class="ecp">Metodologia</a></li>
        <li><a href="#objetivo" data-toggle="tab" class="ecp">Objetivo</a></li>
        <li><a href="#sumilla" data-toggle="tab" class="ecp">Sumilla</a></li>
        <li><a href="#unidad" data-toggle="tab" class="unidad" class="ecp">Unidad</a></li>
        <li><a href="#bibliografia" data-toggle="tab" class="ecp">Bibliografia</a></li>
        <li><a href="#regresar" data-toggle="tab" class="regresar" class="ecp">Regresar</a></li>
    </ul> 
    <?php

   if($rows){

    foreach ($rows as $key => $value) { 

        ?>

        <div class="tab-content col-md-11">
            <div class="tab-pane" id="competencia" align="justify">
            <?php echo $value[0] ?>
            <button class="btn btn-default">Editar</button>
            </div>
            <div class="tab-pane" id="metodologia" align="justify"><?php echo $value[1] ?></div>
            <div class="tab-pane" id="objetivo" align="justify"><?php echo $value[2] ?></div>
            <div class="tab-pane" id="sumilla" align="justify"><?php echo $value[3] ?></div>

        <input type="hidden" id="semestre" value="<?php echo $value[4] ?>"/>
        <input type="hidden" id="curso" value="<?php echo $value[5] ?>"/>
<!--        unidad inicio-->
        <div class="tab-pane"  id="unidad" align="justify">
            <div id="unidades"></div>
        </div>
<!--        unidad fin-->
        <div class="tab-pane" id="bibliografia">
            <input  type="hidden" id="curs" value="<?php echo $value[5] ;?>"/>
            <input type="hidden" id="semes" value="<?php echo $value[4] ; ?>">
            <?php foreach ($rows4 as $key => $value) {?>
                    <?php echo $value[0];?>
                <?php }?>
    
        </div>
         <br>
        </div>
<div class="tab-pane" id="regresar">
    
</div>
<!--        edit fin-->
</div>
    <iframe class="recibS col-md-offset-1"src="" width="990" height="650"  style="display: none;" marginwidth="0" marginheight="0" frameborder="0" scrolling="no">           
          </iframe>


        <?php }
        }else{ ?>
<form id="frm1" action="index.php?controller=cursosemestre" method="POST">
<input type="hidden" name="controller" value="cursosemestre" />
    <input type="hidden" name="action" value="save" />
    <input type="hidden" name="codemestre" value="<?php echo $_POST["codemestre"]; ?>" >
    <input type="hidden" name="codcurso" value="<?php echo $_POST["Codigo"]; ?>" >
    <input type="hidden" name="coddocente" value="<?php echo $_SESSION['idusuario']; ?>" >
<div class="tab-content col-md-11">
        <div class="tab-pane active" id="competencia" align="justify">
            <br>
             <textarea id="competencia_1" class="form-control" name="competencia" required rows="10"> </textarea>
        </div>

        <div class="tab-pane" id="metodologia" align="justify">
            <br>
            <textarea id="metodologia_1" class="form-control" name="metodologia" rows="10"> </textarea>
        </div>

        <div class="tab-pane" id="objetivo" align="justify">
            <br>
            <textarea id="objetivo_1" class="form-control" name="objetivo" rows="10"></textarea>
        </div>

        <div class="tab-pane" id="sumilla" align="justify">
            <br>
            <textarea id="sumilla_1" class="form-control" name="sumilla" rows="10"></textarea>
        </div>
        <div class="tab-pane"  id="unidad" align="justify" >
            <br>
            <button type="button" style="margin-left:40%;" class="btn btn-default" value="Prompt" onClick="datos()">
            Agregar Unidades</button>
            <br><br>
            <div id="unidd" ></div>
           


        </div>
        <div class="tab-pane" id="bibliografia">
            <br>
        <button id="biblio" type="button" class="btn btn-default" value="Prompt" onClick="bib()" type="button">Agregar Bibliografia</button> <br>
 
        <div id="bibl"></div> 
          <?php 
                mysql_connect("localhost", "root", "");
                mysql_select_db("sisacreditacion");
               $consulta=mysql_query("SELECT descripcion_tipobibliografia from tipo_bibliografia ");
               echo '<label for="tipo_bibliografia" class="labels" style="width: 100px" >Tipo Bibliografia:</label';
               echo "<select name='descripcion_tipobibliografia' style='width:300px;' class='form-control' id='descripcion_tipobibliografia'>";
               echo "<option value='0'>Elige</option>";
                   while($registro=mysql_fetch_row($consulta)){
                       echo "<option value='".$registro[0]."'>".$registro[0]."</option>";
                    }
                echo "</select>";   
                echo '<br/>';
         ?>      
        </div>
</div>


     <!-- <button type="button" id="grabar_1" class="btn btn-info">Grabar Silabus</button>-->
      <input type="submit" id="grabar_1" class="btn btn-info" value="Grabar Silabus">
</form>
<?php }

        ?> 

    <?php } ?>
