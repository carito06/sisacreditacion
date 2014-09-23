<!--Partes del  silabo-->
<style>

    .nav a{
        color:#428bca; 

    }
</style>
<br>

<!--ALUMNO Comienza-->


<?php if (isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == 'PROFESOR')) { ?>
    <script type="text/javascript" src="js/app/evt_form_cursosemestre.js" ></script>
    <!--INICIO foreach-->
    <div id="ampliar">
    <ul class="nav nav-tabs" id="myTab" >
        <li class="active"><a href="#editar" data-toggle="tab" class="editar" class="ecp">FECHA</a></li>
        <li><a href="#competencia" data-toggle="tab" class="ecp" >Competencia</a></li>
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
            <div class="tab-pane active" id="editar"></div>
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

            <div id="unidades">

            </div>

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
        </div>
    <iframe class="recibS col-md-offset-1"src="" width="990" height="650"  style="display: none;" marginwidth="0" marginheight="0" frameborder="0" scrolling="no"> 
          
          </iframe>


        <?php }
        }else{ ?>
<form id="frm1" action="index.php" method="POST">
<input type="hidden" name="controller" value="cursosemestre" />
    <input type="hidden" name="action" value="save" />
<div class="tab-content col-md-11">
         <div class="tab-pane active" id="editar">
                <br>
                <label for="fecha_inicio" style="width: 120px">Fecha Inicio:</label>
                <input  class="datepicker" maxlength="100" name="fecha_inicio" class="text ui-widget-content ui-corner-all hasDatepicker" style=" width: 150px; text-align: left;" value="">
                <label for="fecha_terminox" style="width: 120px">Fecha Termino:</label>
                <input class="datepicker" maxlength="100" name="fecha_termino"  style=" width: 150px; text-align: left;" value="">
                <br>
                <label for="duracion" style="width: 120px">Duracion:</label>
                <input type="number" id="duracion" name="duracion" class="text ui-widget-content ui-corner-all" value="17 semanas">
            editar</div>
        <div class="tab-pane" id="competencia" align="justify">
            <br>
             <textarea id="competencia_1" class="form-control" name="competencia" rows="10"> </textarea>
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
        <div class="tab-pane"  id="unidad" align="justify">
            <label for="">especifar n° de unidades</label>
            <input id="nuni" number=10 type="number"/>
            <button type="button" id="generar_u">generar</button>

            <br/><br/><br/>
            <div id="unidd" ></div>
           


        </div>
        <div class="tab-pane" id="bibliografia">
            <br>
                
                <label for="tipo_bibliografia" class="labels" style="width: 100px" >Tipo Bibliografia:</label>
                <button id="biblio" type="button">agregar bibliografia</button> <br>

                 <div id="tabs">
         <?php 
                mysql_connect("localhost", "root", "");
                mysql_select_db("sisacreditacion");
                        $consulta=mysql_query("SELECT descripcion_tipobibliografia from tipo_bibliografia ");
                        $temp=3;
                        echo "<ul>";
                        for ($i=0; $i <$temp ; $i++) { 
                        }
                        echo "</ul>";
                       
                     ?>
                     
                 </div>
                 
        </div>
</div>
    <br/><br/>
      <button type="button" class="btn btn-info" id="grabar_1">Siguiente</button>
  </form>
   <?php }
        ?> 

    <?php } ?>
