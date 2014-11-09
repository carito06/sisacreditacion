<?php $i=1; ?>
<div class="pn2"></div>
<div class="effect" id="byesyllabus">

<?php foreach ($rows as $key => $value) {  ?>

<div id="<?php echo $i; $i++; ?>" class="lc" style="margin-left: 0px; width:150px; " >
        <div class="list-group" style="margin-left: 17px; border-radius: 10px; 
        box-shadow:0px 0px 10px 0px skyblue ; background-color:#eaf8fc;" title="<?php echo utf8_encode(strtoupper($value[4])); ?>">
            
            <?php if(isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == 'ALUMNO')){?>
            
            <p style="font-size:8.4px; background-color:#eaf8fc; border:none"class="list-group-item ">
                <?php echo utf8_encode(strtoupper($value[1])); ?>
                   
                <!-- <b>Docente:</b><?php // echo (utf8_encode(strtoupper($value[2]))); ?> -->
                  <span class="badge" title="creditos" style="background: skyblue; margin-top:-20px; margin-right: -19px;">
                     <?php $credito =(int)$value[2]; echo $credito;?> 
                  </span>  
            </p>
            <?PHP }?>
             
         
            <?php if(isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == 'PROFESOR')){?>
         
            <a href="#" style="font-size:8.4px; background-color:#eaf8fc; border:none" class="list-group-item vcc">
            
            <?php echo utf8_encode(strtoupper($value[1])); ?>
           <span class="badge" title="creditos" style="background: skyblue; margin-top:-30px; margin-right: -19px;">
             <?php $credito =(int)$value[3]; echo $credito; ?> 
           </span>  

            </a>
            
          
            
            

             <?php }?>
        
       
         
         <div>
                <?php if(isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == 'ALUMNO')){?>
                    
                <input  type="hidden" class="semestre" value="<?php echo $value[4]?>"/> 
                
                <input  type="hidden" class="curso" value="<?php echo $value[3]?>"/> 
                
                <a onclick="Ver('<?php echo $value[0];?>')" style="font-size:10px; align:center; padding:2px 2px ;" id="" name="" class="btn btn-primary btn-xs">syllabus</a>
                 <a onclick="VerSyllabus('<?php echo $_SESSION['idusuario'];?>','<?php echo $value[0];?>')" style="font-size:10px; align:center; padding:2px 2px ;" id="" name="" class="btn btn-primary btn-xs">notas</a>

              <?php }?>
            <?php if(isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == 'PROFESOR')){?>

                <a onclick="Ver('<?php echo $value[0];?>')" style="font-size:10px; align:center; padding:2px 2px ;" 
                id="" name="" class="btn btn-primary btn-xs">lista</a>
                <a onclick="VerRegistro('<?php echo $value[0];?>')" style="font-size:10px; align:center; padding:2px 2px ;" 
                id="" name="" class="btn btn-primary btn-xs">registro</a>
                <a onclick="VerSi('<?php echo $value[0];?>','<?php echo $id; ?>')" style="font-size:10px; align:center; 
                padding:2px 2px ;" id="" name="" class="btn btn-primary btn-xs">sylabus</a>
                <a onclick="VerAsistencia('<?php echo $value[0];?>')" style="display:none; font-size:10px; align:center;
                 padding:2px 2px ;" title="desabilitado por el momento"  class="btn btn-primary btn-xs">asistencia</a>

             <?php }?>
        </div>  
        </div> 
    </div>  

<?php  }?>
</div>
<div class="pn1" width="170px" heigth="20%" style="display: none">
</div>
<span style="cursor:pointer; margin-left:-60px; top:-10px; display: none" title="desplazar" class="glyphicon glyphicon-chevron-down sp1" ></span>
<script>
$(document).ready(function(){
  $('.sp1').click(function(){
    $('.pn1').slideToggle('slow');
  });
  tndiv= $('.lc').length;
  
  $('.lc').click(function(){
    $('.sp1').css("display","");
     tidp= $(this).attr('id');
     for (i = 1; i <= tndiv; i++) {
         if (i==parseInt(tidp)) {
            $('#'+i).appendTo('.pn2');
         }else{
            $('#'+i).appendTo('.pn1');
         }
         $('.pn1').css("display","none");
     }
  });
})
</script>