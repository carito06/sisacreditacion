<br>
<div class="row">
                    

    <div class=" col-md-10  ">
<br>
 <div class='container-fluid' style="overflow-y: auto; height:270px; width: 650px">

 
        <table class="table table-hover table-bordered" >
            <thead>
                <tr>
                <?php foreach ($rows as $key => $value) {?>
                <th> <?php echo $value[0]; ?> </th>
                
                <?php } ?>
                <th>NOTA FINAL</th>
                </tr>
                
            </thead>
            <tbody>
                <tr>
                <?php foreach ($rows as $key => $value2) {?>
                <td> <?php echo $value2[1]; ?> </td>
                
                <?php } ?>
                <td>falta</td>
                </tr>
                
            </tbody>
        </table>
         
      </div>
      </div>             
</div>