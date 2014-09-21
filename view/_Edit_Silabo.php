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

        <li class="active"><a href="#competencia" data-toggle="tab" class="ecp" >Competencia</a></li>
        <li><a  href="#metodologia" data-toggle="tab" class="ecp">Metodologia</a></li>
        <li><a href="#objetivo" data-toggle="tab" class="ecp">Objetivo</a></li>
        <li><a href="#sumilla" data-toggle="tab" class="ecp">Sumilla</a></li>
        <li><a href="#unidad" data-toggle="tab" class="unidad" class="ecp">Unidad</a></li>
        <li><a href="#bibliografia" data-toggle="tab" class="ecp">Bibliografia</a></li>
        <li><a href="#editar" data-toggle="tab" class="editar" class="ecp">Editar</a></li>
        <li><a href="#regresar" data-toggle="tab" class="regresar" class="ecp">Regresar</a></li>
        

    </ul> 

    <?php

   if($rows){

    foreach ($rows as $key => $value) { 

        ?>
        <div class="tab-content col-md-11">
            <div class="tab-pane active" id="competencia" align="justify">
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
        
<!--        edit inicio-->
        <div class="tab-pane" id="editar">

<!-- < <input type="hidden" id="idunida" value="<?php echo $value[1]?>"><</div>-->
<br>
<br>
                    <div id="boton">
                        
                        <button  class="btn btn-primary btn-sm"  type="button"  id="editsy" onclick="editSylabus(<?php echo $value[6]?>)">Editar Silabus</button>
                        <button class="btn btn-primary btn-sm" type="button"  value="Unidades" id="unid" >Unidades</button><br>
            
                    </div>
                        <div id="uni">
                                 
                             </div>

                    <div id="editarsilabus">

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
<form id="frm1" action="Index.php" method="POST">
<div class="tab-content col-md-11">

        <div class="tab-pane active" id="competencia" align="justify">
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
            <input id="nuni" type="number"/>
            <button type="button" id="generar_u">generar</button>

            <br/><br/><br/>

            <div id="llena_form">

            </div>
            <div id="tabs" class="tabreferer" style="display: none" >
                <ul>
                    <li><a href="#tabs-1">Nunc tincidunt</a></li>
                    <li><a href="#tabs-2">Proin dolor</a></li>
                    <li><a href="#tabs-3">Aenean lacinia</a></li>
                </ul>
                <div id="tabs-1">
                    <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
                </div>
                <div id="tabs-2">
                    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                </div>
                <div id="tabs-3">
                    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                </div>
            </div>

        </div>
        <div class="tab-pane" id="bibliografia">
            <br>
            <textarea id="bibliografia_1" class="form-control" name="bibliografia" rows="10"></textarea>
        </div>
        <div class="tab-pane" id="editar">
                <br>
                <label for="fecha_inicio" style="width: 120px">Fecha Inicio:</label>
                <input  class="datepicker" maxlength="100" name="fecha_inicio" class="text ui-widget-content ui-corner-all hasDatepicker" style=" width: 150px; text-align: left;" value="">
                <label for="fecha_terminox" style="width: 120px">Fecha Termino:</label>
                <input class="datepicker" maxlength="100" name="fecha_termino"  style=" width: 150px; text-align: left;" value="">
                <br>
                <label for="duracion" style="width: 120px">Duracion:</label>
                <input type="number" id="duracion" name="duracion" class="text ui-widget-content ui-corner-all" value="17 semanas">
            editar</div>

</div>
    <br/><br/>
      <button type="button" id="grabar_1">Grabar Silabus</button>
  </form>
   <?php }
        ?> 

    <?php } ?>
