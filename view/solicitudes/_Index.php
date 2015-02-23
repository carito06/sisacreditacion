<?php  include("../lib/functions.php"); ?>
<script>
    /*function verMas(nombre, tema, periodo, jefe, escuela, estado, fecha, viabilidad, presupuesto, impactos,
            sinergias, tipoproy, facultad, lineain, ejetem, grupo, distrito, provincia, departamento, id) {
        $('#nombre').text(nombre);
        $('#tema').text(tema);
        $('#periodo').text(periodo);
        $('#jefe').text(jefe);
        $('#escuela').text(escuela);
        $('#estado').text(estado);
        $('#fecha').text(fecha);
        $('#viabilidad').text(viabilidad);
        $('#presupuesto').text(presupuesto);
        $('#impactos').text(impactos);
        $('#sinergias').text(sinergias);
        $('#tipoproy').text(tipoproy);
        $('#facultad').text(facultad);
        $('#lineain').text(lineain);
        $('#ejetem').text(ejetem);
        $('#grupo').text(grupo);
        $('#distrito').text(distrito);
        $('#provincia').text(provincia);
        $('#departamento').text(departamento);
        $('#id').text(id);

        $('#dialogo').dialog('open');
    }*/
    function Unirse(id2,idalumno) {
        $('#id2').text(id2);
        $('#idalumno').text(idalumno);
        $('#dialogo2').dialog('open');
    }
    
    function Unirse2(id3,idalumno3) {
        $('#id3').text(id3);
        $('#idalumno3').text(idalumno3);
        $('#dialogo3').dialog('open');
    }

 $(document).ready(function() {
        $("#dialogo").dialog({autoOpen: false});

        $('#dialogo').dialog({
            modal: true,
            show: 'explode',
            hide: 'explode'
        });
        $("#abrir").click(function(event) {
            $("#dialogo").dialog('open');
        });

});

    $(document).ready(function() {
        $("#dialogo2").dialog({autoOpen: false});

        $('#dialogo2').dialog({
            modal: true,
            show: 'explode',
            hide: 'explode'

        });

        $("#abrir2").click(function(event) {
            $("#dialogo2").dialog('open');
        });
        $(".cerrar2").click(function(event) {
            $("#dialogo2").dialog('close');
        });
        

    });
  
    $(document).ready(function() {
        $("#dialogo3").dialog({autoOpen: false});

        $('#dialogo3').dialog({
            modal: true,
            show: 'explode',
            hide: 'explode'

        });

        $("#abrir3").click(function(event) {
            $("#dialogo3").dialog('open');
        });
        $(".cerrar3").click(function(event) {
            $("#dialogo3").dialog('close');
        });
        

    });


</script>  
<h6 class="ui-widget-header">Listado de Proyectos</h6>
<div class="container-fluid" style="overflow-y: auto; min-height: 390px">

    
    
    <!--<strong for="CodigoFacultad" class="labels" style="width:70px; margin: 10px;" >Facultad:</strong>
    <?php echo $facultades; ?>&nbsp;
        <strong for="CodigoSemestre" class="labels" style="width:70px; margin: 10px;" >Semestre:</strong>
       
        

    <?php echo $semestreacademico;?>
       
  -->
  <br>
   

  <div id="tabla2">

    <?php echo $solicitudes; ?>
    </div>
  
  
  

 
 
</div>
