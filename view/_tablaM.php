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
                <td> <?php echo (int)$value2[1]; ?> 
                    <input id="A<?php echo $i; $i++; ?>" type="hidden" name="" value="<?php echo ($value2[1]*$value2[2]*$value2[3])/10000; ?> ">
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
        a+= parseInt($('#A'+i).val());
    }
    $('#total').text(a);
</script>