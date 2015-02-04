<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="../web/css/css.css"> 
<style>
    .nav a{
        color:#428bca; 
    }
</style>


<?php if (isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == 'ALUMNO')) { ?>
    <!--INICIO foreach-->
     
    <?php if ($rows) { foreach ($rows as $key => $value) { ?>
   
        <input type="hidden" id="codigosemestre" value="<?php echo $value[4]?>"/>
        <input type="hidden" id="codigocurso" value="<?php echo $value[5]?>"/>   
        <input type="hidden" id="idsilabus" value="<?php echo $value[6]?>"/>  
              
                   
 <?php } ?> 
 <div class="col-md-12">
 <br> 
 <h5>Descargar</h5>
<a class="btn btn-default gensil" title="descargar" target="_blank"
  href='index.php?controller=cursosemestre&action=generarsilabo&CodSemestre=<?php echo $value[4];?>&CodCurso=<?php echo$value[5];?>&CodSilabo=<?php echo $value[6];?>'></a>   
 </div>                    


<?php } else{?>
<h3 style="text-align: center">Sílabo no llenado</h3>
<?php } ?>
<?php } ?>
<!--ALUMNO FIN-->

<!--DOCENTE INICIO-->

<!-- inicio Evaluacionesss-->

<?php if (isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == 'PROFESOR')) { ?>
    <br>
    <div class="col-md-12">        
        <div id="borrarb">
                
    <table id="tablaevaluaciones" class="table table-bordered">
        <thead style="font-size:13px;background-color:#eaf8fc;">
            <tr>
              <th>N°</th>
              <th><strong>Descripción</strong></th>
              <th ><strong>Fecha</strong></th>
              <th><strong>Ponderado</strong></th>
              <th ><strong>Accion</strong></th>
            </tr>
        </thead>
        <?php $conta=1?>
        <tbody class="pn4" ></tbody>
        <?php foreach ($rows as $key => $value) { ?> 

        <tr class="evaluacion<?php echo $conta;?> oa" id="<?php echo $conta+100?>"> 
           <td><?php echo $conta?></td>    
           <td align="left">
             <input type="hidden"  class="codevaluacion" value="<?php echo $value[3]?>"/>
             <strong><?php echo utf8_encode($value[8])?></strong> <br>
            <p align="center"> (<?php echo utf8_encode($value[0]);?>) </p>
           </td>
           <td> <?php echo (date("d-m-Y",strtotime($value[1])))?> </td>
           <td><?php echo strtoupper(utf8_encode($value[2]));?>%</td>
           <td id="act"> <?php $fechaE=$value[1];?>
             <?php date_default_timezone_set('UTC');
             $fechaA= date("Y-m-d");
            //          echo $fechaA;
            ?>
             <?php if ($fechaE > $fechaA){?>
              <button class="btn btn-primary btn-xs" type="button" onclick="filtro('<?php echo $value[3]?>',this)" value="Insertar">Insertar</button>
              <?php }else {?>
              <button class="btn btn-primary btn-xs" type="button"  value="Inactivo" style="background-color: red;">Inactivo</button>
                  <?php }?>
              <input type="hidden" class="codcurso"  value="<?php echo $value[4]?>" />
              <input type="hidden" class="codsemestre"   value="<?php echo $value[5]?>" />
            </td>
        </tr>
                <?php $conta=$conta+1;}?>
            <?php }?>   
      <tbody class="pn3"  width="170px" heigth="20%" style="display: none"></tbody>
      
          <!--  
         <tr>
           <td colspan="4"> <a class="btn btn-info btn-sm" href="curso.pdf" target="_blanc">Generar Sylabu</a>   </td>
         </tr> -->
    </table>
    <?php if (isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == 'PROFESOR')) { ?>
    <span style="cursor:pointer; top:-19px;"  class="glyphicon glyphicon-chevron-down sp3" ></span>     
        <?php }?>   
    <script>
$(document).ready(function(){
   $('.sp3').click(function(){
    $('.pn3').slideToggle('slow');
  });

  tdiv= $('.oa').length;
  for (var i = 101; i <= tdiv+100; i++) {
    if ($('#'+i+' button').html()=="Insertar"){
      $('#'+i).appendTo('.pn4');
    }else{
      $('#'+i).appendTo('.pn3');
    }
  }
  
  $('.oa').click(function(){
      tid= $(this).attr('id');
     for (i = 101; i <= tdiv+100; i++) {
         if (i==parseInt(tid)) {
            $('#'+i).appendTo('.pn4');
         }else{
            $('#'+i).appendTo('.pn3');
         }
         $('.pn3').css("display","none");
     }
  });
})
</script>

  
</div>
 


   
