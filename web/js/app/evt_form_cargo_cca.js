$(function() {    
    $( "#save" ).click(function(){
        bval = true; 
        bval = bval && $( "#descripcion" ).required();            
        if ( bval ) {
            $("#frm").submit();
            alert("DATOS GUARDADOS");
            window.close();
        }
        else{alert("LLENAR TODOS LOS CAMPOS!!!");}
        return false;
    });   
});