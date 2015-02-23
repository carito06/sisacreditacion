<br>
<div class="row">
                    

    <div class=" col-md-10  ">
<br>
 <div class='container-fluid' style="overflow-y: auto; height:270px; width: 650px">

 
        <table class="table table-hover table-bordered ola" >
            <thead>
                <tr>
                <?php foreach ($rows as $key => $value) {?>
                <th> <?php echo $value[0]; ?> 
                    
                </th>
                
                <?php } ?>
                <th>NOTA FINAL</th>
                </tr>
                
            </thead>
            <tbody>
                <tr>
                <?php $i=1; foreach ($rows as $key => $value2) {?>
                <td> <input class="as" id="A<?php echo $i; $i++; ?>" type="text" name="<?php echo $value2[2]; ?>"   namee="<?php echo $value2[3]; ?>"value="<?php echo (int)$value2[1]; ?> " placeholder="">
                </td>
                
                <?php } ?>
                <td id="total" >
                    
                </td>
                </tr>
                
            </tbody>
        </table>
         
      </div>
      </div>             
</div>

<script>
    nroColumnas= $(".ola tbody tr td").length-1;
    a=0;
    for (var i = 1; i <= nroColumnas; i++) {
        nota = $('#A'+i).val();
        por= parseFloat($('#A'+i).attr('name'));
        por2= parseFloat($('#A'+i).attr('namee'));
        a+= parseInt(( nota * por * por2 )/10000);
    }
    $('#total').text(a);

    $(".as").blur(function(){
        nroColumnas= $(".ola tbody tr td").length-1;
    a=0;
    for (var i = 1; i <= nroColumnas; i++) {
        nota = $('#A'+i).val();
        por= parseFloat($('#A'+i).attr('name'));
        por2= parseFloat($('#A'+i).attr('namee'));
        a+= parseInt(( nota * por * por2 )/10000);
    }
    $('#total').text(a);
    });
</script>