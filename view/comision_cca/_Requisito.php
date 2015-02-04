<script type="text/javascript" src="js/app/evt_form_comision_cca.js" ></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<h4 align="center">LISTA DE REQUISITOS</h4>
<a id="nuevor" class="button">NUEVO</a>
<div style="width: 100%; height: 240px; overflow: scroll">
    <table class="table table-bordered" style="background-color: #dfeffc">
        <tr style="background-color: #afd9ee; border-style: double; font-size: larger">
            <td>REQUISITO</td>
            <td>ACCION</td>
        </tr>
        <?php  
       // print "<pre>"; print_r($requisitos); print "</pre>\n";exit();
        foreach ($requisitos as $value){?>
        <tr>
            <td>
                <?php echo $value[2];?>
            </td> 
            <td><a class="button" href="index.php?controller=requisitos_cca&action=delete&id=<?php echo $value[0]?>&idcomi=<?php echo $value[1]?>">ELIMINAR</a></td>
        </tr>
        <input type="hidden" name="codigoc" class="codigoc" value="<?php echo $value[2]?>" required="date"/>
         <?php } ?>
    </table>
</div>
<!--<div id="formumi">
        
</div>-->

