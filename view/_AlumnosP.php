<style>
    .tnota{
        padding: 0px;
        width: 38px; 
        
    }
    .tnota input{
        font-size: 10px;
        padding: 1px 8px;
        height: 30px;
        border: none;
    }
</style>
<table class="table table-bordered table-hover" >
                    <thead >
                        <tr>
                            <tH>#</tH>
                            <tH>CÓDIGO</tH>
                            <th>ALUMNOS EN EL PROYECTO</th>
                            <?php  if($_SESSION['perfil'] == 'PROFESOR'){?>
                            <th>CALIFICAR</th>
                            <?php  }?>

                        </tr>
                    </thead>
                    <tbody>
                                <?php $i=1; foreach ($rows as $key => $value) { $CodA=$value[4];?>
                            <tr> 
                                <td> <?php echo $i; $i++; ?> </td> 
                                <td><?php echo $value[5]; ?></td>
                                <td align="left"> 
                                    <?php echo strtoupper(utf8_encode($value[3])); ?>
                                </td>
                                <?php  if($_SESSION['perfil'] == 'PROFESOR'){?>
                                <td class="tnota">
                                    
                                    <?php if($rows1){
                                             foreach ($rows1 as $key => $value1) { 
                                              if ($CodA == $value1[3] ){                         
                                         ?>
                                            <input class="form-control notaA" type="text" id="<?php echo $value[0]; ?>" name="<?php echo $value[4]; ?>" value="<?php echo $value1[1]; ?>" placeholder="">    
    
                                    <?php } ?> 
                                            


                                    <?php }}else{ ?> 
                                        <input class="form-control nota" type="text" id="<?php echo $value[0]; ?>" name="<?php echo $value[4]; ?>" value="0" placeholder="">
                                    <?php } ?>                                    
                                </td>
                                <?php  }?>
                            </tr>  
<?php } ?>
                    </tbody>
                </table>


<script>
    $(".nota").blur(function(){
        nota= $(this).val();
        idAlum= $(this).attr('name');
        idPro= $(this).attr('id');
        console.log(nota+idAlum+idPro);
        $.post('index.php', 'controller=notasproyecto&action=guardar&IdAlumno=' +idAlum+'&idproyecto='+idPro+'&nota='+nota, function(data) {
            console.log(data);
        });
    });
    $(".notaA").blur(function(){
        nota= $(this).val();
        idAlum= $(this).attr('name');
        idPro= $(this).attr('id');
        console.log(nota+idAlum+idPro);
        $.post('index.php', 'controller=notasproyecto&action=actualizar&IdAlumno=' +idAlum+'&idproyecto='+idPro+'&nota='+nota, function(data) {
            console.log(data);
        });
    });
    
</script>